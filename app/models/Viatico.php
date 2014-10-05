<?php

class Viatico extends Eloquent {

    protected $table = 'viatico';
    protected $fillable = array('id',
                                'gasto',
                                'comprobado',
                                'sin_comprobar',
                                'devuelto',
                                'descripcion',
                                'created_at',
                                'updated_at',
                                );

	
    public function hospedajes(){
        return $this->belongsToMany('Hospedaje');
    }

}

