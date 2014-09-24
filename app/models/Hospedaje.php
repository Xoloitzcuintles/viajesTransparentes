<?php

class Hospedaje extends Eloquent {

    protected $table = 'hospedaje';

    public function viaticos(){
        return $this->belongsToMany('Viatico');
    }

}