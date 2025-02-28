<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    public function run(): void
    {
        Category::create([
            'name' => 'Keripik',
            'slug' => 'keripik'
        ]);

        Category::create([
            'name' => 'Kerupuk',
            'slug' => 'kerupuk',
        ]);
    }
}
