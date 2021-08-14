<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAppDriversTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::connection(env('DB_CONNECTION_APP'))->create('drivers', function (Blueprint $table) {
            $table->id();

            $table->boolean('availabled')
                ->default(true)
                ->comment('disponibilidad');

            $table->string('city')
                ->comment('ciudad donde se encuentra');

            $table->date('date')
                ->comment('fecha');

            $table->string('driverLicense')
                ->comment('licencia del conductor');

            $table->string('gmail')
                ->comment('correo');

            $table->string('lastName')
                ->comment('apellido ');

            $table->string('names')
                ->comment('nombres');

            $table->char('password', 100)
                ->comment('contraseña');

            $table->string('phone')
                ->comment('numero de telefono');

            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::connection(env('DB_CONNECTION_APP'))->dropIfExists('drivers');
    }
}
