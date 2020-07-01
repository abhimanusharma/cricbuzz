<?php

namespace App\Http\Controllers;
use App\Match;
use Illuminate\Http\Request;

class MatchesController extends Controller
{
    public function index()
    {
        return response()->json(Match::with('team1')->with('team2')->get());
    }

    public function show()
    {
        
    }
}
