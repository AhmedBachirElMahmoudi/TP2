<?php

namespace App\Http\Controllers;

use App\Models\EmployeeModel;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        $users = EmployeeModel::all();

        return view('/Employee/liste' , ['users'=>$users]);
    }

    public function create(){
        return view('/Employee/create');
    }

    public function valider(Request $request){

        $imagePath = $request->file('image')->store('images' , 'public');

        EmployeeModel::create([
            "name"=>$request->name,
            "email"=>$request->email,
            "phone"=>$request->phone,
            "section"=>$request->section,
            "image"=>$imagePath
        ]);

        return to_route('employees.index');
    }

    public function destroy(EmployeeModel $employeeModel){
        $employeeModel->delete();

        return to_route('employees.index');
    }

    public function show(EmployeeModel $employeeModel){

        return view("/Employee/show" , ["user"=>$employeeModel]);
    }

    public function edit(EmployeeModel $employeeModel){
        return view("/Employee/update" , ["user"=>$employeeModel]);
    }

    public function update(Request $request, EmployeeModel $employeeModel){
        $data = $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'phone' => 'required|string',
            'section' => 'required|string',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048', // Adjust image validation rules as needed
        ]);
    
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('images', 'public');
            $data['image'] = $imagePath;
        }
    
        $employeeModel->update($data);
    
        return to_route('employees.index');
    }
}
