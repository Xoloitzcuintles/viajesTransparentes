<?php

class CityTableSeeder extends Seeder {

    public function run()
    {
        DB::table('city')->delete();

        City::create(array('name'=>'Aguascalientes','key'=>'AGS','state_id'=>1));
        City::create(array('name'=>'Tijuana','key'=>'TJ','state_id'=>2));
        City::create(array('name'=>'La Paz','key'=>'LPZ','state_id'=>3));
        City::create(array('name'=>'Los Angeles','key'=>'LA','state_id'=>4));
        City::create(array('name'=>'New York City','key'=>'NY','state_id'=>5));
        City::create(array('name'=>'Toronto','key'=>'TO','state_id'=>6));
        City::create(array('name'=>'Edmonton','key'=>'ED','state_id'=>7));
    }

}