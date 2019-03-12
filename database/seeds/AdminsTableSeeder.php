<?php

use Illuminate\Database\Seeder;
use App\Models\Admin;
use Illuminate\Support\Facades\DB;

class AdminsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('admins')->insert([
            'name' => 'Dat_SP_Admin',
            'email' => 'datnd@gmail.com',
            'password' => bcrypt('tuyem123'),
            'type' => Admin::SUPER_ADMIN,
        ]);

        for ($i = 0 ; $i< 10 ; $i ++) {
            DB::table('admins')->insert([
                'name' => 'Dat'.$i,
                'email' => 'dat'. Str::random(3).'@gmail.com',
                'password' => bcrypt('tuyem123'),
                'type' => Admin::ADMIN,
            ]);
        }


    }
}
