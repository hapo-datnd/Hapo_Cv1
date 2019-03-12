<?php

use Illuminate\Database\Seeder;

class CvSkillTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cv_skill')->insert([
            'skill_id' => 1,
            'cv_id' => 2,
            'type' => 2,
            'percent' => 80,
        ]);

        DB::table('cv_skill')->insert([
            'skill_id' => 2,
            'cv_id' => 2,
            'type' => 2,
            'percent' => 60,
        ]);

        DB::table('cv_skill')->insert([
            'skill_id' => 3,
            'cv_id' => 2,
            'type' => 2,
            'percent' => 40,
        ]);

        DB::table('cv_skill')->insert([
            'skill_id' => 4,
            'cv_id' => 2,
            'type' => 2,
            'percent' => 40,
        ]);
    }
}
