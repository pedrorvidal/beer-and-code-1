<?php

namespace Database\Seeders;

use App\Models\Plan;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PlanSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Plan::factory(4)->create();
    }
}
