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

          $studentsJson = $students->map(function ($s) {
               return [
                    'id' => $s->id,
                    'name' => $s->name,
                    'total_points' => $s->total_points,
                    'stars' => $s->stars,
               ];
          });

          return view('leaderboard.index', compact('students', 'studentsJson'));
     }

     public function data()
     {
          $students = User::where('is_admin', false)
               ->orderByDesc('total_points')
               ->orderByDesc('stars')
               ->take(50)
               ->get(['id', 'name', 'total_points', 'stars']);

          return response()->json($students);
     }
}
