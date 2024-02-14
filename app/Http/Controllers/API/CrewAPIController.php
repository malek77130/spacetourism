<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Crew;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CrewAPIController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $crews = Crew::all();
        return response()->json(
            $crews
        );
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
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
            $crew = new Crew;
            $crew->title = $data["title"];
            $crew->detail = $data["detail"];
            $crew->distance = $data["distance"];
            $crew->duree = $data["duree"];
            $crew->image_path = $data["image_path"];

            $crew->save();
            return response()->json(['Success' => 'Crew created !'], 200);

        } else {
            //TODO Handle your error
            return response()->json(['Error' => 'Something wrong happened, be sure to check your request !'], 401);

        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Crew $crew, $id)
    {
        $crew = Crew::where("id",$id)->firstOrFail();
        return response()->json(
            $crew
        );
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Crew $crew)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Crew $crew, $id)
    {
        $data = $request->validate([
            'title' => 'required|max:100',
            'detail' => 'required|max:500',
        ]);
        $crew = Crew::where("id",$id)->firstOrFail();
        $crew->title = $request->title;
        $crew->detail = $request->detail;
        $crew->distance = $request->distance;
        $crew->duree = $request->duree;
        if ($request->hasFile('image_path')) {
            // Read the contents of the image file and encode it to base64
            $imageContents = file_get_contents($request->file('image_path')->path());
            $base64Image = base64_encode($imageContents);
    
            $crew->image_path = $base64Image;
        }
        $crew->save();    
        return response()->json(['Success' => 'Crew edited !'], 200);

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Crew $crew, $id)
    {
        $crew = Crew::where("id",$id)->firstOrFail();
        $crew->delete();
        return response()->json(['Success' => 'Crew deleted!'], 200);

    }
}
