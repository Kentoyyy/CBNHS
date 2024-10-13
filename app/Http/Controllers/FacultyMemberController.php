<?php
// app/Http/Controllers/FacultyMemberController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FacultyMember;

class FacultyMemberController extends Controller
{
    public function index()
    {
        $facultyMembers = FacultyMember::all();
        return view('pages.admin.facultymanagement', compact('facultyMembers'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'position' => 'required',
            'description' => 'required',
            'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:5048',
        ]);
    
        $facultyMember = new FacultyMember();
        $facultyMember->name = $request->input('name');
        $facultyMember->position = $request->input('position');
        $facultyMember->description = $request->input('description');
        $facultyMember->image = $request->file('image')->store('images', 'public');
    
        $facultyMember->save();
    
        return redirect()->route('admin.facultymanagement');
    }
    public function update(Request $request, $id)
    {
        $facultyMember = FacultyMember::find($id);
        $facultyMember->name = $request->input('name');
        $facultyMember->position = $request->input('position');
        $facultyMember->description = $request->input('description');

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time().'.'.$image->getClientOriginalExtension();
            $image->move(public_path('images'), $imageName);
            $facultyMember->image = 'images/'.$imageName;
        }

        $facultyMember->save();

        return redirect()->route('admin.facultymanagement');
    }
    public function edit($id)
    {
        $facultyMember = FacultyMember::find($id);
        return view('pages.admin.edit.edit-member', compact('facultyMember'));
    }
    public function show($id)
    {
        $facultyMember = FacultyMember::find($id);
        return view('pages.admin.edit.edit-member', compact('facultyMember'));
    }
    public function destroy($id)
    {
        FacultyMember::find($id)->delete();

        return redirect()->route('admin.facultymanagement');
    }
}