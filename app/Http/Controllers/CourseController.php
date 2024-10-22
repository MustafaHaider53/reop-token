<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course; // Ensure to import the Course model

class CourseController extends Controller
{
    public function index()
    {
        $courses = Course::all(); // Retrieve all courses
        return view('courses.index', compact('courses')); // Pass courses to the view
    }

    public function create()
    {
        return view('courses.create'); // Show form to add a new course
    }

    public function store(Request $request)
    {
        dd($request->all()); // Debug incoming form data

        // Optional: Validate and store the course
        // $course = Course::create($request->all());

        // return redirect()->route('courses.index'); // Redirect after storing
    }
}
