<?php

namespace App\Http\Resources\resourceLaern;

use Illuminate\Http\Resources\Json\JsonResource;

class Certificates extends JsonResource
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
            'id'=>$this->id,
            'data'=>$this->data,
            'customer'=>[
                'name'=>$this->customer->name,
                'Street Num'=>$this->customer->street_num,
                'City'=>$this->customer->city,
                'Postal Code'=>$this->customer->postal_code,
                'Postal Code'=>$this->customer->country->name,
            ],
            'form'

        ];
    }
}
