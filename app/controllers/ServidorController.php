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
            $companiasTransporte = CompaniaTransporte::all();
    //        var_dump($servidor);die();
            return View::make('servidor/travelinfoadd', array('servidor'=>$servidor,'ciudades'=>$ciudades,
                                                'temas'=>$temas, 'tipoComisiones'=>$tipoComisiones,
                                                'mecanismosOrigen' => $mecanismosOrigen,
                                                'instsGenera' => $instsGenera, 'companiasTransporte'=>$companiasTransporte));
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

    public function addPicture()
    {   
        if (null !== Input::file('picture')) {
            $file = Input::file('picture');
            $destinationPath = public_path().'/images/servidores/';
            $filename = $file->getClientOriginalName();
            $upload_success = Input::file('picture')->move($destinationPath, $filename);

            if( $upload_success ) {
                $servidorId = (isset(Auth::user()->servidor_id)) ? Auth::user()->servidor_id : null; 
                $servidor = Servidor::find($servidorId);
                $servidor->picture_url = '/images/servidores/'.$filename;
                $servidor->save();
                return Redirect::to('/servidor/profile/');
            } 
        } else {
            return Redirect::to('/servidor/profile/');
        }
        
    }
}