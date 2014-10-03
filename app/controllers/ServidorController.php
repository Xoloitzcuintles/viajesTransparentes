<?php

class ServidorController extends BaseController
{
    protected $layout = 'servidor/layout';

    public function __construct()
    {
        $this->beforeFilter(function()
        {
            if (Auth::check() && Auth::user()->role_id > "2") {
                return Redirect::to(URL::previous());
            }
        });
    }

    public function dashboard()
    {   
        return View::make('servidor/dashboard', array());
    }

    public function trips()
    {   
        return View::make('servidor/trips', array());
    }

    public function profile()
    {   
        return View::make('servidor/profile', array());
    }

    public function altaViaje(){
        if(Auth::check() && Auth::user()->role_id < "2"){
            $servidor = new ServidorApiController();
            $servidor = $servidor->getServidorProfile(false);
            $ciudades = City::all();
            $temas = Tema::all();
            $tipoComisiones = TipoComision::all();
            $mecanismosOrigen = MecanismoOrigen::all();
            $instsGenera = InstGenera::all();
    //        var_dump($servidor);die();
            return View::make('servidor/travelinfoadd', array('servidor'=>$servidor,'ciudades'=>$ciudades,
                                                'temas'=>$temas, 'tipoComisiones'=>$tipoComisiones,
                                                'mecanismosOrigen' => $mecanismosOrigen,
                                                'instsGenera' => $instsGenera));
        } else {
            return Redirect::to('/');
        }
    }

    public function consultaViaje(){
        $viaje_id = Input::get('viaje');
        $viajeApi = new ViajeApiController();
        $viaje = $viajeApi->postJson(false,$viaje_id);
        $servidor = new ServidorApiController();
        $servidor = $servidor->getServidorProfile(false,$viaje[0]["servidor_id"]);
        $ciudades = City::all();
        return View::make('servidor/travelinfoconsult', array('servidor'=>$servidor,'ciudades'=>$ciudades,'viaje'=>$viaje));
    }

}