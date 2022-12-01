<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LeaveApplication extends Model
{
    use HasFactory;

    //Establishes a Many-to-1 relation that many leave applications can belong to 1 employee
    public function employee(){
        return $this->belongsTo(Employee::class);
    }
}
