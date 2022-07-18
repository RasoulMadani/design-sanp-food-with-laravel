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
            'addressUser' => $this->menu->ghaza->user->addresses[0]->textAddress,
            'phoneUser' => $this->menu->ghaza->user->phones[0]->phoneNumber,
            'firstNameUser' => $this->menu->ghaza->user->firstName,
            'lastNameUser' => $this->menu->ghaza->user->lastName,
        ];
    }
}
