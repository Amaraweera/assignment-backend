<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Users extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'assign_tickets' => $this->assignTickets,
            'submitted_tickets' => $this->submittedTickets,
            'organization' => $this->organization,
            'email' => $this->email,
            'phone' => $this->phone
        ];
    }
}
