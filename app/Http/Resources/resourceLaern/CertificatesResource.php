<?php

namespace App\Http\Resources\resourceLaern;

use Illuminate\Http\Resources\Json\JsonResource;

class CertificatesResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    function notes() {
        $data=[];
       foreach($this->notes as $note){
        $data[$note->id]['id']=$note->id;
        $data[$note->id]['title']=$note->title;
        $data[$note->id]['body']=$note->body;
       };
       return $data;

    }
    public function toArray($request)
    {


        return [
            'id'=>$this->id,
            'data'=>$this->data,
            'customer'=>[
                'name'=>$this->customer?$this->customer->name:'',
                'streetNum'=>$this->customer?$this->customer->street_num:'',
                'city'=>$this->customer?$this->customer->city:'',
                'postalCode'=>$this->customer?$this->customer->postal_code:'',
                'country'=>$this->customer?$this->customer->country->name:'',
            ],
            'site'=>[
                'name'=>$this->site?$this->site->name:'',
                'streetNum'=>$this->site?$this->site->street_num:'',
                'city'=>$this->site?$this->site->city:'',
                'postalCode'=>$this->site?$this->site->postal_code:'',
                'country'=>$this->site?$this->site->country->name:'',

            ],
            'notes'=>$this->notes?$this->notes():'',
        ];
    }
}
