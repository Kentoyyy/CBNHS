<?php

// app/Http/Controllers/FacultyController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FacultyMember;

class FacultyController extends Controller
{
    public function index()
    {
        $facultyMembers = FacultyMember::all();
        return view('pages.faculty', compact('facultyMembers'));
    }
}