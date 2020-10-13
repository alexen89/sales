<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateModulesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('modules', function (Blueprint $table) {
            $table->bigIncrements('id_module');
            $table->string("name");
            $table->string("icon");
            $table->string("link");
            $table->string("id_submodules");
            $table->tinyInteger("active");
            $table->timestamps();
        });

        Schema::table('modules', function (Blueprint $table) {
            $table->insert([
                "name" => "Administracion",
                "icon" => "",
                'link' => 'admin',
                "id_submodules" => "2,3",
                'active' => 1
            ]);
            $table->insert([
                "name" => "Roles",
                "icon" => "",
                'link' => 'roles',
                "id_submodules" => "",
                'active' => 1
            ]);
            $table->insert([
                "name" => "Usuarios",
                "icon" => "",
                'link' => 'user',
                "id_submodules" => "",
                'active' => 1
            ]);
            $table->insert([
                "name" => "Ventas",
                "icon" => "",
                'link' => 'sales',
                "id_submodules" => "",
                'active' => 1
            ]);
         });
        INSERT INTO modules (name, icon, link,id_submodules,active) VALUES ("Administracion", "", "admin","",1);
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
        Schema::dropIfExists('modules');
    }
}
