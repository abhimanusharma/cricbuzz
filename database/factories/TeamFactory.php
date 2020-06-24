<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Faker\Generator as Faker;

$factory->define(App\Team::class, function (Faker $faker) {
    $imgs = ['aa','ac','ah','av','cw','dc','ht','jj','mr','ms'];
    return [
        'name' => $faker->name('male'),
        'logo_uri' => App::make('url')->to('/storage/images/teams') .'/'. $faker->randomElement($imgs) . '.png',
        'club_state' => $faker->state,
        'total_matches' => $faker->randomNumber(3),
        'coach' => $faker->name('male'),
        'manager' => $faker->name('male'),
        'captain' => $faker->name('male')
    ];
});
