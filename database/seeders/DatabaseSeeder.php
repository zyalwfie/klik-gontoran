<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Owner;
use App\Models\Product;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $this->call([
            CategorySeeder::class
        ]);

        // * dummy data for product
        // Product::factory(10)
        //     ->recycle([
        //         Category::all(),
        //         Owner::factory(),
        //     ])
        //     ->create();

        User::factory(3)->create();
    }
}
