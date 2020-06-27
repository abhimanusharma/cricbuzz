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
}
