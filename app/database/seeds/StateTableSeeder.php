<?php

class StateTableSeeder extends Seeder {

    public function run()
    {
        DB::table('state')->delete();

        User::create(array('name'=>'México','key'=>'MX');
        User::create(array('name'=>'Estados Unidos','key'=>'EUA');
        User::create(array('name'=>'Canadá','key'=>'CA');
    }

}