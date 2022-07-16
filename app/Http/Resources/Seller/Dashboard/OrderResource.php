<?php

namespace App\Http\Resources\Seller\Dashboard;

use Illuminate\Http\Resources\Json\JsonResource;

class OrderResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        // return parent::toArray($request);
        return [
            // 'kol' => parent::toArray($request),
            'idUser' => $this->cart->user->id,
            'email' => $this->cart->user->email,
            'firstNameUser' => $this->cart->user->firstName,
            'lastNameUser' => $this->cart->user->lastName,
            'addressUser' => $this->cart->user->addresses[0]->textAddress,
            'idAddressUser' => $this->cart->user->addresses[0]->id,
            // 'idMenu' => $this->menu->id,           
             // 'kol' => parent::toArray($request),
            // 'idUser' => $this->cart->user->id,
            // 'email' => $this->cart->user->email,
            // 'firstNameUser' => $this->cart->user->firstName,
            // 'lastNameUser' => $this->cart->user->lastName,
            // 'addressUser' => $this->cart->user->addresses[0]->textAddress,
            // 'idAddressUser' => $this->cart->user->addresses[0]->id,
            // 'idMenu' => $this->menu->id,
            // 'description' => $this->description,
            // 'created_at' => (string) $this->created_at,
            // 'updated_at' => (string) $this->updated_at,
            // 'user' => $this->user,
            // 'ratings' => $this->ratings,
        ];
    }
}
