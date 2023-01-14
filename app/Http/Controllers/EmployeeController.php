<?php

namespace App\Http\Controllers;
use App\Models\Employee;

use Illuminate\Http\Request;

class EmployeeController extends Controller
{

    public function storeEmployee(Request $request)
    {
        return Employee::create([
            'name' => $request->name,
            'gender' => $request->gender,
            'email' => $request->email,
            'phone' => $request->phone,
        ]);
    }


    public function allEmployees(){
        return Employee::all();
    }


    public function getEmployee($id)
    {
        return Employee::find($id);

       
    }

    public function updateEmployee(Request $request, $id){
        return Employee::find($id)->update([
            'name' => $request->name,
            'gender' => $request->gender,
            'email' => $request->email,
            'phone' => $request->phone,
        ]);
    }

    public function deleteEmployee($id){
        return Employee::find($id)->delete();
    }

}
