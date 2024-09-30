<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // Eseguo i seeder nell'ordine corretto
        $this->call([
            UsersTableSeeder::class,
            RestaurantsTableSeeder::class,
            TypesTableSeeder::class,
            RestaurantTypeTableSeeder::class,
            DishesTableSeeder::class,
            OrdersTableSeeder::class,
            DishOrderTableSeeder::class,
        ]);
    }
}
