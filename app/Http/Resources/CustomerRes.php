<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class CustomerRes extends JsonResource
{
    function contacts() {
        $data=[];
       foreach($this->contacts as $contact){
        $data[$contact->id]['f_name']=$contact->f_name;
        $data[$contact->id]['phone']=$contact->phone;
        $data[$contact->id]['email']=$contact->email;
        $data[$contact->id]['type']=$contact->type;
        $data[$contact->id]['customer_id']=$contact->customer_id;
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
            'id' => $this->id,
            'name' => $this->name,
            'first_name'=>$this->first_name,
            'last_name'=>$this->last_name,
            'address' => $this->address,
            'state'=>$this->state,
            'street_num' => $this->street_num,
            'type' =>[
                'id'=>$this->customerType->id,
                'name'=>$this->customerType->name,
            ],
            'city' => $this->city,
            'postal_code' =>$this->postal_code,
            'country' => [
                'id'=>$this->country->id,
                'name'=>$this->country->name,
            ],
            'user_id' => $this->user_id,
            'contacts'=>$this->contacts?$this->contacts():'',
        ];
    }
}
