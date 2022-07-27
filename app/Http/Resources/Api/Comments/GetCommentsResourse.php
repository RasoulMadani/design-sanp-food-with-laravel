<?php

namespace App\Http\Resources\Api\Comments;

use Illuminate\Http\Resources\Json\JsonResource;
use  App\Http\Resources\Api\Comments\GetFoodsResource;

class GetCommentsResourse extends JsonResource
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
            'author' => ['name' => $this->user->firstName . ' ' . $this->user->lastName],
            'foods' =>  GetFoodsResource::collection($this->cartItems),
            // 'phoneUser' => $this->user->phones[0]->phoneNumber,
            // 'firstNameUser' => $this->user->firstName,
            // 'lastNameUser' => $this->user->lastName,
        ];
    }
}
