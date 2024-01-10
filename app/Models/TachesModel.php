<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TachesModel extends Model
{
    use HasFactory;

    protected $table = 'taches';

    protected $fillable = [
        "title",
        "description",
        "etat"
    ];

    public function employees()
    {
        return $this->belongsToMany(EmployeeModel::class, 'employees_taches', 'tache_id', 'employee_id');
    }
}
