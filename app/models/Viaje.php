<?php

class Viaje extends Eloquent {

    protected $table = 'viaje';
    protected $fillable = array('id',
                                'ur',
                                'tipo_rep',
                                'consecutivo',
                                'servidor_id',
                                'tipo_viaje',
                                'acuerdo',
                                'oficio',
                                'tarifa_diaria',
                                'moneda',
                                'tema_id',
                                'tipo_comision_id',
                                'mecanismo_origen_id',
                                'inst_genera_id',
                                'fecha_inicio_part',
                                'fecha_fin_part',
                                'motivo',
                                'antecedente',
                                'actividad',
                                'resultado',
                                'contribucion_ifai',
                                'observaciones',
                                'url_comunicado',
                                );


    public function eventos(){
        return $this->belongsToMany('Evento')->withTimestamps();
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