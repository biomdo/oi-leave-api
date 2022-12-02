<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LeaveType extends Model
{
    use HasFactory;

    //Establishes a 1-to-Many relation that 1 leave type can can have many leave applications 
    public function leaveApplications(){
        return $this->hasMany(LeaveApplication::class);
    }
}
