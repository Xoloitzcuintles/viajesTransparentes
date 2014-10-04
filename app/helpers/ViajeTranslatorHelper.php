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
        foreach($models as $model){
            if($model['type'] == 'load'){
                $evalString = '$this->newViaje->'.$model['location'].' = '.$model['model'].'::where("id","=",$this->viaje'.$model['location_id_array'].')->get();';
                eval($evalString);
            } elseif($model['type'] == 'save'){
/*                unset($this->viaje["eventos"][0]["pasajes"][0]["id"]);
                unset($this->viaje["eventos"][0]["pasajes"][0]["cubre_pasaje"]);
                unset($this->viaje["eventos"][0]["pasajes"][0]["tipo_pasaje"]);
*/
            //    echo "<pre>";
          //      var_dump($this->viaje["eventos"][0]["pasajes"][0]);
          //      die();
                $evalString = '$localModel = '.$model['model'].'::create($this->viaje'.$model['location_array'].');';
                eval($evalString);
//                $pasaje->fill($this->viaje["eventos"][0]["pasajes"][0]);
                // $localModel = new $model['model']($this->viaje.$model['location_array']);
                // var_dump($localModel);
                // die();
                var_dump($this->newViaje->eventos);
                $evalString = '$this->newViaje->'.$model['location'].' = $localModel;';
                echo $evalString;die();
                eval($evalString);
                /*
                    TODO: invertir el orden, primero se deben guardar los parents y luego actualizarlos, para que no haya problema con keys de arreglos no asignados
                    
                */
            }
        }
        var_dump($this->newViaje);
        die();
    }

    private function getModelsOrder(){
        $modelsOrder = array('servidor'=>array(
                                    'type' => 'load',
                                    'location' => 'servidor',
                                    'location_id' => 'servidor_id',
                                    'location_id_array' => '["servidor"]["contact"]["id"]',
                                    'model' => 'Servidor'
                                ),
                             'pasaje'=>array(
                                    'type' => 'save',
                                    'location' => 'eventos[0]->pasajes[0]',
                                    'location_id' => 'eventos[0]->pasajes[0]->id',
                                    'location_array' => '["eventos"][0]["pasajes"][0]',
                                    'location_id_array' => '["eventos"][0]["pasajes"][0]["id"]',
                                    'model' => 'Pasaje'
                                ),

        );
        return $modelsOrder;
    }


}