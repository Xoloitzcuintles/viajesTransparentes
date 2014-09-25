<?php

class ServidorApiController extends Controller
{
    /**
     * Get all related data to a servidor publico
     */

    public function getServidorProfile()
    {   
        $servidorId = Auth::user()->servidor_id;
        $userId  = Auth::user()->id;
        if (isset($servidorId) && $servidorId > 0) {
            $contact = User::find($userId)->servidor;
            $puesto = User::find($userId)->servidor->puesto;
            $unidadAdministrativa = User::find($userId)->servidor->unidadAdministrativa;
            $viajes = Viaje::where('servidor_id', '=', $servidorId)->get();
            $numberOfViajes = Viaje::where('servidor_id', '=', $servidorId)->get()->count();
            $viajeArray = array();
            foreach($viajes as $viaje){
                if($viaje->servidor_id == $servidorId) {
                    $viajeFinal = $viaje;
                    $viajeFinal->tema = $viaje->tema;
                    $viajeFinal->eventos = $viaje->eventos;
                    $viajeFinal->tipoComision = $viaje->tipoComision;
                    $viajeFinal->mecanismoOrigen = $viaje->mecanismoOrigen;
                    $viajeFinal->instGenera = $viaje->instGenera;
                    $viajeArray[] = $viajeFinal;
                }
            }
            $response = array(
                                'status'    => 'success',
                                'servidor'   => array(
                                                        'contact'       => $contact, 
                                                        'puesto'        => $puesto, 
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
        return Response::json($response);
    }

    public function getServidorViajes()
    {   

    }
}