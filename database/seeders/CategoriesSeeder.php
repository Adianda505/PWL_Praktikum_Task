<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = ['Informatika', 'Sains', 'Novel', 'Sejarah', 'Biografi'];
    foreach ($categories as $cat) {
    DB::table('categories')->insert([
        'category' => $cat,
        'created_at' => now(),
    ]);
}
    }
}
