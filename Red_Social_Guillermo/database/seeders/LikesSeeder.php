<?php

namespace Database\Seeders;

use App\Models\Image;
use App\Models\Like;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LikesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Like::factory()->count(5)->create();
    }
}
