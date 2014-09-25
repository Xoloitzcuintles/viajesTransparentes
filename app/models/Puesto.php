<?php

class Puesto extends Eloquent {

    protected $table = 'puestos';

    public function remuneracion()
    {
        return $this->belongsTo('Remuneracion');
    }


}