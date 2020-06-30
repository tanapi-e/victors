<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGamesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('games', function (Blueprint $table) {
            $table->increments('id')->comment('ID');
            $table->string('opponent_team')->comment('相手チーム');
            $table->unsignedTinyInteger('get_point')->comment('得点');
            $table->unsignedTinyInteger('lost_point')->comment('失点');
            $table->date('match_day')->comment('試合日');
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
        Schema::dropIfExists('games');
    }
}
