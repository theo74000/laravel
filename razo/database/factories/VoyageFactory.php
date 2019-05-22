<?php


use App\Voyage;
use Faker\Generator as Faker;



$factory->define(voyage::class, function (Faker $faker) {
    return [
        //'like' => $faker->like,
        'voyage' => $faker->name,
        'content' => $faker->sentence,
        'active' => $faker->active,
        'author' => $faker->label,
    ];
});