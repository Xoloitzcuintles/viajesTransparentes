<?php

class StateTableSeeder extends Seeder {

    public function run()
    {
        DB::table('state')->delete();

        State::create(array('name'=>'Aguascalientes','key'=>'AGS','country_id'=>1));
        State::create(array('name'=>'Baja California','key'=>'BC','country_id'=>1));
        State::create(array('name'=>'Baja California Sur','key'=>'BCS','country_id'=>1));
        State::create(array('name'=>'California','key'=>'CA','country_id'=>2));
        State::create(array('name'=>'New York','key'=>'NY','country_id'=>2));
        State::create(array('name'=>'Ontario','key'=>'ON','country_id'=>3));
        State::create(array('name'=>'Alberta','key'=>'AL','country_id'=>3));
    }

}