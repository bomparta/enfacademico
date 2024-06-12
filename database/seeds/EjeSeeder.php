<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EjeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('control_estudio.eje')->insert([
            'nombre' => 'Formación Integral',
        ]);
        DB::table('control_estudio.eje')->insert([
            'nombre' => 'Formación Especializada',
        ]);
        DB::table('control_estudio.eje')->insert([
            'nombre' => 'Formación en Investigación',
        ]);
    }
}
