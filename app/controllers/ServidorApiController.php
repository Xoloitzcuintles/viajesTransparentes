<?php

class ServidorApiController extends Controller
{
    /**
     * Get all related data to a servidor publico
     */

    public function getServidorProfile()
    {   
        $servidorId = Auth::user()->servidor_id;
        $servidorModel = User::find($servidorId)->servidor;
        echo json_encode($servidorModel);
    }

    public function getServidorViajes()
    {   

    }

    public function getServidorData()
    {   
        $servidorId = Auth::user()->id;
        $profileData = User::find($servidorId)->servidor;
        $puesto = User::find($servidorId)->servidor->puesto;
        $unidadAdministrativa = User::find($servidorId)->servidor->unidadAdministrativa;
        return Response::json(array('sevidor' => array('profileData' => $profileData, 'puesto' => $puesto, 'unidadAdministrativa' => $unidadAdministrativa)));
    }
}