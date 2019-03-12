<?php

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0 ; $i< 10 ; $i ++) {
            DB::table('users')->insert([
                'name' => 'Dat'.$i,
                'email' => 'dat'. Str::random(3).'@gmail.com',
                'password' => bcrypt('tuyem123'),
                'type' => User::CANDIDATE,
            ]);
        }

    }
}
