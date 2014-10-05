<?php

class viajeTranslatorHelper {
    private $viaje;
    public $newViaje;

    public function setViaje($viaje){
        $this->viaje = $viaje;
    }

    public function setNewViaje(){
        $this->newViaje = new Viaje();
    }

    public function getNewViaje(){
        return $this->newViaje;
    }

    public function __construct($viaje = null){
        if(isset($viaje) && $viaje != null){
            $this->setViaje($viaje);
            $this->setNewViaje();
            
            $models = $this->getModelsOrder();
            foreach($models as $k=>$model){
                if($model['type'] == 'load'){
                    $evalString = '$this->newViaje->'.$model['location'].' = '.$model['model'].'::where("id","=",$this->viaje'.$model['location_id_array'].')->get();';
                    eval($evalString);
                } elseif($model['type'] == 'save'){
                    $evalString = '$localModel = '.$model['model'].'::create($this->viaje'.$model['location_array'].');';
                    eval($evalString);
                    //$newModel = $localModel->save();

                    $modelLocation = ($model['location'] != "") ? "->".$model['location'] : $model['location'] ;

                    if($model['location_id'] != ''){
                        eval('$this->newViaje->'.$model['location_id'].' = $localModel->id;');
                        eval('$this->newViaje->'.$model['parent'].'->update();');
                    }

                    //$localModel has the model
                    $evalString = '$this->newViaje'.$modelLocation.' = $localModel;';
                    eval($evalString);
                    if(isset($model['attach']) && $model['attach'] == true){
                        $modelParent = ($model['parent'] == '') ? '' : '->'.$model['parent'];
                        $model['parent'];
                        $evalString = '$this->newViaje'.$modelParent.'->'.$model['attachMethod'].'()->attach($localModel->id);';
    //                    var_dump($this->newViaje->eventos()->attach(1));die();
    //                    var_dump($evalString);
                    }
                }
            }
            return $this->newViaje;
        }
    }

    private function getModelsOrder(){
        $modelsOrder = array('viaje'=>array(
                                    'type' => 'save',
                                    'location' => '',//where the object will be saved
                                    'location_id' => '',//where to set the id of the saved object
                                    'location_array' => '',//save :: location where the array will be taken to create the model
                                    'location_id_array' => '["id"]',//create :: location for the id to search the model
                                    'model' => 'Viaje'
                                ),
                            'evento'=>array(
                                    'type' => 'save',
                                    'location' => 'eventos[0]',
                                    'location_id' => '',
                                    'location_array' => '["eventos"][0]',
                                    'location_id_array' => '["eventos"][0]["id"]',
                                    'attach' => true,//needed for saving many to many relationships
                                    'parent' => '',//location of the parent for many to many relationship to execute attach
                                    'attachMethod' => 'eventos',
                                    'model' => 'Evento'
                                ),
                            'servidor'=>array(
                                    'type' => 'load',
                                    'location' => 'servidor',
                                    'location_id' => 'servidor_id',
                                    'location_array' => '',
                                    'location_id_array' => '["servidor_id"]',
                                    'model' => 'Servidor',
                                ),
                            'pasaje'=>array(
                                    'type' => 'save',
                                    'location' => 'eventos[0]->pasajes[0]',
                                    'location_id' => '',
                                    'attach' => true,//needed for saving many to many relationships
                                    'parent' => 'eventos[0]',//location of the parent for many to many relationship to execute attach
                                    'attachMethod' => 'pasajes',
                                    'location_array' => '["eventos"][0]["pasajes"][0]',
                                    'location_id_array' => '["eventos"][0]["pasajes"][0]["id"]',
                                    'model' => 'Pasaje'
                                ),
                            'pasajeRegreso'=>array(
                                    'type' => 'save',
                                    'location' => 'eventos[0]->pasajes[1]',
                                    'location_id' => '',
                                    'attach' => true,//needed for saving many to many relationships
                                    'parent' => 'eventos[0]',//location of the parent for many to many relationship to execute attach
                                    'attachMethod' => 'pasajes',
                                    'location_array' => '["eventos"][0]["pasajes"][1]',
                                    'location_id_array' => '["eventos"][0]["pasajes"][1]["id"]',
                                    'model' => 'Pasaje'
                                ),
                            'viatico'=>array(
                                    'type' => 'save',
                                    'location' => 'eventos[0]->viatico',
                                    'location_id' => 'eventos[0]->viatico_id',
                                    'parent' => 'eventos[0]',//parent that should be updated when this object is saved
                                    'location_array' => '["eventos"][0]["viatico"]',
                                    'location_id_array' => '["eventos"][0]["viatico"]["id"]',
                                    'model' => 'Viatico'
                                ),
                            'hospedaje'=>array(
                                    'type' => 'save',
                                    'location' => 'eventos[0]->viatico->hospedajes[0]',
                                    'location_id' => '',
                                    'attach' => true,//needed for saving many to many relationships
                                    'attachMethod' => 'hospedajes',
                                    'parent' => 'eventos[0]->viatico',//parent that should be updated when this object is saved
                                    'location_array' => '["eventos"][0]["viatico"]["hospedajes"][0]',
                                    'location_id_array' => '["eventos"][0]["viatico"]["hospedajes"][0]["id"]',
                                    'model' => 'Hospedaje'
                                ),

        );
        return $modelsOrder;
    }

    public function csvFields(){
        $fields = array(
        array('type'=>'load','title'=>'Mecanismo que origina la comisión',),
        array('type'=>'load','title'=>'Quien invita o que UR solicita',),
        array('type'=>'load','title'=>'Unidad Responsable que genera la nota de viaje area sustantiva',),
        array('type'=>'load','title'=>'Tipo de representacion requerida',),
        array('type'=>'load','title'=>'Numero de comision',),
        array('type'=>'search','model'=>'Servidor','title'=>'Servidor publico comisionado',),
        array('type'=>'load','title'=>'Cargo',),
        array('type'=>'load','title'=>'Grupo jerarquico',),
        array('type'=>'load','title'=>'Tipo de viaje',),
        array('type'=>'save','location'=>'acuerdo','title'=>'No de acuerdo de autorización del pleno',),
        array('type'=>'load','title'=>'No de oficio de comisión',),
        array('type'=>'load','title'=>'Pais de origen',),
        array('type'=>'load','title'=>'Estado de origen',),
        array('type'=>'load','title'=>'Ciudad de origen',),
        array('type'=>'load','title'=>'Pais de destino',),
        array('type'=>'load','title'=>'Estado o equivalente de destino',),
        array('type'=>'load','title'=>'Ciudad de destino',),
        array('type'=>'load','title'=>'Tarifa diaria de viaticos por dia',),
        array('type'=>'load','title'=>'Moneda',),
        array('type'=>'load','title'=>'Tema',),
        array('type'=>'load','title'=>'Tipo de comisión',),
        array('type'=>'load','title'=>'Nombre del evento o actividad principal a la que se asiste',),
        array('type'=>'load','title'=>'URL del evento',),
        array('type'=>'load','title'=>'Fecha de inicio de participacion en el evento o actividad',),
        array('type'=>'load','title'=>'Fecha de fin de participacion en el evento o actividad',),
        array('type'=>'load','title'=>'Motivo de la comision',),
        array('type'=>'load','title'=>'Antecedentes',),
        array('type'=>'load','title'=>'Actividades realizadas',),
        array('type'=>'load','title'=>'Resultados obtenidos',),
        array('type'=>'load','title'=>'Contribuciones para el IFAI',),
        array('type'=>'load','title'=>'Link al comunicado',),
        array('type'=>'load','title'=>'Institucion que cubre pasaje',),
        array('type'=>'load','title'=>'Tipo de pasaje',),
        array('type'=>'load','title'=>'Aerolinea de vuelo de ida',),
        array('type'=>'load','title'=>'Numero de vuelo de ida',),
        array('type'=>'load','title'=>'Aerolineas de vuelo de regreso',),
        array('type'=>'load','title'=>'Numero de vuelo de regreso',),
        array('type'=>'load','title'=>'Fecha de inicio de la comision',),
        array('type'=>'load','title'=>'Fecha de termino de la comision',),
        array('type'=>'load','title'=>'Gasto por concepto de pasajes en MN',),
        array('type'=>'load','title'=>'Gasto por concepto de viaticos en MN',),
        array('type'=>'load','title'=>'Institucion que cubre hospedaje',),
        array('type'=>'load','title'=>'Nombre del hotel',),
        array('type'=>'load','title'=>'Fecha de entrada',),
        array('type'=>'load','title'=>'Fecha de salida',),
        array('type'=>'load','title'=>'Costo total del hospedaje',),
        array('type'=>'load','title'=>'Monto comprobado de viaticos',),
        array('type'=>'load','title'=>'Monto sin comprobacion',),
        array('type'=>'load','title'=>'Monto de viaticos devueltos',),
        array('type'=>'load','title'=>'Observaciones'),
        );
        return $fields;
    }

    public function getCleanModel(){
        $viaje = new Viaje();

        return $viaje;
    }

}