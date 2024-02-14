<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Technologie;
use App\Http\Controllers\Input;
class TechnologieController extends Controller
    {
        /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $technologies = Technologie::all();
        return view('technologies.index', compact('technologies'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('technologies.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'required|max:100',
            'detail' => 'required|max:500',
        ]);
        $technology = new Technologie;
        $technology->title = $request->title;
        $technology->detail = $request->detail;
        if ($request->hasFile('image_path')) {
            // Read the contents of the image file and encode it to base64
            $imageContents = file_get_contents($request->file('image_path')->path());
            $base64Image = base64_encode($imageContents);
    
            $technology->image_path = $base64Image;
        }
        $technology->save();
        return back()->with('message', "The technology has been created!");
    }

    /**
     * Display the specified resource.
     */
    public function show(Technologie $technology)
    {
        return view('technologies.show', compact('technology'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Technologie $technology)
    {
        return view('technologies.edit', compact('technology'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Technologie $technology)
    {
        $data = $request->validate([
            'title' => 'required|max:100',
            'detail' => 'required|max:500',
        ]);
        $technology->title = $request->title;
        $technology->detail = $request->detail;
        if ($request->hasFile('image_path')) {
            // Read the contents of the image file and encode it to base64
            $imageContents = file_get_contents($request->file('image_path')->path());
            $base64Image = base64_encode($imageContents);
    
            $technology->image_path = $base64Image;
        }
        $technology->save();
        return back()->with('message', "The technologie has been edited!");     
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Technologie $technology)
    {
        $technology->delete();
        return back();
    }
}
