<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAppCarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::connection(env('DB_CONNECTION_APP'))->create('cars', function (Blueprint $table) {
            $table->id();

            $table->text('description')
                ->nullable()
                ->comment('descripcion');

            $table->string('enrollment')
                ->comment('inscripcion');

            $table->foreignId('driver_id')
                ->constrained('drivers');

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
        Schema::connection(env('DB_CONNECTION_APP'))->  dropIfExists('cars');
    }
}
