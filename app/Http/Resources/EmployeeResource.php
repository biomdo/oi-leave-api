<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class EmployeeResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        //Formats the JSON response -> using Camel Case and hiding sensitive/uncesssary info from being displayed
        return[
            'id'=>$this->id,
            'pfNumber'=>$this->pf_number,
            'surname'=>$this->surname,
            'otherNames'=>$this->other_names,
            'title'=>$this->title,
            'email'=>$this->email,
            'phoneNumber'=>$this->phone_number,
            'idType'=>$this->id_type,
            'idNumber'=>$this->id_number,
            'dob'=>$this->dob,
            'kraPin'=>$this->kra_pin,
            'nssfNumber'=>$this->nssf_number,
            'nhifNumber'=>$this->nhif_number,
            'maritalStatus'=>$this->marital_status,
            'departmentId'=>$this->department_id,
            'leaveDays'=>$this->leave_days,
            'profilePhoto'=>$this->profile_photo,
            'hod'=>$this->hod,
            'status'=>$this->status,
            'lastLogin'=>$this->last_login
        ];
    }
}
