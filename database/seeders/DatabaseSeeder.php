<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Customer;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\User::factory(10)->create();

        \App\Models\CustomerGroup::factory(10)->create();
        \App\Models\TaskPriority::factory(3)->create();
        \App\Models\TaskStatus::factory(3)->create();

        \App\Models\Customer::factory(1000)->create();

        //todo random id customer
        \App\Models\Project::factory(250)->create([
            'customer_id' => rand(1, Customer::count()),
        ]);

        //todo tasks seeder
    


    }
}
