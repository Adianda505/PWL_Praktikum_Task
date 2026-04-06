<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class ReturnsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $faker = Faker::create('id_ID');

        
        $returnedDetails = DB::table('loan_detail')->where('is_return', true)->get();

        foreach ($returnedDetails as $detail) {
            $hasCharge = $faker->boolean(30); // 30% kemungkinan kena denda
            
            DB::table('returns')->insert([
                'loan_detail_id' => $detail->id,
                'charge'         => $hasCharge,
                'amount'         => $hasCharge ? $faker->randomElement([5000, 10000, 20000]) : 0,
                'created_at'     => now(),
                'updated_at'     => now(), // Tambahkan ini jika di migration ada timestamps()
            ]);
        }
    }
}