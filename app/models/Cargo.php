<?php

class Cargo extends Eloquent {

    protected $table = 'cargos';
    
    public function parent()
    {
        return $this->belongsTo('Cargo', 'cargo_id');
    }
}