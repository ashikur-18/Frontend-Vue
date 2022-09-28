<?php

namespace App\Http\Controllers;

use App\Models\Thana;
use Illuminate\Http\Request;

class ThanaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Thana::with('district','divison')->get();
        return response()->json([
             'data'=> $data
        ],200);
    }

 

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data= $request->all();
       
        Thana::create($data);

        return response()->json([
            'message'=>'Thana Created Successsfully' 
        ],200);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data  = Thana::findOrFail($id);
        return response()->json([
            'data'=>$data
        ]);
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
        $thana                 = Thana::findOrFail($id);
        $thana->name           = $request->name;
        $thana->division_id    = $request->division_id;
        $thana->district_id     = $request->district_id;
        $thana->save();

        return response()->json([
            'data'=> 'Thana Updated Successfully'
        ],200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $thana = Thana::findOrFail($id);
        $thana->delete();
        return response()->json([
            "data" => 'Thana Deleted Succesfully'
        ],200);
    }
}
