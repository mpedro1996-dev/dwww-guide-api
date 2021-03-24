<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDigievolutionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('digievolutions', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("digimon_id")->nullable(false);
            $table->unsignedBigInteger("digivolveTo_id")->nullable(false);
            $table->foreign('digimon_id')->references("id")->on("digimons");
            $table->foreign('digivolveTo_id')->references("id")->on("digimons");
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
        Schema::dropIfExists('digievolutions');
    }
}
