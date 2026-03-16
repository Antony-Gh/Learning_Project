<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class LeaderboardController extends Controller
{
     public function index()
     {
          $students = User::where('is_admin', false)
               ->orderByDesc('total_points')
               ->orderByDesc('stars')
               ->take(50)
               ->get();

          return view('leaderboard.index', compact('students'));
     }
}
