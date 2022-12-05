<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class LeaveApplicationResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'id'=>$this->id,
            'employeeId'=>$this->employee_id,
            'leaveTypeId'=>$this->leave_type_id,
            'applicationDate'=>$this->application_date,
            'leaveDays'=>$this->leave_days,
            'startDate'=>$this->start_date,
            'endDate'=>$this->end_date,
            'handoverEmployeeId'=>$this->hadover_employee_id,
            'handoverReport'=>$this->hadover_report,
            'requestComments'=>$this->request_comments,
            'status'=>$this->status,
            'respondingEmployeeId'=>$this->responding_employee_id,
            'responseComments'=>$this->response_comments,
        ];
    }
}
