<?php

class Viaje extends Eloquent {

    protected $table = 'viaje';

    public function eventos(){
        return $this->belongsToMany('Evento');
    }

}