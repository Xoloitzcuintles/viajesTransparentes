<?php

class UsersTableSeeder extends Seeder {

    public function run()
    {
        DB::table('users')->delete();

        User::create(array('email'=>'admin@ifai.gob.mx','name'=>'Administrador','password'=>Hash::make('admin'),'role_id'=>1));
        User::create(array('email'=>'servidor@ifai.gob.mx','name'=>'Servidor','password'=>Hash::make('servidor'),'role_id'=>2));
        User::create(array('email'=>'ciudadano@ifai.gob.mx','name'=>'Ciudadano','password'=>Hash::make('ciudadano'),'role_id'=>3));
    }

}