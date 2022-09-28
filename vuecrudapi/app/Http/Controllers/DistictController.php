<?php

namespace App\Http\Controllers;

use App\Models\District;
use Illuminate\Http\Request;

class DistictController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = District::with('division')->get();
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
       
        District::create($data);

        return response()->json([
            'message'=>'district Created Successsfully' 
        ],200);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data  = District::findOrFail($id);
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
        $distict              = District::findOrFail($id);
        $distict->name        = $request->name;
        $distict->division_id = $request->division_id;
        $distict->save();

        return response()->json([
            'data'=> 'District Updated Successfully'
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
        $distict = District::findOrFail($id);
        $distict->delete();
        return response()->json([
            "data" => 'Distict Deleted Succesfully'
        ],200);
    }
}
