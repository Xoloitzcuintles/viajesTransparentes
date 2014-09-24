<?php

class CiudadanoController extends BaseController
{
    protected $layout = 'ciudadano/layout';

    public function __construct()
    {
        $this->beforeFilter(function()
        {
            if (Auth::user()->role_id != "3") {
                return Redirect::to(URL::previous());
            }
        });
    }

    public function dashboard()
    {   
        return View::make('ciudadano/dashboard', array());
    }

    public function account()
    {   
        $user = Auth::user();
        return View::make('ciudadano/account', array('user' => $user));
    }

}