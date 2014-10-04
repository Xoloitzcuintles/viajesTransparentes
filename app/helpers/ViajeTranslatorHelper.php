<?php

class viajeTranslatorHelper {
    private $viaje;

    public function setViaje($viaje){
        $this->viaje = $viaje;
    }

    public function __construct($viaje){
        var_dump($viaje);
        die();
    }

    private function modelsOrder(){
        $modelsOrder = array();
    }


}