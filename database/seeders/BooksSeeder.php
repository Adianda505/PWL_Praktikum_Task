<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class BooksSeeder extends Seeder
{
    public function run(): void
    {
        $faker = Faker::create('id_ID');

        for ($i = 0; $i < 30; $i++) {
            DB::table('books')->insert([
                'title'        => $faker->sentence(3),
                'author'       => $faker->name,
                'year'         => $faker->year,
                'publisher'    => $faker->company,
                'city'         => $faker->city,
                'cover'        => 'default.jpg',
                // Pastikan ID bookshelf 1-5 sudah ada di tabel bookshelfs
                'bookshelf_id' => $faker->numberBetween(1, 5), 
                'created_at'   => now(),
                'updated_at'   => now(),
            ]);
        }
    }
}