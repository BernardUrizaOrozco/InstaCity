<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ProfileUserPivot;

class ProfileUserPivotSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ProfileUserPivot::factory()
            ->count(110)
            ->create();
    }
}
