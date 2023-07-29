<?php

namespace App\Http\Controllers;

use App\Models\Team;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $team=Team::all();
        return response ()->json(['success'=>true,'data'=>$team,'message'=>'successfully show']);
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
        $fileName = time() . '_' . $request->file->getClientOriginalName();
        $request->file->move(public_path('uploads/'), $fileName);
        $data = Team::create([
            'name' => $request->input('name'),
            'title' => $request->input('title'),
            'designation' => $request->input('designation'),
            'details' => $request->input('details'),
            'photo' =>$fileName,
        ]);

        return response()->json([
            'success' =>true,
            'data' => $data,
            'message' =>'updated successfully!',
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $data=Team::find($id);
        return response()->json(['success'=>true,'data'=>$data,'message'=>'fetched successfully!']);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $data=Team::find($id);
        return response()->json(['success'=>true,'data'=>$data,'message'=>'fetched successfully!']);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $fileName = time() . '_' . $request->file->getClientOriginalName();
        $request->file->move(public_path('uploads/'),$fileName);

        $data =Team::findOrFail($id)->update([
            // 'name' => $request->input('name'),
            'title' => $request->input('title'),
            'designation' => $request->input('designation'),
            'details' => $request->input('details'),
            'photo' => $fileName,
          
        ]);
       
        return response()->json([
            'success' => true,
            'data' => $data,
            'message' => 'Updated successfully!',
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Team::find($id)->delete();
         return response()->json(['success'=>true,'message'=> 'deleted successfully!']);
    }
}
