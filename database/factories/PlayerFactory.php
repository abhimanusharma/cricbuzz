<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Faker\Generator as Faker;

$factory->define(App\Player::class, function (Faker $faker) {
    $country = ["India", "England", "Bangladesh", "Australia", "Kenya", "South Africa", "West Indies"];
    $total_runs = $faker->randomNumber(4);
    $highest_scores = $faker->randomNumber(3);
    if($highest_scores > $total_runs){ $highest_scores = $total_runs - 1;}
    $role = ["Batsman","Bowler", "Fielder", "Allrounder", "Batsman, Allrounder", "Wicket keeper", "Captain"];
    return [
        'first_name' => $faker->firstName('male'),
        'last_name' => $faker->lastName('male'),
        'image_uri' => App::make('url')->to('/storage/images/players/player.png'),
        'jersey_number' => $faker->randomNumber(2),
        'country' => $faker->randomElement($country),
        'total_matches' => $faker->randomNumber(3),
        'total_runs' => $total_runs,
        'highest_scores' => $highest_scores,
        'total_fifties' => $faker->numberBetween(1,20),
        'total_hunderd' => $faker->numberBetween(1,10),
        'fours' => $faker->numberBetween(1,5),
        'sixes' => $faker->numberBetween(1,5),
        'role' => $faker->randomElement($role),
        'batting_style' => $faker->randomElement(array("Left Hand Batting", "Right Hand Batting")),
        'bowling_style' => $faker->randomElement(array("Left Hand Fast", "Right Hand Fast", "Leg Spinner", "Off Spinner")),
        'team_id' => App\Team::all()->random()->id,
    ];
});
