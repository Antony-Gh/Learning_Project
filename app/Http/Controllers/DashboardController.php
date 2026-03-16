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

          // Analytics metrics
          $totalAttempts = $user->attempts()->count();
          $completedCount = $user->attempts()->where('passed', true)->distinct('stage_id')->count('stage_id');
          $successRate = $totalAttempts > 0
               ? round($user->attempts()->where('passed', true)->count() / $totalAttempts * 100)
               : 0;
          $avgScore = $user->attempts()->whereNotNull('completed_at')->avg('score') ?? 0;
          $totalTimeSpent = $user->attempts()->sum('time_spent_seconds');

          return view('dashboard', compact(
               'user',
               'stages',
               'completedIds',
               'currentStage',
               'notifications',
               'recentAttempts',
               'totalAttempts',
               'completedCount',
               'successRate',
               'avgScore',
               'totalTimeSpent'
          ));
     }
}
