<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmployeeModel extends Model
{
    use HasFactory;

    protected $table = 'employees';

    protected $fillable = [
        'name',
        'email',
        'phone',
        'section',
        'image'
    ];

    public function projects()
    {
        return $this->belongsToMany(ProjectsModel::class, 'employees_projects', 'employee_id', 'project_id');
    }

    public function taches()
    {
        return $this->belongsToMany(ProjectsModel::class, 'employees_taches', 'employee_id', 'tache_id');
    }
}
