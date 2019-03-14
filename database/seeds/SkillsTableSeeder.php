<?php

use Illuminate\Database\Seeder;
use App\Models\Skill;

class SkillsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('skills')->insert([
            'name' => 'HTML/CSS',
            'is_verified' => 1,
            'type' => Skill::PROFESSIONAL,
        ]);

        DB::table('skills')->insert([
            'name' => 'REACT NATIVE',
            'is_verified' => 1,
            'type' => Skill::PROFESSIONAL,
        ]);

        DB::table('skills')->insert([
            'name' => 'JAVASCRIPT',
            'is_verified' => 1,
            'type' => Skill::PROFESSIONAL,
        ]);

        DB::table('skills')->insert([
            'name' => 'PHP',
            'is_verified' => 1,
            'type' => Skill::PROFESSIONAL,
        ]);

        DB::table('skills')->insert([
            'name' => 'C#.NET',
            'is_verified' => 1,
            'type' => Skill::PROFESSIONAL,
        ]);

        DB::table('skills')->insert([
            'name' => 'LARAVEL',
            'is_verified' => 1,
            'type' => Skill::PROFESSIONAL,
        ]);

        DB::table('skills')->insert([
            'name' => 'TEAM WORK',
            'is_verified' => 1,
            'type' => Skill::PERSONAL,
        ]);

        DB::table('skills')->insert([
            'name' => 'ENGLISH',
            'is_verified' => 1,
            'type' => Skill::PERSONAL,
        ]);

        DB::table('skills')->insert([
            'name' => 'JAPANESE',
            'is_verified' => 1,
            'type' => Skill::PERSONAL,
        ]);

    }
}
