<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $about=About::all();
        return response ()->json([ 'success'=>true,'data'=>$about,'message'=>'successfully show']);
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
        $data = About::create([
            'name' => $request->input('name'),
            'title' => $request->input('title'),
            'descript' => $request->input('descript'),
            'part_1' => $request->input('part_1'),
            'part_2' => $request->input('part_2'),
            'part_3' => $request->input('part_3'),
            'photo' =>$fileName,
        ]);

        return response()->json([
            'success' =>true,
            'data' => $data,
            'message' =>'Insert successfully!',
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $data=About::find($id);
        return response()->json(['success'=>true,'data'=>$data,'message'=>'fetched successfully!']);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $data=About::find($id);
        return response()->json(['success'=>true,'data'=>$data,'message'=>'fetched successfully!']);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $fileName = time() . '_' . $request->file->getClientOriginalName();
        $request->file->move(public_path('uploads/'),$fileName);

        $data =About::findOrFail($id)->update([
            // 'name' => $request->input('name'),
            'title' => $request->input('title'),
            'descript' => $request->input('descript'),
            'part_1' => $request->input('part_1'),
            'part_2' => $request->input('part_2'),
            'part_3' => $request->input('part_3'),
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
        About::find($id)->delete();
         return response()->json(['success'=>true,'message'=> 'deleted successfully!']);
    }
}
