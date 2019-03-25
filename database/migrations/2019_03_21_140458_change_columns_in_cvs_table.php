<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ChangeColumnsInCvsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('cvs', function (Blueprint $table) {
            $table->mediumText('summary')->change();
            $table->mediumText('professional_skill_title')->change();
            $table->mediumText('personal_skill_title')->change();
            $table->mediumText('work_experience_title')->change();
            $table->mediumText('education_title')->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('cvs', function (Blueprint $table) {
            $table->string('summary')->change();
            $table->string('professional_skill_title')->change();
            $table->string('personal_skill_title')->change();
            $table->string('work_experience_title')->change();
            $table->string('education_title')->change();
        });
    }
}
