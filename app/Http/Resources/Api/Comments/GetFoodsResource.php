<?php

namespace App\Http\Resources\Api\Comments;

use Illuminate\Http\Resources\Json\JsonResource;

class GetFoodsResource extends JsonResource
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
        if ($this->menu) {
            return  $this->menu->ghaza->name;
        }
    }
    // public function resolve($request = null)
    // {
    //     if ($this->menu == null) {
    //         return null;
    //     }
    // }
}
