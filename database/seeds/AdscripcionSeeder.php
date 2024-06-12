<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AdscripcionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('eventos.adscripcion')->insert([
            'descripcion' => 'Ninguno',
        ]);
        DB::table('eventos.adscripcion')->insert([
            'descripcion' => 'Despacho de la Fiscal General de la República',
        ]);
	 DB::table('eventos.adscripcion')->insert([
            'descripcion' => 'Vice - Fiscalia',
        ]);
	 DB::table('eventos.adscripcion')->insert([
		    'descripcion' => 'Dirección General de Apoyo Juridico',
		]);
	 DB::table('eventos.adscripcion')->insert([
		    'descripcion' => 'Dirección General Contra la Delincuencia Organizada',
		]);
	 DB::table('eventos.adscripcion')->insert([
		    'descripcion' => 'Dirección General de Actuación Procesal',
		]);
	 DB::table('eventos.adscripcion')->insert([
		    'descripcion' => 'Dirección Contra la Corrupción',
		]);
	 DB::table('eventos.adscripcion')->insert([
		    'descripcion' => 'Dirección Contra las Drogas',
		]);
	 DB::table('eventos.adscripcion')->insert([
		    'descripcion' => 'Dirección Contra Legitimación de Capitales, Delitos Financieros y Económicos',
		]);
	 DB::table('eventos.adscripcion')->insert([
		    'descripcion' => 'Dirección de Protección Integral de la Familia',
		]);
	 DB::table('eventos.adscripcion')->insert([
		    'descripcion' => 'Dirección de Delitos Comunes',
		]);
	 DB::table('eventos.adscripcion')->insert([
		    'descripcion' => 'Dirección de Fiscalias Superiores',
		]);
	 DB::table('eventos.adscripcion')->insert([
		    'descripcion' => 'Dirección de Protección de Derechos Fundamentales',
		]);
	 DB::table('eventos.adscripcion')->insert([
		    'descripcion' => 'Dirección de Revisión y Doctrina',
		]);
	 DB::table('eventos.adscripcion')->insert([
		    'descripcion' => 'Dirección en lo Constitucional y Contencioso Administrativo',
		]); 
         DB::table('eventos.adscripcion')->insert([
		    'descripcion' => 'Dirección de Defensa Integral del Ambiente y Delito Ambiental',
		]);
	 DB::table('eventos.adscripcion')->insert([
		    'descripcion' => 'Dirección de Consultoria Juridica',
		]);
	 DB::table('eventos.adscripcion')->insert([
		    'descripcion' => 'Dirección de Inspección y Disciplina',
		]);
	 DB::table('eventos.adscripcion')->insert([
		    'descripcion' => 'Dirección de Auditoria Interna',
		]);
	 DB::table('eventos.adscripcion')->insert([
		    'descripcion' => 'Dirección de Recursos Humanos',
		]);
         DB::table('eventos.adscripcion')->insert([
		    'descripcion' => 'Dirección de Planificación',
		]);
	 DB::table('eventos.adscripcion')->insert([
		    'descripcion' => 'Dirección de Relaciones Institucionales',
		]);
	 DB::table('eventos.adscripcion')->insert([
		    'descripcion' => 'Dirección de Tecnología',
		]);
	 DB::table('eventos.adscripcion')->insert([
		    'descripcion' => 'Dirección de Tecnología',
		]);
	 DB::table('eventos.adscripcion')->insert([
		    'descripcion' => 'Dirección de Infraestructura y Edificación',
		]);
	DB::table('adscripcion')->insert([
		    'descripcion' => 'Dirección de Presupuesto',
		]);

	DB::table('adscripcion')->insert([
		    'descripcion' => 'Dirección de Secretaria General',
		]);
	DB::table('adscripcion')->insert([
		    'descripcion' => 'Dirección para la Defensa de la Mujer',
		]);
       DB::table('eventos.adscripcion')->insert([
		    'descripcion' => 'Dirección General Administrativa',
		]);
	DB::table('adscripcion')->insert([
		    'descripcion' => 'Dirección de Laboratorios Criminalísticos',
		]);
       DB::table('eventos.adscripcion')->insert([
		    'descripcion' => 'Dirección General de Apoyo a la Investigación Penal',
		]);
	DB::table('adscripcion')->insert([
		    'descripcion' => 'Dirección Técnico Científica y de Investigaciones',
		]);
	DB::table('adscripcion')->insert([
		    'descripcion' => 'Dirección contra la Extorsión y el Secuestro',
		]);
	DB::table('adscripcion')->insert([
		    'descripcion' => 'Dirección de Política Criminal',
		]);
	DB::table('adscripcion')->insert([
		    'descripcion' => 'Dirección de Seguridad Integral',
		]);
	DB::table('adscripcion')->insert([
		    'descripcion' => 'Dirección de Administración y Servicios',
		]);
	DB::table('adscripcion')->insert([
		    'descripcion' => 'Dirección de Gestión Social',
		]);
	DB::table('adscripcion')->insert([
		    'descripcion' => 'Dirección General para la Protección de la Familia y la Mujer',
		]);
	DB::table('adscripcion')->insert([
		    'descripcion' => 'Dirección de Asuntos Internacionales',
		]);
	DB::table('adscripcion')->insert([
		    'descripcion' => 'Fundación Escuela Nacional de Fiscales',
		]);
    }
}
