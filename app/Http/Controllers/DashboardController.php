<?php

namespace App\Http\Controllers;

use App\Models\Stage;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
     public function index(Request $request)
     {
          $user = $request->user();
          $stages = Stage::orderBy('order')->get();
          $completedIds = $user->completedStageIds();
          $currentStage = $user->currentStage();
          $notifications = $user->unreadNotifications()->latest()->take(10)->get();
          $recentAttempts = $user->attempts()->with('stage')->latest()->take(5)->get();

          return view('dashboard', compact(
               'user',
               'stages',
               'completedIds',
               'currentStage',
               'notifications',
               'recentAttempts'
          ));
     }
}
