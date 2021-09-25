<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CrearRolesYAreas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        $roles = [
            ['nombre'=>'Desarrollador'],
            ['nombre'=>'Analista'],
            ['nombre'=>'Tester'],
            ['nombre'=>'Diseñador'],
            ['nombre'=>'Profesional PMO'],
            ['nombre'=>'Profesional de servicios'],
            ['nombre'=>'Auxiliar administrativo'],
            ['nombre'=>'Codirector']
        ];

        /// Insert some stuff
        DB::table('roles')->insert(
            $roles
        );

        $areas = [
            ['nombre'=>'Administrativa y Financiera'],
            ['nombre'=>'Ingeniería'],
            ['nombre'=>'Desarrollo de Negocio'],
            ['nombre'=>'Proyectos'],
            ['nombre'=>'Servicios'],
            ['nombre'=>'Calidad']
        ];

        /// Insert some stuff
        DB::table('areas')->insert(
            $areas
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::disableForeignKeyConstraints();
        DB::table('areas')->truncate();
        DB::table('roles')->truncate();
        Schema::enableForeignKeyConstraints();
    }
}
