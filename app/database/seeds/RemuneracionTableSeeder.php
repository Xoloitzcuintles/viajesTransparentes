<?php

class RemuneracionTableSeeder extends Seeder {

    public function run()
    {
        DB::table('remuneracion')->delete();

		Remuneracion::create(array('id'=>1,'grupo_jerarquico'=>'HB1','tipo_viaje'=>'nacional','zona_destino'=>'A','tarifa_diaria_mxn'=>1650.00));
		Remuneracion::create(array('id'=>2,'grupo_jerarquico'=>'KA02','tipo_viaje'=>'nacional','zona_destino'=>'A','tarifa_diaria_mxn'=>1650.00));
		Remuneracion::create(array('id'=>3,'grupo_jerarquico'=>'KA2','tipo_viaje'=>'nacional','zona_destino'=>'A','tarifa_diaria_mxn'=>1650.00));
		Remuneracion::create(array('id'=>4,'grupo_jerarquico'=>'KB1','tipo_viaje'=>'nacional','zona_destino'=>'A','tarifa_diaria_mxn'=>1650.00));
		Remuneracion::create(array('id'=>5,'grupo_jerarquico'=>'KB2','tipo_viaje'=>'nacional','zona_destino'=>'A','tarifa_diaria_mxn'=>1650.00));
		Remuneracion::create(array('id'=>6,'grupo_jerarquico'=>'KB3','tipo_viaje'=>'nacional','zona_destino'=>'A','tarifa_diaria_mxn'=>1650.00));
		Remuneracion::create(array('id'=>7,'grupo_jerarquico'=>'MB2','tipo_viaje'=>'nacional','zona_destino'=>'A','tarifa_diaria_mxn'=>1250.00));
		Remuneracion::create(array('id'=>8,'grupo_jerarquico'=>'MC03','tipo_viaje'=>'nacional','zona_destino'=>'A','tarifa_diaria_mxn'=>1250.00));
		Remuneracion::create(array('id'=>9,'grupo_jerarquico'=>'MC1','tipo_viaje'=>'nacional','zona_destino'=>'A','tarifa_diaria_mxn'=>1250.00));
		Remuneracion::create(array('id'=>10,'grupo_jerarquico'=>'MC2','tipo_viaje'=>'nacional','zona_destino'=>'A','tarifa_diaria_mxn'=>1250.00));
		Remuneracion::create(array('id'=>11,'grupo_jerarquico'=>'MC3','tipo_viaje'=>'nacional','zona_destino'=>'A','tarifa_diaria_mxn'=>1250.00));
		Remuneracion::create(array('id'=>12,'grupo_jerarquico'=>'NA1','tipo_viaje'=>'nacional','zona_destino'=>'A','tarifa_diaria_mxn'=>1250.00));
		Remuneracion::create(array('id'=>13,'grupo_jerarquico'=>'NB3','tipo_viaje'=>'nacional','zona_destino'=>'A','tarifa_diaria_mxn'=>1250.00));
		Remuneracion::create(array('id'=>14,'grupo_jerarquico'=>'NC1','tipo_viaje'=>'nacional','zona_destino'=>'A','tarifa_diaria_mxn'=>1250.00));
		Remuneracion::create(array('id'=>15,'grupo_jerarquico'=>'NC2','tipo_viaje'=>'nacional','zona_destino'=>'A','tarifa_diaria_mxn'=>1250.00));
		Remuneracion::create(array('id'=>16,'grupo_jerarquico'=>'NC3','tipo_viaje'=>'nacional','zona_destino'=>'A','tarifa_diaria_mxn'=>1250.00));
		Remuneracion::create(array('id'=>17,'grupo_jerarquico'=>'OB02','tipo_viaje'=>'nacional','zona_destino'=>'A','tarifa_diaria_mxn'=>1250.00));
		Remuneracion::create(array('id'=>18,'grupo_jerarquico'=>'OB2','tipo_viaje'=>'nacional','zona_destino'=>'A','tarifa_diaria_mxn'=>1250.00));
		Remuneracion::create(array('id'=>19,'grupo_jerarquico'=>'OC002','tipo_viaje'=>'nacional','zona_destino'=>'A','tarifa_diaria_mxn'=>1250.00));
		Remuneracion::create(array('id'=>20,'grupo_jerarquico'=>'OC02','tipo_viaje'=>'nacional','zona_destino'=>'A','tarifa_diaria_mxn'=>1250.00));
		Remuneracion::create(array('id'=>21,'grupo_jerarquico'=>'OC1','tipo_viaje'=>'nacional','zona_destino'=>'A','tarifa_diaria_mxn'=>1250.00));
		Remuneracion::create(array('id'=>22,'grupo_jerarquico'=>'OC2','tipo_viaje'=>'nacional','zona_destino'=>'A','tarifa_diaria_mxn'=>1250.00));
		Remuneracion::create(array('id'=>23,'grupo_jerarquico'=>'OC3','tipo_viaje'=>'nacional','zona_destino'=>'A','tarifa_diaria_mxn'=>1250.00));
		Remuneracion::create(array('id'=>24,'grupo_jerarquico'=>'PA1','tipo_viaje'=>'nacional','zona_destino'=>'A','tarifa_diaria_mxn'=>1250.00));
		Remuneracion::create(array('id'=>25,'grupo_jerarquico'=>'PA3','tipo_viaje'=>'nacional','zona_destino'=>'A','tarifa_diaria_mxn'=>1250.00));
		Remuneracion::create(array('id'=>26,'grupo_jerarquico'=>'PC1','tipo_viaje'=>'nacional','zona_destino'=>'A','tarifa_diaria_mxn'=>1250.00));
		Remuneracion::create(array('id'=>27,'grupo_jerarquico'=>'PC2','tipo_viaje'=>'nacional','zona_destino'=>'A','tarifa_diaria_mxn'=>1250.00));
		Remuneracion::create(array('id'=>28,'grupo_jerarquico'=>'PC3','tipo_viaje'=>'nacional','zona_destino'=>'A','tarifa_diaria_mxn'=>1250.00));
		Remuneracion::create(array('id'=>29,'grupo_jerarquico'=>'HB1','tipo_viaje'=>'nacional','zona_destino'=>'B','tarifa_diaria_mxn'=>3240.00));
		Remuneracion::create(array('id'=>30,'grupo_jerarquico'=>'KA02','tipo_viaje'=>'nacional','zona_destino'=>'B','tarifa_diaria_mxn'=>3240.00));
		Remuneracion::create(array('id'=>31,'grupo_jerarquico'=>'KA2','tipo_viaje'=>'nacional','zona_destino'=>'B','tarifa_diaria_mxn'=>3240.00));
		Remuneracion::create(array('id'=>32,'grupo_jerarquico'=>'KB1','tipo_viaje'=>'nacional','zona_destino'=>'B','tarifa_diaria_mxn'=>3240.00));
		Remuneracion::create(array('id'=>33,'grupo_jerarquico'=>'KB2','tipo_viaje'=>'nacional','zona_destino'=>'B','tarifa_diaria_mxn'=>3240.00));
		Remuneracion::create(array('id'=>34,'grupo_jerarquico'=>'KB3','tipo_viaje'=>'nacional','zona_destino'=>'B','tarifa_diaria_mxn'=>3240.00));
		Remuneracion::create(array('id'=>35,'grupo_jerarquico'=>'MB2','tipo_viaje'=>'nacional','zona_destino'=>'B','tarifa_diaria_mxn'=>1700.00));
		Remuneracion::create(array('id'=>36,'grupo_jerarquico'=>'MC03','tipo_viaje'=>'nacional','zona_destino'=>'B','tarifa_diaria_mxn'=>1700.00));
		Remuneracion::create(array('id'=>37,'grupo_jerarquico'=>'MC1','tipo_viaje'=>'nacional','zona_destino'=>'B','tarifa_diaria_mxn'=>1700.00));
		Remuneracion::create(array('id'=>38,'grupo_jerarquico'=>'MC2','tipo_viaje'=>'nacional','zona_destino'=>'B','tarifa_diaria_mxn'=>1700.00));
		Remuneracion::create(array('id'=>39,'grupo_jerarquico'=>'MC3','tipo_viaje'=>'nacional','zona_destino'=>'B','tarifa_diaria_mxn'=>1700.00));
		Remuneracion::create(array('id'=>40,'grupo_jerarquico'=>'NA1','tipo_viaje'=>'nacional','zona_destino'=>'B','tarifa_diaria_mxn'=>1700.00));
		Remuneracion::create(array('id'=>41,'grupo_jerarquico'=>'NB3','tipo_viaje'=>'nacional','zona_destino'=>'B','tarifa_diaria_mxn'=>1700.00));
		Remuneracion::create(array('id'=>42,'grupo_jerarquico'=>'NC1','tipo_viaje'=>'nacional','zona_destino'=>'B','tarifa_diaria_mxn'=>1700.00));
		Remuneracion::create(array('id'=>43,'grupo_jerarquico'=>'NC2','tipo_viaje'=>'nacional','zona_destino'=>'B','tarifa_diaria_mxn'=>1700.00));
		Remuneracion::create(array('id'=>44,'grupo_jerarquico'=>'NC3','tipo_viaje'=>'nacional','zona_destino'=>'B','tarifa_diaria_mxn'=>1700.00));
		Remuneracion::create(array('id'=>45,'grupo_jerarquico'=>'OB02','tipo_viaje'=>'nacional','zona_destino'=>'B','tarifa_diaria_mxn'=>1700.00));
		Remuneracion::create(array('id'=>46,'grupo_jerarquico'=>'OB2','tipo_viaje'=>'nacional','zona_destino'=>'B','tarifa_diaria_mxn'=>1700.00));
		Remuneracion::create(array('id'=>47,'grupo_jerarquico'=>'OC002','tipo_viaje'=>'nacional','zona_destino'=>'B','tarifa_diaria_mxn'=>1700.00));
		Remuneracion::create(array('id'=>48,'grupo_jerarquico'=>'OC02','tipo_viaje'=>'nacional','zona_destino'=>'B','tarifa_diaria_mxn'=>1700.00));
		Remuneracion::create(array('id'=>49,'grupo_jerarquico'=>'OC1','tipo_viaje'=>'nacional','zona_destino'=>'B','tarifa_diaria_mxn'=>1700.00));
		Remuneracion::create(array('id'=>50,'grupo_jerarquico'=>'OC2','tipo_viaje'=>'nacional','zona_destino'=>'B','tarifa_diaria_mxn'=>1700.00));
		Remuneracion::create(array('id'=>51,'grupo_jerarquico'=>'OC3','tipo_viaje'=>'nacional','zona_destino'=>'B','tarifa_diaria_mxn'=>1700.00));
		Remuneracion::create(array('id'=>52,'grupo_jerarquico'=>'PA1','tipo_viaje'=>'nacional','zona_destino'=>'B','tarifa_diaria_mxn'=>1700.00));
		Remuneracion::create(array('id'=>53,'grupo_jerarquico'=>'PA3','tipo_viaje'=>'nacional','zona_destino'=>'B','tarifa_diaria_mxn'=>1700.00));
		Remuneracion::create(array('id'=>54,'grupo_jerarquico'=>'PC1','tipo_viaje'=>'nacional','zona_destino'=>'B','tarifa_diaria_mxn'=>1700.00));
		Remuneracion::create(array('id'=>55,'grupo_jerarquico'=>'PC2','tipo_viaje'=>'nacional','zona_destino'=>'B','tarifa_diaria_mxn'=>1700.00));
		Remuneracion::create(array('id'=>56,'grupo_jerarquico'=>'PC3','tipo_viaje'=>'nacional','zona_destino'=>'B','tarifa_diaria_mxn'=>1700.00));
		Remuneracion::create(array('id'=>57,'grupo_jerarquico'=>'HB1','tipo_viaje'=>'internacional','zona_destino'=>'NO APLICA','tarifa_diaria_usd'=>450.00));
		Remuneracion::create(array('id'=>58,'grupo_jerarquico'=>'KA02','tipo_viaje'=>'internacional','zona_destino'=>'NO APLICA','tarifa_diaria_usd'=>450.00));
		Remuneracion::create(array('id'=>59,'grupo_jerarquico'=>'KA2','tipo_viaje'=>'internacional','zona_destino'=>'NO APLICA','tarifa_diaria_usd'=>450.00));
		Remuneracion::create(array('id'=>60,'grupo_jerarquico'=>'KB1','tipo_viaje'=>'internacional','zona_destino'=>'NO APLICA','tarifa_diaria_usd'=>450.00));
		Remuneracion::create(array('id'=>61,'grupo_jerarquico'=>'KB2','tipo_viaje'=>'internacional','zona_destino'=>'NO APLICA','tarifa_diaria_usd'=>450.00));
		Remuneracion::create(array('id'=>62,'grupo_jerarquico'=>'KB3','tipo_viaje'=>'internacional','zona_destino'=>'NO APLICA','tarifa_diaria_usd'=>450.00));
		Remuneracion::create(array('id'=>63,'grupo_jerarquico'=>'MB2','tipo_viaje'=>'internacional','zona_destino'=>'NO APLICA','tarifa_diaria_usd'=>450.00));
		Remuneracion::create(array('id'=>64,'grupo_jerarquico'=>'MC03','tipo_viaje'=>'internacional','zona_destino'=>'NO APLICA','tarifa_diaria_usd'=>450.00));
		Remuneracion::create(array('id'=>65,'grupo_jerarquico'=>'MC1','tipo_viaje'=>'internacional','zona_destino'=>'NO APLICA','tarifa_diaria_usd'=>450.00));
		Remuneracion::create(array('id'=>66,'grupo_jerarquico'=>'MC2','tipo_viaje'=>'internacional','zona_destino'=>'NO APLICA','tarifa_diaria_usd'=>450.00));
		Remuneracion::create(array('id'=>67,'grupo_jerarquico'=>'MC3','tipo_viaje'=>'internacional','zona_destino'=>'NO APLICA','tarifa_diaria_usd'=>450.00));
		Remuneracion::create(array('id'=>68,'grupo_jerarquico'=>'NA1','tipo_viaje'=>'internacional','zona_destino'=>'NO APLICA','tarifa_diaria_usd'=>450.00));
		Remuneracion::create(array('id'=>69,'grupo_jerarquico'=>'NB3','tipo_viaje'=>'internacional','zona_destino'=>'NO APLICA','tarifa_diaria_usd'=>450.00));
		Remuneracion::create(array('id'=>70,'grupo_jerarquico'=>'NC1','tipo_viaje'=>'internacional','zona_destino'=>'NO APLICA','tarifa_diaria_usd'=>450.00));
		Remuneracion::create(array('id'=>71,'grupo_jerarquico'=>'NC2','tipo_viaje'=>'internacional','zona_destino'=>'NO APLICA','tarifa_diaria_usd'=>450.00));
		Remuneracion::create(array('id'=>72,'grupo_jerarquico'=>'NC3','tipo_viaje'=>'internacional','zona_destino'=>'NO APLICA','tarifa_diaria_usd'=>450.00));
		Remuneracion::create(array('id'=>73,'grupo_jerarquico'=>'OB02','tipo_viaje'=>'internacional','zona_destino'=>'NO APLICA','tarifa_diaria_usd'=>450.00));
		Remuneracion::create(array('id'=>74,'grupo_jerarquico'=>'OB2','tipo_viaje'=>'internacional','zona_destino'=>'NO APLICA','tarifa_diaria_usd'=>450.00));
		Remuneracion::create(array('id'=>75,'grupo_jerarquico'=>'OC002','tipo_viaje'=>'internacional','zona_destino'=>'NO APLICA','tarifa_diaria_usd'=>450.00));
		Remuneracion::create(array('id'=>76,'grupo_jerarquico'=>'OC02','tipo_viaje'=>'internacional','zona_destino'=>'NO APLICA','tarifa_diaria_usd'=>450.00));
		Remuneracion::create(array('id'=>77,'grupo_jerarquico'=>'OC1','tipo_viaje'=>'internacional','zona_destino'=>'NO APLICA','tarifa_diaria_usd'=>450.00));
		Remuneracion::create(array('id'=>78,'grupo_jerarquico'=>'OC2','tipo_viaje'=>'internacional','zona_destino'=>'NO APLICA','tarifa_diaria_usd'=>450.00));
		Remuneracion::create(array('id'=>79,'grupo_jerarquico'=>'OC3','tipo_viaje'=>'internacional','zona_destino'=>'NO APLICA','tarifa_diaria_usd'=>450.00));
		Remuneracion::create(array('id'=>80,'grupo_jerarquico'=>'PA1','tipo_viaje'=>'internacional','zona_destino'=>'NO APLICA','tarifa_diaria_usd'=>450.00));
		Remuneracion::create(array('id'=>81,'grupo_jerarquico'=>'PA3','tipo_viaje'=>'internacional','zona_destino'=>'NO APLICA','tarifa_diaria_usd'=>450.00));
		Remuneracion::create(array('id'=>82,'grupo_jerarquico'=>'PC1','tipo_viaje'=>'internacional','zona_destino'=>'NO APLICA','tarifa_diaria_usd'=>450.00));
		Remuneracion::create(array('id'=>83,'grupo_jerarquico'=>'PC2','tipo_viaje'=>'internacional','zona_destino'=>'NO APLICA','tarifa_diaria_usd'=>450.00));
		Remuneracion::create(array('id'=>84,'grupo_jerarquico'=>'PC3','tipo_viaje'=>'internacional','zona_destino'=>'NO APLICA','tarifa_diaria_usd'=>450.00));
    }

}


