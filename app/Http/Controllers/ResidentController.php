<?php

namespace App\Http\Controllers;
use App\Models\Resident;

use Illuminate\Http\Request;

class ResidentController extends Controller
{

    public function addResident(Request $request)
    {
        return Resident::create([
            'name' => $request->name,
            'gender' => $request->gender,
            'email' => $request->email,
            'phone' => $request->phone
        ]);
    }


    public function allResident(){
        return Resident::all();
    }


    public function getResident($id)
    {
        return Resident::find($id);

       
    }

    public function updateResident(Request $request, $id){
        return Resident::find($id)->update([
            'name' => $request->name,
            'gender' => $request->gender,
            'email' => $request->email,
            'phone' => $request->phone,
        ]);
    }

    public function deleteResident($id){
        return Resident::find($id)->delete();
    }

}
