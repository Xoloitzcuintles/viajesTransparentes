<?php

class ServidoresTableSeeder extends Seeder {

    public function run()
    {
        DB::table('servidores')->delete();

        Servidor::create(array('nombre'=>'Liliana','apellidoPaterno'=>'Herrera','apellidoMaterno'=>'Martínez','correoElectronico'=>'liliana.herrera@ifai.org.mx',
            'puesto_id'=>Puesto::where('nombre', '=', 'SECRETARIO PARTICULAR DE PONENCIA')->first()->id,
            'picture_url'=>'/images/servidores/liliana.jpg',
            'unidad_administrativa_id'=>UnidadAdministrativa::where('nombre','=', 'Comisionado')->first()->id,
            'cargo_id'=>Cargo::where('nombre', '=', 'SECRETARIA PARTICULAR')->first()->id));
        Servidor::create(array('nombre'=>'Adrián Israel','apellidoPaterno'=>'Manilla','apellidoMaterno'=>'Aguirre','correoElectronico'=>'adrian.manilla@ifai.org.mx',
            'puesto_id'=>Puesto::where('nombre', '=', 'JEFE DE DEPARTAMENTO')->first()->id,
            'picture_url'=>'',
            'unidad_administrativa_id'=>UnidadAdministrativa::where('nombre','=', 'DIRECCIÓN GENERAL DE AUTORREGULACIÓN')->first()->id,
            'cargo_id'=>Cargo::where('nombre', '=', 'DEPARTAMENTO DE CERTIFICACION')->first()->id));
        Servidor::create(array('nombre'=>'Juan Armando','apellidoPaterno'=>'Becerra','apellidoMaterno'=>'Gutiérrez','correoElectronico'=>'armando.becerra@ifai.org.mx',
            'puesto_id'=>Puesto::where('nombre', '=', 'SUBDIRECTOR DE AREA')->first()->id,
            'picture_url'=>'',
            'unidad_administrativa_id'=>UnidadAdministrativa::where('nombre','=', 'DIRECCIÓN GENERAL DE AUTORREGULACIÓN')->first()->id,
            'cargo_id'=>Cargo::where('nombre', '=', 'SUBDIRECCION DE CERTIFICACION')->first()->id));
        Servidor::create(array('nombre'=>'Melissa','apellidoPaterno'=>'Higuera','apellidoMaterno'=>'Pérez','correoElectronico'=>'melissa.higuera@ifai.org.mx',
            'puesto_id'=>Puesto::where('nombre', '=', 'DIRECTOR DE AREA')->first()->id,'picture_url'=>'',
            'unidad_administrativa_id'=>UnidadAdministrativa::where('nombre','=', 'DIRECCIÓN GENERAL DE AUTORREGULACIÓN')->first()->id,
            'cargo_id'=>Cargo::where('nombre', '=', 'DIRECCION DE ESQUEMAS DE AUTORREGULACION')->first()->id));
        Servidor::create(array('nombre'=>'Agustín','apellidoPaterno'=>'Granados','apellidoMaterno'=>'Tzintzun','correoElectronico'=>'agustin.granados@ifai.org.mx',
            'puesto_id'=>Puesto::where('nombre', '=', 'JEFE DE DEPARTAMENTO')->first()->id,'picture_url'=>'',
            'unidad_administrativa_id'=>UnidadAdministrativa::where('nombre','=', 'DIRECCIÓN GENERAL DE AUTORREGULACIÓN')->first()->id,
            'cargo_id'=>Cargo::where('nombre', '=', 'DEPARTAMENTO DE CONVENIOS Y RECOMENDACIONES')->first()->id));
        Servidor::create(array('nombre'=>'María Teresa','apellidoPaterno'=>'Lagunes','apellidoMaterno'=>'Mendoza','correoElectronico'=>'teresa.lagunes@ifai.org.mx',
            'puesto_id'=>Puesto::where('nombre', '=', 'SUBDIRECTOR DE AREA')->first()->id,'picture_url'=>'',
            'unidad_administrativa_id'=>UnidadAdministrativa::where('nombre','=', 'DIRECCIÓN GENERAL DE AUTORREGULACIÓN')->first()->id,
            'cargo_id'=>Cargo::where('nombre', '=', 'SUBDIRECCION DE CONVENIOS Y RECOMENDACIONES')->first()->id));
        Servidor::create(array('nombre'=>'Omar','apellidoPaterno'=>'Martínez','apellidoMaterno'=>'Cosain','correoElectronico'=>'omar.martinez@ifai.org.mx',
            'puesto_id'=>Puesto::where('nombre', '=', 'JEFE DE DEPARTAMENTO')->first()->id,'picture_url'=>'',
            'unidad_administrativa_id'=>UnidadAdministrativa::where('nombre','=', 'DIRECCIÓN GENERAL DE AUTORREGULACIÓN')->first()->id,
            'cargo_id'=>Cargo::where('nombre', '=', 'DEPARTAMENTO DE POLITICAS DE PRIVACIDAD')->first()->id));
        Servidor::create(array('nombre'=>'Noemi Karina','apellidoPaterno'=>'González','apellidoMaterno'=>'Vergara','correoElectronico'=>'noemi.gonzalez@ifai.org.mx',
            'puesto_id'=>Puesto::where('nombre', '=', 'SUBDIRECTOR DE AREA')->first()->id,'picture_url'=>'',
            'unidad_administrativa_id'=>UnidadAdministrativa::where('nombre','=', 'DIRECCIÓN GENERAL DE AUTORREGULACIÓN')->first()->id,
            'cargo_id'=>Cargo::where('nombre', '=', 'SUBDIRECCION DE POLITICAS DE PRIVACIDAD')->first()->id));
        Servidor::create(array('nombre'=>'Miriam','apellidoPaterno'=>'Caballero','apellidoMaterno'=>'Vargas','correoElectronico'=>'miriam.caballero@ifai.org.mx',
            'puesto_id'=>Puesto::where('nombre', '=', 'DIRECTOR DE AREA')->first()->id,'picture_url'=>'',
            'unidad_administrativa_id'=>UnidadAdministrativa::where('nombre','=', 'DIRECCIÓN GENERAL DE AUTORREGULACIÓN')->first()->id,
            'cargo_id'=>Cargo::where('nombre', '=', 'DIRECCION DE FACILITACION')->first()->id));
    }

}