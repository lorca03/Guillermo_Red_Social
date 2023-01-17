<?php

namespace Database\Factories;

use App\Models\Image;
use App\Models\Like;
use App\Models\User;
use Faker\Factory as Faker;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Like>
 */
class LikeFactory extends Factory
{
    protected $model=Like::class;
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
