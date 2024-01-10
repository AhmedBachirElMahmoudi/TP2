<?php

namespace App\Http\Controllers;

use App\Models\EmployeeModel;
use App\Models\TachesModel;
use Illuminate\Http\Request;

class TachesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function create(){
        $employees = EmployeeModel::all();
        return view('/Taches/create' , ['employees'=>$employees]);
    }

    public function store(Request $request){

        $tache = TachesModel::create([
            'title' => $request->title,
            'description' => $request->description,
            'etat' => $request->etat
        ]);

        $tache->employees()->attach($request->input('employees'));

        return to_route('taches.index');
    }

    public function index(){
        $taches = TachesModel::all();

        return view('/Taches/liste' , ['taches'=>$taches]);
    }

    public function destroy(TachesModel $tachesModel){
        $tachesModel->delete();

        return to_route('taches.index');
    }

    public function show(TachesModel $tachesModel){
        $employees = $tachesModel->employees;

        return view('/Taches/show' , ['tache'=>$tachesModel,'employees'=>$employees]);
    }
}
