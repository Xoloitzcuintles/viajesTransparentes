<?php

class Hospedaje extends Eloquent {

    protected $table = 'hospedaje';
    protected $fillable = array('id',
                                'fecha_inicio',
                                'fecha_fin',
                                'inst_hospedaje',
                                'costo',
                                'hotel',
                                );


    public function viaticos(){
        return $this->belongsToMany('Viatico')->withTimestamps();
    }

}