<?php

class ServidorApiController extends Controller
{
    /**
     * Get all related data to a servidor publico
     */

    public function getServidorProfile($json = true,$servidor_id=false,$viajes=true)
    {   
        if($servidor_id == false && isset(Auth::user()->servidor_id)){
            $servidorId = Auth::user()->servidor_id;
            $userId  = Auth::user()->id;
        } else {
            $servidorId = ($servidor_id != false) ? $servidor_id : Auth::user()->servidor_id;
            $user = User::where('servidor_id','=',$servidor_id)->first();
            $userId = $user['id'];
        }
        if (isset($servidorId) && $servidorId > 0) {
            $contact = Servidor::find($servidorId);//->first();
            $puesto = Servidor::find($servidorId)->puesto;

            $puesto->remuneracion = Remuneracion::where('id','=',$puesto->remuneracion_id)->get()->first();

            $cargo = Servidor::find($servidorId)->cargo;
            $unidadAdministrativa = $contact->unidadAdministrativa;
            $numberOfViajes = Viaje::where('servidor_id', '=', $servidorId)->get()->count();

            if($viajes == true){

                $viajes = Viaje::where('servidor_id', '=', $servidorId)->get();
                $viajeArray = array();
                foreach($viajes as $viaje){
                    $viajeFinal = $viaje;
                    $viajeFinal->tema = $viaje->tema;
                    $viajeFinal->eventos = $viaje->eventos;
                    foreach($viajeFinal->eventos as $k=>$evento){
                        $viajeFinal->eventos[$k]->pasajes = $evento->pasajes;
                        foreach ($evento->pasajes as $l=>$pasaje){
                            $pasaje->ciudad_origen = City::where('id', '=', $pasaje->ciudad_origen_id)->first();
                            $pasaje->ciudad_destino = City::where('id', '=', $pasaje->ciudad_destino_id)->first();
                            $viajeFinal->eventos[$k]->pasajes[$l]->ciudad_origen = $pasaje->ciudad_origen;
                            $viajeFinal->eventos[$k]->pasajes[$l]->ciudad_destino = $pasaje->ciudad_destino;
                        }
                        $viajeFinal->eventos[$k]->viatico = Viatico::where('id', '=', $evento->viatico_id)->first();
                        
                    }
                    $viajeFinal->tipoComision = $viaje->tipoComision;
                    $viajeFinal->mecanismoOrigen = $viaje->mecanismoOrigen;
                    $viajeFinal->instGenera = $viaje->instGenera;
                    $viajeArray[] = $viajeFinal;
                }
            } else {
                $viajeArray = array();
            }
            $response = array(
                                'status'    => 'success',
                                'servidor'   => array(
                                                        'contact'       => $contact, 
                                                        'puesto'        => $puesto, 
                                                        'cargo'        => $cargo, 
                                                        'unidadAdministrativa'        => $unidadAdministrativa, 
                                                        'numberOfViajes'=> $numberOfViajes,
                                                        'viajes'        => $viajeArray,
                                                ),

                            );
        } else {
            $response = array(
                                'status'    => 'fail',
                                'message'   => 'Tu perfil como servidor aún no ha sido de alta.'

                            );
        }
        if($json == true){ //regresamos respuesta en json
            return Response::json($response);
        } else {
            return $response;
        }
    }

    public function getServidores()
    {   
        $limit = (Request::get('limit') != null) ? Request::get('limit') : 10;
        if($limit>=1){
            $servidores = Servidor::all()->take($limit);
        } else {
            $servidores = Servidor::all();
        }
        $servers = array();
        $x=0;
        foreach($servidores as $servidor){
            $servers[$x] = $servidor;
            $servers[$x]->viajes = Viaje::where('servidor_id','=',$servidor->id)->get();
            $servers[$x]->puesto = $servidor->puesto;
            $servers[$x]->cargo = $servidor->cargo;
            $servers[$x]->unidadAdministrativa = $servidor->puesto;
//            $servidor->viajes;
            $x++;
        }
        return Response::json($servers);
    }
}