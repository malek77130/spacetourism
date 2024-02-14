<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Crew;
class CrewController extends Controller
{
        /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $crews = Crew::all();
        return view('crews.index', compact('crews'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('crews.create');
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
        $crew = new Crew;
        $crew->role = $request->role;
        $crew->title = $request->title;
        $crew->detail = $request->detail;
        if ($request->hasFile('image_path')) {
            // Read the contents of the image file and encode it to base64
            $imageContents = file_get_contents($request->file('image_path')->path());
            $base64Image = base64_encode($imageContents);
    
            $crew->image_path = $base64Image;
        }
        $crew->save();
        return back()->with('message', "The planet has been created!");
    }

    /**
     * Display the specified resource.
     */
    public function show(Crew $crew)
    {
        return view('crews.show', compact('crew'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Crew $crew)
    {
        return view('crews.edit', compact('crew'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Crew $crew)
    {
        $data = $request->validate([
            'title' => 'required|max:100',
            'detail' => 'required|max:500',
        ]);
        $crew->role = $request->role;
        $crew->title = $request->title;
        $crew->detail = $request->detail;
        if ($request->hasFile('image_path')) {
            // Read the contents of the image file and encode it to base64
            $imageContents = file_get_contents($request->file('image_path')->path());
            $base64Image = base64_encode($imageContents);
    
            $crew->image_path = $base64Image;
        }
        $crew->save();
        return back()->with('message', "The crew has been edited!");     
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Crew $crew)
    {
        $crew->delete();
        return view("/dashboard");
    }
}
