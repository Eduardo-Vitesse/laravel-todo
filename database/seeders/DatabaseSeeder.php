<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use Illuminate\Database\Seeder;
use App\Models\Category;
use App\Models\Task;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run() {
        // $this->call([
        //     UserSeeder::class,
        // ]);

        User::factory(10)->create();
        Category::factory(5)->create();
        Task::factory(50)->create();
    }
}
