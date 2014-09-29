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
                    $pasaje->ciudad_origen = City::where('id', '=', $pasaje->ciudad_origen_id)->first();
                    $pasaje->ciudad_destino = City::where('id', '=', $pasaje->ciudad_destino_id)->first();
                    $viajeFinal->eventos[$k]->pasajes[$l]->ciudad_origen = $pasaje->ciudad_origen;
                    $viajeFinal->eventos[$k]->pasajes[$l]->ciudad_destino = $pasaje->ciudad_destino;
                }
                $viajeFinal->eventos[$k]->viatico = Viatico::where('id', '=', $evento->viatico_id)->first();
                
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
        $servidores = Servidor::all();
        $instituciones = InstGenera::all();
        $data = array('servidores'=>$servidores,'instituciones'=>$instituciones);
        $view = View::make('viajes/gridViajes',$data)->nest('child', 'viajes.consulta', $data);
        return $view;
    }
}