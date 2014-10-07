<?php

class Pasaje extends Eloquent {

    protected $table = 'pasaje';
    protected $fillable = array('id','cubre_pasaje','tipo_pasaje','numero_viaje','fecha','gasto','tipo','compania_id','ciudad_origen_id','ciudad_destino_id');

	public function eventos()
    {
        return $this->belongsToMany('Evento')->withTimestamps();
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