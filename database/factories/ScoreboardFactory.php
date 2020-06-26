<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Faker\Generator as Faker;

$factory->define(App\Scoreboard::class, function (Faker $faker) {
    return [
        'team_id' => App\Team::all()->random()->id,
        'match_id' => App\Match::all()->unique()->random()->id,
        'runs' => $faker->randomNumber(3),
        'wickets' => $faker->numberBetween(1,9),
        'overs_played' => $faker->randomFloat(2,9,49),
        'no_ball' => $faker->randomNumber(1),
        'wide_ball' => $faker->randomNumber(1),
        'extra_runs' => $faker->randomNumber(2),
    ];
});
