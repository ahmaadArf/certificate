<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class SiteRes extends JsonResource
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
            'name'=>$this->name,
            "postal_code" => $this->postal_code,
            "street_num" => $this->street_num,
            "city" => $this->city,
            "state"=>$this->state,
            'site_id' =>$this->id,
            "country" => [
                'id'=>$this->country->id,
                'name'=>$this->country->name,
            ],
            'customer_id' =>$this->customer_id,
            "address" => $this->address,
            "property_type"=>$this->property_type,
            'other_value'=>$this->other_value,
            'contact'=>[
                'f_name' =>$this->siteContact->f_name,
                'phone' =>$this->siteContact->phone,
                'email' =>$this->siteContact->email,
                'type' =>$this->siteContact->type,
            ],
        ];
    }
}
