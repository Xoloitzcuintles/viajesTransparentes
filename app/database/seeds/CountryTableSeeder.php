<?php

class CountryTableSeeder extends Seeder {

    public function run()
    {
        DB::table('country')->delete();

        Country::create(array('name'=>'México','key'=>'MX'));
        Country::create(array('name'=>'Estados Unidos','key'=>'EUA'));
        Country::create(array('name'=>'Canadá','key'=>'CA'));
    }

}