<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;
protected $fillable = [
    'department_id',
    'position_id',
    'first_name',
    'last_name',
    'email',
    'phone',
    'gender',
    'birth_date',
    'hire_date',
    'salary',
    'address',
    'status',
];

    public function department()
{
    return $this->belongsTo(Department::class);
}


public function position()
{
    return $this->belongsTo(Position::class);
}
}
