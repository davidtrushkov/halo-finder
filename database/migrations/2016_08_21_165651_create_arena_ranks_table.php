<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArenaRanksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('arena_ranks', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('rank_id');
            $table->string('rank_name');
            $table->integer('tear_id');
            $table->text('iconImageUrl');
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
        Schema::drop('arena_ranks');
    }
}
