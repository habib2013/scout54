<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlayerProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('player_profiles', function (Blueprint $table) {
             $table->bigIncrements('id');
             $table->integer('player_id');
             $table->string('passport')->nullable();
             $table->text('description')->nullable();
             $table->string('gender')->nullable();
             $table->string('weight')->nullable();
             $table->string('phone')->nullable();
             $table->string('height')->nullable();
             $table->string('address')->nullable();
             $table->string('currnt_tournamnt')->nullable();
             $table->string('current_club')->nullable();
             $table->string('squad_number')->nullable();
             $table->string('position')->nullable();
             $table->string('prefered_foot')->nullable();
             $table->string('players_agent')->nullable();

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
        Schema::dropIfExists('player_profiles');
    }
}
