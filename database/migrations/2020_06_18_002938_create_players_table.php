<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlayersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('players', function (Blueprint $table) {
            $table->id()->comment('ID');
            $table->string('name')->comment('名前');
            $table->string('position')->comment('ポジション')->nullable();
            $table->string('management_position')->nullable()->comment('役職名');
            $table->unsignedTinyInteger('uniform_number')->nullable()->comment('背番号');
            $table->unsignedTinyInteger('age')->comment('年齢');
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
        Schema::dropIfExists('players');
    }
}
