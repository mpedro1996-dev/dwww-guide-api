<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRequirementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('requirements', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("digievolution_id");
            $table->integer('attack_attribute')->nullable(true);
            $table->integer('defense_attribute')->nullable(true);
            $table->integer('spirit_attribute')->nullable(true);
            $table->integer('wisdom_attribute')->nullable(true);
            $table->integer('charisma_attribute')->nullable(true);
            $table->integer('fire_attribute')->nullable(true);
            $table->integer('water_attribute')->nullable(true);
            $table->integer('ice_attribute')->nullable(true);
            $table->integer('wind_attribute')->nullable(true);
            $table->integer('eletric_attribute')->nullable(true);
            $table->integer('metal_attribute')->nullable(true);
            $table->integer('dark_attribute')->nullable(true);            
            $table->foreign('digievolution_id')->references('id')->on('digievolutions');             
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('requirements');
    }
}
