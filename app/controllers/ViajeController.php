<?php

class ViajeController extends BaseController
{
    public function processCsv(){
        $row = 0;
        $viajeHelper = new viajeTranslatorHelper();
        $campos = $viajeHelper->csvFields();

        $viaje = $viajeHelper->getCleanModel();

        if (($handle = fopen("csv/ifai.csv", "r")) !== FALSE) {
            $data = fgetcsv($handle, 2000, ",");
            while (($data = fgetcsv($handle, 2000, ",")) !== FALSE) {
                $num = count($data);
                echo "<p> $num fields in line $row: <br /></p>\n";
                $row++;
                for ($c=0; $c < $num; $c++) {
                    if(isset($campos[$c]['location']) && $campos[$c]['type'] == 'save'){
                        $viaje->$campos[$c]['location'] = $data[$c];
                    }
                    
                    if($campos[$c]['type'] == 'search'){
                        if($campos[$c]['model'] == 'Servidor'){
                            $servidor = Servidor::where($data[$c], 'like','servidor.apellidoPaterno')->first()->id;
                            var_dump($servidor);die();
                        }
                        echo $campos[$c]['model'];
                        //$viaje-> = $data[$c];
                    }


                    echo $data[$c] . "<br />\n";
                }
               echo "<pre>";
                var_dump(json_encode($viaje));
                die();
            }
            fclose($handle);
        }
     
    }
}
