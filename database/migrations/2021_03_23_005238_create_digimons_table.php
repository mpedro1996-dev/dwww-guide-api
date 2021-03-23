<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDigimonsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('digimons', function (Blueprint $table) {
            $table->id();
            $table->string("name")->nullable(false);
            $table->string("image")->nullable(false);
            $table->unsignedBigInteger("level_id");
            $table->foreign('level_id')->references("id")->on("levels");
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
        Schema::dropIfExists('digimons');
    }
}
