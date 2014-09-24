<?php

class Viatico extends Eloquent {

    protected $table = 'viatico';
	
	public function hospedajes(){
        return $this->belongsToMany('Hospedaje');
    }
}