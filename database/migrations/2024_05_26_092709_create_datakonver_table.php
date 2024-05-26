<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDatakonverTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('datakonver', function (Blueprint $table) {
            $table->id();
            $table->string('alternatif');
            $table->string('c1');
            $table->string('c2');
            $table->string('c3');
            $table->string('c4');
            $table->string('c5');
            $table->string('v');
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
        Schema::dropIfExists('datakonver');
    }
}
