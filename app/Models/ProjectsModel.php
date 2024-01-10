<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProjectsModel extends Model
{
    use HasFactory;

    protected $table = 'projects';

    protected $fillable = [
        "title",
        "description"
    ];

    public function employees()
    {
        return $this->belongsToMany(EmployeeModel::class, 'employees_projects', 'project_id', 'employee_id');
    }
}
