<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $service=Service::all();
        return response ()->json([ 'success'=>true,'data'=>$service,'message'=>'successfully show']);
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
        $data = Service::create([
            'name' => $request->input('name'),
            'icon' => $request->input('icon'),
            'title' => $request->input('title'),
            'descript' => $request->input('descript'),
        ]);

        return response()->json([
            'success' =>true,
            'data' => $data,
            'message' =>'created successfully',
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $data=Service::find($id);
        return response ()->json([ 'success'=>true,'data'=>$data,'message'=>'fetched successfully!']);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $data=Service::find($id);
        return response()->json(['success'=>true,'data'=>$data,'message'=>'fetched successfully!']);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data =Service::findOrFail($id)->update([
            // 'name' => $request->input('name'),
            'icon' => $request->input('icon'),
            'title' => $request->input('title'),
            'descript' => $request->input('descript'),
          
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
         Service::find($id)->delete();
         return response()->json(['success'=>true,'message'=> 'deleted successfully!']);
    }
}
