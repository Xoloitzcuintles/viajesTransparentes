<?php

class Servidor extends Eloquent {

    protected $table = 'servidores';

	public function puesto()
    {
        return $this->belongsTo('Puesto');
    }

	public function unidadAdministrativa()
    {
        return $this->belongsTo('UnidadAdministrativa');
    }

}