<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Team;
class TeamsController extends Controller
{
    public function index()
    {
        return response()->json(Team::all());
    }

    public function show($id)
    {
        $team = Team::find($id);
        $players = \App\Player::where('team_id', $team->id)->get();
        $matches = \App\Match::where('team1_id', $team->id)
                    ->orwhere('team2_id', $team->id)->get();

        return response()->json(["team"=>$team,"players"=>$players,"matches"=>$matches]);
    }
}
