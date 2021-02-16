<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class alumnos_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('alumnos')->truncate();

        DB::table('alumnos')->insert([
            'nombre'=> 'alu1',
            'apellidos'=> 'algo',
            'DNI'=> '43568978D',
        ]);

        DB::table('alumnos')->insert([
            'nombre'=> 'alu2',
            'apellidos'=> 'algo',
            'DNI'=> '43568956G',
        ]);

        DB::table('alumnos')->insert([
            'nombre'=> 'alu3',
            'apellidos'=> 'algo',
            'DNI'=> '53568956G',
        ]);
    }
}
