<?php

use Illuminate\Database\Seeder;

class ScoreboardsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $scoreboards = factory(App\Scoreboard::class, 10)->create();  
    }
}
