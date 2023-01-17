<?php

namespace Database\Factories;

use App\Models\Comment;
use App\Models\Image;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Factory as Faker;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Comment>
 */
class CommentFactory extends Factory
{
    protected $model=Comment::class;
    public function definition()
    {
        $faker=Faker::create();
        $user_id=User::all('id')->random()->id;
        $image_id=Image::all('id')->random()->id;
        return [
            'user_id'=>$user_id,
            'image_id'=>$image_id,
            'created_at' => $faker->dateTimeBetween('-1 year', 'now'),
            'updated_at' => $faker->dateTimeBetween('-1 year', 'now'),
        ];
    }
}
