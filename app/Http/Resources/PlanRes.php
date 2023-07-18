<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class PlanRes extends JsonResource
{
    function features() {
        $data=[];
       foreach($this->features as $feature){
        $data[$feature->id]['name']=$feature->name;

       };
       return $data;

    }
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
            'price'=>$this->price,
            'interval'=>$this->interval,
            'features'=>$this->features()
        ];
    }
}


