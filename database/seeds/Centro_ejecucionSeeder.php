<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Centro_ejecucionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('eventos.centro_ejecucion')->insert([
            'descripcion' => 'Interno',
           
        ]);
        DB::table('eventos.centro_ejecucion')->insert([
            'descripcion' => 'Externo',
           
        ]);
	    DB::table('eventos.centro_ejecucion')->insert([
            'descripcion' => 'Convenio Nacional',
           
        ]);
        DB::table('eventos.centro_ejecucion')->insert([
            'descripcion' => 'Convenio Internacional',
           
        ]);
    }
}
