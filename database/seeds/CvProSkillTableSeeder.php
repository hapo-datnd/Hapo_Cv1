<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CvProSkillTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cv_skill')->insert([
            'skill_id' => 5,
            'cv_id' => 2,
            'type' => 1,
            'percent' => 80,
        ]);

        DB::table('cv_skill')->insert([
            'skill_id' => 6,
            'cv_id' => 2,
            'type' => 1,
            'percent' => 60,
        ]);

        DB::table('cv_skill')->insert([
            'skill_id' => 7,
            'cv_id' => 2,
            'type' => 1,
            'percent' => 40,
        ]);

        DB::table('cv_skill')->insert([
            'skill_id' => 8,
            'cv_id' => 2,
            'type' => 1,
            'percent' => 40,
        ]);
    }
}
