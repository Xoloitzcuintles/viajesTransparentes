<?php

class Evento extends Eloquent {

    protected $table = 'evento';

    public function viajes(){
        return $this->belongsToMany('Viaje');
    }

}