<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class completeRegisterRes extends JsonResource
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
            'trading_name' => $this->trading_name,
            'company_name' => $this->company_name,
            'registration_number' => $this->registration_number,
            'registered_address' => $this->registered_address,
            'number_street_name' => $this->number_street_name,
            'city' => $this->city,
            'postal_code' => $this->postal_code,
            'state'=>$this->state,
            'country' =>[
                'id'=> $this->country->id,
                'name'=> $this->country->name,

            ],
            'vat_number' => $this->vat_number,
            'has_vat' => $this->has_vat,
            'category' => $this->categories,
        ];
    }
}
