<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class AdminResource extends JsonResource
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
            'username'=>$this->username,
            'name'=>$this->name
        ];
    }
}
