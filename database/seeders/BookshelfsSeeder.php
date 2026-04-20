<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class BookshelfsSeeder extends Seeder
{
    public function run(): void
    {
        $faker = Faker::create('id_ID');
        $bookshelfs = [];

        for ($i = 1; $i <= 5; $i++) {
            $bookshelfs[] = [
                'name'       => 'Lantai ' . $faker->numberBetween(1, 3) . ' Seksi ' . $faker->randomLetter(),
                'code'       => 'RAK-' . str_pad($i, 2, '0', STR_PAD_LEFT), 
                'created_at' => now(),
                'updated_at' => now(),
            ];
        }

        DB::table('bookshelfs')->insert($bookshelfs);
    }
}