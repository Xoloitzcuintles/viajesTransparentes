<?php

class Evento extends Eloquent {

    protected $table = 'evento';
    protected $fillable = array('id',
                                'name',
                                'url',
                                'viatico_id',
                                'created_at',
                                'updated_at',
                                'ciudad_id',
                                'tipo_viaje',
                                );
    
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