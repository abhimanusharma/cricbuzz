<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Faker\Generator as Faker;

$factory->define(App\Point::class, function (Faker $faker) {
    $player = App\Player::all()->unique()->random();
    return [
        'player_id' => $player->id,
        'game_played' => $player->total_matches,
        'game_wins' => $faker->randomNumber(2),
        'game_loss' => $faker->randomNumber(1),
        'credit' => $faker->randomNumber(2),
        'points' => $faker->randomFloat(2,0,100),

    ];
});
