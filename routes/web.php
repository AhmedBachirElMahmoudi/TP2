<?php

use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\ProjectsController;
use App\Http\Controllers\TachesController;
use App\Models\EmployeeModel;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('/auth/login');
});




Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



//Employee : 

Route::get('/employee/create' , [EmployeeController::class , 'create'])->name('employee.create');

Route::post('/employee/create' , [EmployeeController::class , 'valider'])->name('employee.save');

Route::get('/employees' , [EmployeeController::class , 'index'])->name('employees.index');

Route::delete('/employees/{employeeModel}' , [EmployeeController::class , 'destroy'])->name('employee.delete');

Route::get('/employees/{employeeModel}' , [EmployeeController::class , 'show'])->name('employee.show');

Route::get('/employees/edit/{employeeModel}' , [EmployeeController::class , 'edit'])->name('employee.edit');

Route::put('/employees/update/{employeeModel}' , [EmployeeController::class , 'update'])->name('employee.update');



//Employees :

Route::get('/project/create' , [ProjectsController::class , 'create'])->name('project.create');

Route::post('/project/create' , [ProjectsController::class , 'store'])->name('project.store');

Route::get('/projects' , [ProjectsController::class , 'index'])->name('projects.index');



Route::get('/projects/{projectsModel}' , [ProjectsController::class , 'show'])->name('project.show');

Route::delete('/project/{projectsModel}' , [ProjectsController::class , 'destroy'])->name('project.delete');


//Tacjes:

Route::get('/tache/create' , [TachesController::class , 'create'])->name('tache.create');

Route::get('/taches' , [TachesController::class , 'index'])->name('taches.index');

Route::post('/tache/create' , [TachesController::class , 'store'])->name('tache.store');

Route::get('/taches/{tachesModel}' , [TachesController::class , 'show'])->name('tache.show');

Route::delete('/taches/{tachesModel}' , [TachesController::class , 'destroy'])->name('tache.delete');




