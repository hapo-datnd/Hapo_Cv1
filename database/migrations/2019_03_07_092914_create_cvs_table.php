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
            $table->string('first_name')->default('Nguyen Vam');
            $table->string('last_name')->default('A');
            $table->string('date_of_birth')->default('dd/mm/yy');
            $table->string('phone')->default('0988888888');
            $table->string('skype')->default('Nguyen Van A');
            $table->string('title')->default('CV-Hapo');
            $table->string('email')->default('abc@gmail.com');
            $table->string('facebook')->default('Nguyen Van A');
            $table->string('address')->default('Ha Noi - Viet Nam');
            $table->string('image')->default('default.png');
            $table->string('chat_work')->default('Slack');
            $table->string('position')->default('Web Developer');
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->string('summary')->default('Mục tiêu trong công việc');
            $table->boolean('status')->default(1);
            $table->string('image_mini')->default('default.png');
            $table->string('professional_skill_title')->default('Professional Title');
            $table->string('personal_skill_title')->default('Personal Title');
            $table->string('work_experience_title')->default('Work Experience Title');
            $table->string('education_title')->default('Education Title');
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
