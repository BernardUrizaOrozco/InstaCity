<?php

namespace Database\Factories;

use App\Models\ProfileUserPivot;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProfileUserPivotFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = ProfileUserPivot::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'profile_id' => mt_rand(1,11),
            'user_id' => mt_rand(1,11),
        ];
    }
}
