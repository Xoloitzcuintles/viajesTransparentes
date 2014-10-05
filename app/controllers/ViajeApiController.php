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

    public function postJson($json = true,$viaje_id = null)
    {
        $viaje_id = ($viaje_id == null && null != Request::get('viaje_id')) ? Request::get('viaje_id'):$viaje_id;
        if (Request::isMethod('post') && null !== Request::get('servidor_id') && Request::get('servidor_id') > 0)
        {
            $viajeModel = Viaje::whereHas('servidor', function($q)
                                            {
                                                $q->where('id', '=', Request::get('servidor_id'));

                                            })->get();
        } if(null !== $viaje_id || null != Request::get('viaje_id')) {
            $viajeModel = Viaje::where('id', '=', $viaje_id)->get();
        }else {
            $viajeModel = Viaje::all();
        }

        foreach($viajeModel as $viaje){//
            $viajeFinal = $viaje;
            $servidor = new ServidorApiController();
            $viajeFinal->servidor = $servidor->getServidorProfile(false,$viaje->servidor_id,false)["servidor"];
            //$viajeFinal->servidor->unidad_administrativa = UnidadAdministrativa::where('id','=',$viaje->servidor->unidad_administrativa_id);
            $viajeFinal->tema = $viaje->tema;
            $viajeFinal->eventos = $viaje->eventos;
            foreach($viajeFinal->eventos as $k=>$evento){
                $viajeFinal->eventos[$k]->pasajes = $evento->pasajes;
                foreach ($evento->pasajes as $l=>$pasaje){
                    $pasaje->ciudad_origen = City::where('id', '=', $pasaje->ciudad_origen_id)->first();
                    $pasaje->ciudad_destino = City::where('id', '=', $pasaje->ciudad_destino_id)->first();
                    $viajeFinal->eventos[$k]->pasajes[$l]->ciudad_origen = $pasaje->ciudad_origen;
                    $viajeFinal->eventos[$k]->pasajes[$l]->ciudad_destino = $pasaje->ciudad_destino;
                    $viajeFinal->eventos[$k]->pasajes[$l]->compania = $pasaje->compania;
                }
                $viajeFinal->eventos[$k]->viatico = Viatico::where('id', '=', $evento->viatico_id)->first();
                if($evento->viatico_id>0){
                    $hospedajes = null;
                    $viatico = Viatico::where('id', '=', $evento->viatico_id)->first();
                    if(isset($viatico)){
                        $hospedajes = $viatico->hospedajes;
                    }
                    if($hospedajes != null ){
                        $viajeFinal->eventos[$k]->viatico->hospedajes = $hospedajes;
                    }
//                    var_dump($hospedajes);die();
                }
            }
            //$viajeFinal->eventos->ciudad = $viaje->eventos->ciudad();
            $viajeFinal->tipoComision = $viaje->tipoComision;
            $viajeFinal->mecanismoOrigen = $viaje->mecanismoOrigen;
            $viajeFinal->instGenera = $viaje->instGenera;
            $viajeArray[] = $viajeFinal;
        }

        if($json == true){
            return Response::json($viajeArray);
        } else {
            return $viajeArray;
        }
    }

    public function consulta(){
        $servidores = Servidor::all();
        $instituciones = InstGenera::all();
        $temas = Tema::all();
        $ciudades = City::all();
        $data = array('servidores'=>$servidores,'instituciones'=>$instituciones,'temas'=>$temas,'ciudades'=>$ciudades);
        $view = View::make('viajes/gridViajes',$data)->nest('child', 'viajes.consulta', $data);
        return $view;
    }

    public function saveViaje(){
//        echo "viaje";die();
        $viaje = Request::get('viaje');

        $newViaje = new ViajeTranslatorHelper($viaje);

//        $newViaje = new Viaje($viaje);


        return Response::json($newViaje);
    }
}