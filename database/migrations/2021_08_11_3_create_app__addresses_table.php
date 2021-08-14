<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAppAddressesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::connection(env('DB_CONNECTION_APP'))->create('addresses', function (Blueprint $table) {
            
            $table->id();

            $table->string('startAddress')
                ->comment('inicio de la direccion');

            $table->string('endAddress')
                ->comment('fin de la direccion');

            $table->foreignId('travel_id')
                ->constrained('travels');

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
        Schema::connection(env('DB_CONNECTION_APP'))->dropIfExists('addresses');
    }
}
