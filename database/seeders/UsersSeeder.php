<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Faker\Factory as Faker;
class UsersSeeder extends Seeder

{
    public function run(): void
    {
        $faker = Faker::create('id_ID');
        $users = [];
        $jurusan = "55201";
        $angkatan = ['21', '22', '23', '24', '25'];

        foreach ($angkatan as $year) {
            for ($i = 1; $i <= 20; $i++) {
                $urutan = str_pad($i, 3, '0', STR_PAD_LEFT);
                
                $npm = $jurusan . $year . $urutan;

                $users[] = [
                    'npm'               => $npm,
                    'username'          => $faker->unique()->userName,
                    'first_name'        => $faker->firstName,
                    'last_name'         => $faker->lastName,
                    'email'             => $faker->unique()->safeEmail,
                    'email_verified_at' => now(), // Sesuai ERD
                    'password'          => Hash::make('password'),
                    'created_at'        => now(),
                    'updated_at'        => now(),
                ];
            }
        }

        foreach (array_chunk($users, 50) as $chunk) {
            DB::table('users')->insert($chunk);
        }
    }
}