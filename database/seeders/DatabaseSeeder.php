<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Client;
use App\Models\Product;
use App\Models\Provider;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory()->create([
            'email' => 'i@admin.com',
            'password' => bcrypt('123456')
            
        ]);
        User::factory()->create([
            'email' => 'o@admin.com',
            'password' => bcrypt('123456')
            
        ]);

        Client::factory(10)->create();
        Provider::factory(10)->create();
        Category::factory(5)->create();
        Product::factory(15)->create();
    }
}
