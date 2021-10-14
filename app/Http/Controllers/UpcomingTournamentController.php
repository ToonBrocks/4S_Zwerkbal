<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tournament;

class UpcomingTournamentController extends Controller
{
    public function index()
    {
        $tournaments = Tournament::where('date', '>', date("Y-m-d"))->orderBy('date')->get();
        return view('tournaments/index')
        ->with('tournaments', $tournaments);
    }
}