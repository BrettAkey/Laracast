<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Task;
use Faker\Generator as Faker;

$factory->define(Task::class, function (Faker $faker) {
    return [
        'user_id' => Factory(\App\User::class),
        'title' => $faker->sentence(),
        'description' => $faker->paragraph()
    ];
});
