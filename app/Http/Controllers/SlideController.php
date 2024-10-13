<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Slide;
use App\Services\ImageService;

class SlideController extends Controller
{   
    public function adminIndex()
    {
        $slides = Slide::all();
        return view('pages.admin.slide', compact('slides'));
    }
    public function index()
    {
        $slides = Slide::all(); // Retrieve all slides from the database
        return view('welcome', compact('slides')); // Pass the $slides variable to the view
    }

    public function store(Request $request)
    {
        // Validate the form data
        $request->validate([    
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        // Handle image upload
        if ($request->hasFile('image')) {
            try {
                $image = $request->file('image');
                $imageName = time() . '.' . $image->getClientOriginalExtension();
                $image->storeAs('public/images', $imageName);
                $imagePath = 'images/' . $imageName;
            } catch (\Exception $e) {
                Log::error($e->getMessage());
                return back()->with('error', 'Error uploading image');
            }
        } else {
            $imagePath = null;
        }

        // Create a new slide
        $slide = new Slide([
            'image' => $imagePath,
        ]);

        // Save the slide
        if (!$slide->save()) {
            return back()->with('error', 'Error saving slide');
        }

        // Redirect to the welcome page
        return redirect()->back()->with('success', 'Slide added successfully!');
    }
    public function destroy($id)
    {
        // Get the slide
        $slide = Slide::find($id);

        if (!$slide) {
            return back()->with('error', 'Slide not found');
        }

        // Delete the slide
        $slide->delete();

        // Redirect to the welcome page
        return redirect()->back()->with('success', 'Slide deleted successfully!');
    }
}