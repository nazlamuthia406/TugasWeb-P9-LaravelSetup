<?php

namespace App\Http\Controllers;

use App\Models\Course;

class CourseController extends Controller
{
    /** Tampilkan daftar mata kuliah dari database. */
    public function index()
    {
        $courses = Course::orderBy('name')->get();

        return view('courses.index', compact('courses'));
    }
}
