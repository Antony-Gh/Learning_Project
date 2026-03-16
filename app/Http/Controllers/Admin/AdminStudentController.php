<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Stage;
use Illuminate\Http\Request;

class AdminStudentController extends Controller
{
     public function index()
     {
          $students = User::where('is_admin', false)
               ->withCount('attempts')
               ->orderByDesc('total_points')
               ->paginate(20);

          $stages = Stage::orderBy('order')->get();

          return view('admin.students.index', compact('students', 'stages'));
     }
}
