<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');
        for($x = 1; $x <= 20; $x++){
  
            DB::table('users')->insert([
                'email' => $faker->unique()->safeEmail,
                'username' => sprintf('DOS%03d', $x),
                'level' => '3',
                'password' => bcrypt('dosen'),
                'remember_token' => Str::random(10),
                'dosen_id' =>  $x

            ]);
 
        }
        DB::table('users')->insert([
            'name' => 'admin',
            'email' => 'admin@admin',
            'username' => 'admin',
            'password' => bcrypt('admin'),
            'level' => '2'
        ]);
        DB::table('users')->insert([
            'name' => 'SuperAdmin',
            'email' => 'suadmin@admin',
            'username' => 'superadmin',
            'password' => bcrypt('superadmin'),
            'level' => '1'
        ]);
    }
}
