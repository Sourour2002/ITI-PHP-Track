<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $totalCourses = Course::count();
        $activeCourses = Course::where('date', '>=', now())->count();
        $upcomingCourses = Course::where('date', '>', now()->addDays(7))->count();
        $expiredCourses = Course::where('date', '<', now())->count();

        // Fetch recent activities (last 5 updates)
        $recentActivities = Course::orderBy('updated_at', 'desc')->take(5)->get();

        return view('home', compact('totalCourses', 'activeCourses', 'upcomingCourses', 'expiredCourses', 'recentActivities'));
    }
}
