<?php

namespace Database\Factories;

use App\Models\Comment;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class CommentFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Comment::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'caption' => "Sólo para comentar que ".Str::random(4)." ".Str::random(10).Str::random(2)." ".Str::random(7).Str::random(2)." ".Str::random(10),
            'user_id' => mt_rand(1,11),
            'post_id' => mt_rand(1,50),
            'likes' => mt_rand(1, 200),
        ];
    }
}
