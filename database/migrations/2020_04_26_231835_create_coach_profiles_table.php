<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCoachProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('coach_profiles', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('coach_id');
            $table->string('passport')->nullable();
            $table->text('description')->nullable();
            $table->string('gender')->nullable();
            $table->string('address')->nullable();
            $table->string('currnt_tournamnt')->nullable();
            $table->string('current_club')->nullable();
            $table->string('squad_number')->nullable();
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
        Schema::dropIfExists('coach_profiles');
    }
}
