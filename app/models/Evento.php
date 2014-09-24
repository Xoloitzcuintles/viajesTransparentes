<?php

class Evento extends Eloquent {

    protected $table = 'evento';

    public function viajes(){
        return $this->belongsToMany('Viaje');
    }

    public function pasajes(){
        return $this->belongsToMany('Pasaje');
    }

    public function ciudad(){
        return $this->belongsTo('City');
    }

    public function viatico(){
        return $this->belongsTo('Viatico');
    }

}