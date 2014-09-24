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
}