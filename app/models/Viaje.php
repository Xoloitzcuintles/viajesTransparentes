<?php

class Viaje extends Eloquent {

    protected $table = 'viaje';

    public function eventos(){
        return $this->belongsToMany('Evento');
    }

    public function servidor(){
    	return $this->belongsTo('Servidor');	
    }

    public function tema(){
    	return $this->belongsTo('Tema');	
    }

    public function tipo_comision(){
        return $this->belongsTo('TipoComision');    
    }

    public function tipoComision(){
        return $this->belongsTo('TipoComision');    
    }

    public function mecanismo_origen(){
        return $this->belongsTo('MecanismoOrigen'); 
    }

    public function mecanismoOrigen(){
        return $this->belongsTo('MecanismoOrigen'); 
    }

    public function inst_genera(){
        return $this->belongsTo('InstGenera');  
    }

    public function instGenera(){
    	return $this->belongsTo('InstGenera');	
    }

/*    public function eventoCity(){
        return $this->hasManyThrough('City', 'Evento', 'viaje_id', 'evento_id');
    }
*/


}