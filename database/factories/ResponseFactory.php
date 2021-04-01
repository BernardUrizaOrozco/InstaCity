<?php

namespace Database\Factories;

use App\Models\Response;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ResponseFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Response::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'caption' => "Sólo para responder que ".Str::random(4)." ".Str::random(10).Str::random(2)." ".Str::random(7).Str::random(2)." ".Str::random(10),
            'user_id' => mt_rand(1,6),
            'comment_id' => mt_rand(1,13),
            'likes' => mt_rand(1, 200),
        ];
    }
}
