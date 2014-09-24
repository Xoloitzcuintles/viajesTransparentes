<?php

class Pasaje extends Eloquent {

    protected $table = 'pasaje';

	public function eventos()
    {
        return $this->belongsToMany('Evento');
    }

	public function compania()
    {
        return $this->belongsTo('CompaniaTransporte');
    }

	public function ciudad_origen()
    {
        return $this->belongsTo('City');
    }

	public function ciudad_destino()
    {
        return $this->belongsTo('City');
    }
}