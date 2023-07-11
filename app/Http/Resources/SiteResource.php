<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class SiteResource extends JsonResource
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
            "id"=> $this->id,
            "name"=>$this->name,
            "address"=> $this->address,
            "street_num"=> $this->street_num,
            "city"=> $this->city,
            "country" =>$this->country->name,
            "state"=>$this->state,
            'property_type'=>$this->property_type,
            'other_value'=>$this->other_value,
            "postal_code"=> $this->postal_code,
            "user_id"=> $this->user_id,
            'site_contact' => $this->siteContact,
        ];
    }
}
