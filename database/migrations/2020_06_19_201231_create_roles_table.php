<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRolesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('roles', function (Blueprint $table) {
            $table->bigIncrements('id_rol');
            $table->string("name");
            $table->string("id_modules");
            $table->tinyInteger("active");
            $table->timestamps();
        });

        Schema::table('roles', function (Blueprint $table) {
            $table->insert([
                "name" => "Admin",
                "telefono" => ""
            ]);
        });

         INSERT INTO roles (name, id_modules, active ) VALUES ("Admin", "1,2,3,4",1);
        INSERT INTO modules (name, icon, link,id_submodules,active) VALUES ('Roles', "", "roles","",1);
        INSERT INTO modules (name, icon, link,id_submodules,active) VALUES ('Usuarios', "", "user","",1);
        INSERT INTO modules (name, icon, link,id_submodules,active) VALUES ('Ventas', "", "sales","",1);

        UPDATE modules SET id_submodules="2,3" WHERE name="Administracion";
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('roles');
    }
}
