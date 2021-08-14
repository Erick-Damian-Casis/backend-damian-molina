<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAppTravelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::connection(env('DB_CONNECTION_APP'))->create('travels', function (Blueprint $table) {
            
            $table->id();
            
            $table->string('cost')
                ->comment('costo del viaje');

            $table->date('date')
                ->comment('fecha del viaje');

            $table->time('time', $precision = 0)
                ->comment('tiempo del viaje');

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
        Schema::connection(env('DB_CONNECTION_APP'))->dropIfExists('travels');
    }
}
