<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Post;
use Faker\Generator as Faker;

$factory->define(Post::class, function (Faker $faker) {
    return [
        'user_id' => Factory(\App\User::class),
        'title' => $faker->sentence(),
        'body' => $faker->paragraph()
    ];
});
