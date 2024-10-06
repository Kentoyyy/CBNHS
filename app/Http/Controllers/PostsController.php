<?php

// app/Http/Controllers/Admin/SlidesController.php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\Slide;
use Illuminate\Support\Facades\Storage;

class SlidesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $slides = Slide::all();
        return view('admin.slides.index', compact('slides'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.slides.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'alt_text' => 'required|string|max:255',
        ]);

        $imagePath = $this->uploadImage($request);

        $slide = new Slide([
            'image' => $imagePath,
            'alt_text' => $request->input('alt_text'),
        ]);

        $slide->save();

        return redirect()->route('slides.index')->with('success', 'Slide created successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $slide = Slide::find($id);
        return view('admin.slides.show', compact('slide'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $slide = Slide::find($id);
        return view('admin.slides.edit', compact('slide'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'alt_text' => 'required|string|max:255',
        ]);

        $slide = Slide::find($id);

        if ($request->hasFile('image')) {
            Storage::delete($slide->image);
            $slide->image = $this->uploadImage($request);
        }

        $slide->alt_text = $request->input('alt_text');
        $slide->save();

        return redirect()->route('slides.index')->with('success', 'Slide updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $slide = Slide::find($id);
        Storage::delete($slide->image);
        $slide->delete();

        return redirect()->route('slides.index')->with('success', 'Slide deleted successfully!');
    }

    /**
     * Upload image to storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return string
     */
    private function uploadImage(Request $request)
    {
        if ($request->hasFile('image')) {
            try {
                $image = $request->file('image');
                $imageName = time() . '.' . $image->getClientOriginalExtension();
                $image->storeAs('public/images', $imageName);
                return 'images/' . $imageName;
            } catch (\Exception $e) {
                dd($e->getMessage());
            }
        } else {
            return null;
        }
    }
}