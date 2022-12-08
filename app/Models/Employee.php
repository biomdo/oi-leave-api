<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'pf_number',
        'surname', 
        'surname', 
        'other_names', 
        'email', 
        'phone_number',
        'password' 
    ];

    //Establishes a 1-to-Many relation that 1 employee can have many leave applications
    public function leaveApplications(){
        return $this->hasMany(LeaveApplication::class);
    }

    //Establishes a 1-to-Many relation that 1 employee can go on leave many times during his/her employement 
    public function leaves(){
        return $this->hasMany(Leave::class);
    }

    //Establishes a Many to 1 relation that many employees can belong to 1 department
    public function department(){
        return $this->belongsTo(Department::class);
    }
}

