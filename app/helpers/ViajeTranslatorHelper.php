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

    public function __construct($viaje){
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
        var_dump($this->newViaje);
        die();
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


}