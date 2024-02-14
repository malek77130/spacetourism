<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Technologie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class TechnologieAPIController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $technologies = Technologie::all();
        return response()->json(
            $technologies
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
            $technologie = new Technologie;
            $technologie->title = $data["title"];
            $technologie->detail = $data["detail"];
            $technologie->distance = $data["distance"];
            $technologie->duree = $data["duree"];
            $technologie->image_path = $data["image_path"];

            $technologie->save();
            return response()->json(['Success' => 'Technology created !'], 200);
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
        $technologie = Technologie::where("id",$id)->firstOrFail();
        return response()->json(
            $technologie
        );
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Technologie $technologie)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Technologie $technologie, $id)
    {
        $data = $request->validate([
            'title' => 'required|max:100',
            'detail' => 'required|max:500',
        ]);
        $technologie = Technologie::where("id",$id)->firstOrFail();
        $technologie->title = $request->title;
        $technologie->detail = $request->detail;
        $technologie->distance = $request->distance;
        $technologie->duree = $request->duree;
        if ($request->hasFile('image_path')) {
            // Read the contents of the image file and encode it to base64
            $imageContents = file_get_contents($request->file('image_path')->path());
            $base64Image = base64_encode($imageContents);
    
            $technologie->image_path = $base64Image;
        }
        $technologie->save();    
        return response()->json(['Success' => 'Technology edited !'], 200);

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $technologie = Technologie::where("id",$id)->firstOrFail();
        $technologie->delete();
        return response()->json(['Success' => 'Technology deleted !'], 200);

    }
}
