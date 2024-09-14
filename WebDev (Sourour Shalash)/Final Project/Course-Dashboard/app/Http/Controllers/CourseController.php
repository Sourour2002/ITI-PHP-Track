<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function index()
    {
        // Fetch all courses from the database
        $allCourses = Course::all();
        return view('courses.index', ['courses' => $allCourses]);
    }

    public function create()
    {
        return view('courses.create');
    }

    public function store(Request $request)
    {
        // Validate and save data to the database
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'date' => 'required|date',
            'price' => 'required|numeric',
            'description' => 'nullable|string',
        ]);

        Course::create($validatedData);

        // After successful creation, redirect to the index
        return redirect()->route('courses.index');
    }

    public function show($id)
    {
        // Find the course by ID from the database
        $course = Course::findOrFail($id);
        return view('courses.show', ['course' => $course]);
    }

    public function edit($id)
    {
        // Find the course by ID for editing
        $course = Course::findOrFail($id);
        return view('courses.edit', ['course' => $course]);
    }

    public function update(Request $request, $id)
    {
        // Validate and update the course data
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'date' => 'required|date',
            'price' => 'required|numeric',
            'description' => 'nullable|string',
        ]);

        $course = Course::findOrFail($id);
        $course->update($validatedData);

        // After successful update, redirect to the show page
        return redirect()->route('courses.show', $id);
    }

    public function destroy($id)
    {
        // Delete the course by ID
        $course = Course::findOrFail($id);
        $course->delete();

        // After deletion, redirect to the index page
        return redirect()->route('courses.index');
    }
}

