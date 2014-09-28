<?php

class ViajeApiController extends BaseController
{
    protected $layout = 'servidor/layout';

    public function __construct()
    {
        $this->relatedModelsOrder = array('Viaje',
                                    'Evento'
                                    );
    }

    public function getJson()
    {   
        return $this->postJson();
    }

    public function postJson()
    {
        $viaje_id = 1;

        if (Request::isMethod('post') && null !== Request::get('servidor_id') && Request::get('servidor_id') > 0)
        {
            $viajeModel = Viaje::whereHas('servidor', function($q)
                                            {
                                                $q->where('id', '=', Request::get('servidor_id'));

                                            })->get();
        } else {
            $viajeModel = Viaje::all();
        }

        $viajeArray = array();

        foreach($viajeModel as $viaje){//
            $viajeFinal = $viaje;
            $viajeFinal->servidor = $viaje->servidor;
            $viajeFinal->tema = $viaje->tema;
            $viajeFinal->eventos = $viaje->eventos;
            foreach($viajeFinal->eventos as $k=>$evento){
                $viajeFinal->eventos[$k]->pasajes = $evento->pasajes;
                foreach ($evento->pasajes as $l=>$pasaje){
                    $pasaje->ciudad_origen = City::where('city_id', '=', $pasaje->ciudad_origen_id)->first();
//                    var_dump($viajeFinal->eventos[$k]->pasajes[$l]);die();
                    $viajeFinal->eventos[$k]->pasajes[$l]->ciudad_origen = $pasaje->ciudad_origen;
                    
                }
            }
            //$viajeFinal->eventos->ciudad = $viaje->eventos->ciudad();
            $viajeFinal->tipoComision = $viaje->tipoComision;
            $viajeFinal->mecanismoOrigen = $viaje->mecanismoOrigen;
            $viajeFinal->instGenera = $viaje->instGenera;
            $viajeArray[] = $viajeFinal;
        }

        return Response::json($viajeArray);
    }

    public function consulta(){
        $view = View::make('viajes/gridViajes')->nest('child', 'viajes.consulta');
        return $view;
    }
}