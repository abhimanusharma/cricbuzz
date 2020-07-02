<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Team;
use App\Player;
use App\Match;
class TeamsController extends Controller
{
    public function index()
    {
        return response()->json(Team::all());
    }

    public function show($id)
    {   $team = Team::with('players', 'team1Matches', 'team2Matches')->find($id);
        return response()->json($team);
    }
}
