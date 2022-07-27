<?php

namespace App\Http\Resources\Seller\Dashboard;

use Illuminate\Http\Resources\Json\JsonResource;

class OrderDetailUserResource extends JsonResource
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
            'idBuyer' => $this->user_id,
            'addressUser' => $this->user->addresses[0]->textAddress,
            'phoneUser' => $this->user->phones[0]->phoneNumber,
            'firstNameUser' => $this->user->firstName,
            'lastNameUser' => $this->user->lastName,
        ];
    }
}
