<?php

use Illuminate\Database\Seeder;

class CvsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0 ; $i< 3 ; $i ++) {
            DB::table('cvs')->insert([
                'user_id' => 6,
            ]);
        }
    }
}
