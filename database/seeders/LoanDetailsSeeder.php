<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker; // Ini sudah benar di atas

class LoanDetailsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
        $faker = Faker::create('id_ID'); 
        
        $loans = DB::table('loans')->get();

        foreach ($loans as $loan) {
           
            $bookCount = rand(1, 2);
            for ($j = 0; $j < $bookCount; $j++) {
                DB::table('loan_detail')->insert([
                    'loan_id' => $loan->id,
                    'book_id' => DB::table('books')->inRandomOrder()->first()->id,
                    'is_return' => $faker->boolean(50), 
                    'created_at' => now(),
                    'updated_at' => now(), 
                ]);
            }
        }
    }
}