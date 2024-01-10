<?php

namespace App\Http\Controllers;

use App\Models\EmployeeModel;
use App\Models\ProjectsModel;
use Illuminate\Http\Request;

class ProjectsController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function create(){
        $employees = EmployeeModel::all();
        return view('projects.create' , ['employees'=>$employees]);
    }

    public function store(Request $request){

        $project = ProjectsModel::create([
            'title' => $request->title,
            'description' => $request->description
        ]);

        $project->employees()->attach($request->input('employees'));

        return to_route('projects.index');
    }

    public function index(){
        $projects =  ProjectsModel::all();

        return view('projects.liste' , ['projects'=>$projects]);
    }

    public function show(ProjectsModel $projectsModel){
        $employees = $projectsModel->employees;
    
        $employeeNames = $employees->pluck('name')->toArray();
        
        
        return view('projects.show' , ['project'=>$projectsModel,'employees'=>$employeeNames]);
    }

    public function destroy(ProjectsModel $projectsModel){
        $projectsModel->delete();

        return to_route('projects.index');
    }
    
    
}
