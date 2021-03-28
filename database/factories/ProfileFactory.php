<?php

namespace Database\Factories;

use App\Models\Profile;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ProfileFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Profile::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    protected $counter =1;
    public function definition()
    {
        return [
            'user_id' => $this->counter++,
            'title' => Str::random(7)." ".Str::random(10),
            'description' => Str::random(2)." ".Str::random(10).". ".Str::random(10),
            'image' => 'http://lorempixel.com/400/200/sports/'
        ];
    }
}
