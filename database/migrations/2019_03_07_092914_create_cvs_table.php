<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCvsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cvs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('date_of_birth');
            $table->string('phone');
            $table->string('skype');
            $table->string('title');
            $table->string('email');
            $table->string('facebook');
            $table->string('address');
            $table->string('image');
            $table->string('chat_work');
            $table->string('position');
            $table->string('summary');
            $table->boolean('status')->default(1);
            $table->string('image_mini');
            $table->string('professional_skill_title');
            $table->string('personal_skill_title');
            $table->string('work_experience_title');
            $table->string('education_title');
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
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
        Schema::dropIfExists('cvs');
    }
}
