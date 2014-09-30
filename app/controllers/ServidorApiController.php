<?php

class ServidorApiController extends Controller
{
    /**
     * Get all related data to a servidor publico
     */

    public function getServidorProfile($json = true)
    {   
        $servidorId = Auth::user()->servidor_id;
        $userId  = Auth::user()->id;
        if (isset($servidorId) && $servidorId > 0) {
            $contact = User::find($userId)->servidor;
            $puesto = User::find($userId)->servidor->puesto;

            $puesto->remuneracion = Remuneracion::where('id','=',$puesto->remuneracion_id)->get()->first();

            $cargo = User::find($userId)->servidor->cargo;
            $unidadAdministrativa = User::find($userId)->servidor->unidadAdministrativa;
            $viajes = Viaje::where('servidor_id', '=', $servidorId)->get();
            $numberOfViajes = Viaje::where('servidor_id', '=', $servidorId)->get()->count();
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
        $servidores = Servidor::all()->take(10);
        return Response::json($servidores);
    }
}