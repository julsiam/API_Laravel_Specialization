<?php

namespace App\Http\Controllers;

use App\Models\SpecialModel;
use Illuminate\Http\Request;

class SpecialModelController extends Controller
{
    public function index()
    {
        return SpecialModel::all();
    }



    public function store(Request $request)
    {
        return SpecialModel::create([
            'name' => $request->name,
            'email' => $request->email,
            'age' => $request->age,
        ]);
    }


     /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return SpecialModel::find($id);

        // return SpecialModel::findOrFail($id); //return message not found
        // return SpecialModel::where('id', $id)->first(); //specific data, return an array

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
        return SpecialModel::find($id)->update([
            'name' => $request->name,
            'email' => $request->email,
            'age' => $request->age,
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return SpecialModel::find($id)->delete();
    }
}
