<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Faker\Generator as Faker;

$factory->define(App\Match::class, function (Faker $faker) {
    $team1id = App\Team::all()->random()->id;
    $team2id = App\Team::all()->random()->id;
    if($team1id == $team2id){ $team2id = App\Team::all()->random()->id; }
    return [
        'name' => $faker->word(6),
        'total_overs' => $faker->randomElement(array(20,50,100)),
        'team1_id' => $team1id,
        'team2_id' => $team2id,
        'toss_won_team_id' => $faker->randomElement(array($team1id, $team2id)),
        'venue' => $faker->word(4),
        'status' => $faker->word(2),
    ];
});
