<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PlanSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        DB::table('plans')->insert([
            [
                'id' => 3,
                'name' => 'First Plan',
                'short_description' => 'A simple plan',
                'price' => 2990,
                'created_at' => '2022-10-31 13:57:24',
                'updated_at' => '2022-10-31 13:57:24',
                'deleted_at' => null,
            ],
            [
                'id' => 4,
                'name' => 'Last Plan',
                'short_description' => 'A terrible plan',
                'price' => 2990,
                'created_at' => '2022-10-31 14:34:45',
                'updated_at' => '2022-10-31 14:34:45',
                'deleted_at' => null,
            ],
        ]);
    }
}
