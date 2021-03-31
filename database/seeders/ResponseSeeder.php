<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Response;

class ResponseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Response::factory()
            ->count(350)
            ->create();
    }
}
