<?php

namespace Database\Factories;

use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class PostFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Post::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'caption' => Str::random(10),
            'user_id' => mt_rand(1,10),
            'likes' => mt_rand(1, 999999),
            'image' => 'http://lorempixel.com/400/200/sports/'
        ];
    }
}
