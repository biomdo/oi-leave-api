<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    use HasFactory;

     //Establishes a 1-to-Many relation that 1 department can have many employees
    public function employees(){
        return $this->hasMany(Employees::class);
    }

}
