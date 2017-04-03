<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMusicalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('musicals', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->string('director');
            $table->string('music');
            $table->string('lyrics');
            $table->string('book');
            $table->string('openDate');
            $table->double('lowestTicketPrice');
            $table->double('highestTicketPrice');
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
        Schema::dropIfExists('musicals');
    }
}
