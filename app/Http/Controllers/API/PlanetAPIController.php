<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Planet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PlanetAPIController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $planets = Planet::all();
        return response()->json(
            $planets
        );
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
        $data = $request->input();
    
        $rules = [
            'title' => 'required|max:20', 
            'detail' => 'required|max:300',
            'distance' => 'required|max:30',
            'duree' => 'required|max:30'
        ];

        $validator = Validator::make($data, $rules);
        if ($validator->passes()) {
            
            $planet = new Planet;
            $planet->title = $data["title"];
            $planet->detail = $data["detail"];
            $planet->distance = $data["distance"];
            $planet->duree = $data["duree"];
            $planet->image_path = $data["image_path"];

            $planet->save();
            return response()->json(['Success' => 'Planet created !'], 200);
        } else {
            //TODO Handle your error
            return response()->json(['Error' => 'Something wrong happened, be sure to check your request !'], 401);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $planet = Planet::where("id",$id)->firstOrFail();
        return response()->json(
            $planet
        );
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Planet $planet)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Planet $planet, $id)
    {
        $data = $request->validate([
            'title' => 'required|max:100',
            'detail' => 'required|max:500',
        ]);
        $planet = Planet::where("id",$id)->firstOrFail();
        $planet->title = $request->title;
        $planet->detail = $request->detail;
        $planet->distance = $request->distance;
        $planet->duree = $request->duree;
        if ($request->hasFile('image_path')) {
            // Read the contents of the image file and encode it to base64
            $imageContents = file_get_contents($request->file('image_path')->path());
            $base64Image = base64_encode($imageContents);
    
            $planet->image_path = $base64Image;
        }
        $planet->save();    
        return response()->json(['Success' => 'Planet edited !'], 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $planet = Planet::where("id",$id)->firstOrFail();
        $planet->delete();
        return response()->json(['Success' => 'Planet deleted !'], 200);
    }
}
