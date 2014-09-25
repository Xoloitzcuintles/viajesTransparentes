<?php

class ViajeApiController extends BaseController
{
    protected $layout = 'servidor/layout';

    public function __construct()
    {
        $relatedModelsOrder = array('Viaje','Evento');
    }

    public function getJson()
    {   
        return $this->postJson();
    }

    public function postJson()
    {
        $viaje_id = 1;

        if (Request::isMethod('post'))
        {
            $viajeModel = Viaje::whereHas('servidor', function($q)
                                            {
                                                $q->where('id', '=', '1');

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
            //$viajeFinal->eventos->ciudad = $viaje->eventos->ciudad();
            $viajeFinal->tipoComision = $viaje->tipoComision;
            $viajeFinal->mecanismoOrigen = $viaje->mecanismoOrigen;
            $viajeFinal->instGenera = $viaje->instGenera;
            $viajeArray[] = $viajeFinal;
        }

        return Response::json($viajeArray);
    }
}