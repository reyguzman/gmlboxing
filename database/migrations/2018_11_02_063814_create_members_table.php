<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMembersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('members', function (Blueprint $table) {
            $table->increments('id');
            $table->string('avatar');
            $table->string('name');
            $table->string('lastName');
            $table->string('tutorName');
            $table->string('lastNameTutor');
            $table->date('dateBirth');
            $table->integer('weight');
            $table->integer('height');
            $table->date('paymentDate');
            $table->string('homePhone');
            $table->string('movilPhone');
            $table->string('bloodType');
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
        Schema::dropIfExists('members');
    }
}
