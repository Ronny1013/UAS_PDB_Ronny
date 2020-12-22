<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJorongTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jorong', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->bigInteger('nagari_id')->unsigned()->index();
            $table->foreign('nagari_id')->references('id')->on('nagari');
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
        Schema::dropIfExists('jorong');
    }
}
