<?php

namespace App\Http\Resources\Seller\Dashboard;

use Illuminate\Http\Resources\Json\JsonResource;

class OrderDetailResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        if ($this->menu) {
            return [
                'idCartItem' => $this->id,
                'quantity' => $this->quantity,
                'unitPrice' => $this->unit_price,
                'nameGhaza' => $this->menu->ghaza->name,
            ];
        }
    }
}
