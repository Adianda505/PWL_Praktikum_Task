<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;
class LoansSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
    $faker = Faker::create('id_ID');
    for ($i = 0; $i < 10; $i++) {
    $loanDate = $faker->dateTimeBetween('-1 month', 'now');
    DB::table('loans')->insert([
        'user_npm' => DB::table('users')->inRandomOrder()->first()->npm,
        'loan_at' => $loanDate,
        'return_at' => (clone $loanDate)->modify('+7 days'),
        'created_at' => now(),
    ]);
}
    }
}
