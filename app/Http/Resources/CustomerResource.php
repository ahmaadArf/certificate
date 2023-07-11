<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class CustomerResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        $data = [
            'id' => $this->id,
            'name' => $this->name,
            'first_name'=>$this->first_name,
            'last_name'=>$this->last_name,
            'address' => $this->address,
            'state'=>$this->state,
            'street_num' => $this->street_num,
            'email' =>$this->email,
            'phone' => $this->phone,
            'type' => $this->customerType->name,
            // 'billing_details' => $this->billing_details,
            // 'billing_info' => [
            //     'address' => $this->billing->address,
            //     'street_num' =>$this->billing->street_num,
            //     'country' =>$this->billing->country->name,
            //     'city' =>$this->billing->city,
            //     'state'=>$this->billing->state,
            //     'postal_code' =>$this->billing->postal_code,
            //     'credit_limit' =>$this->billing->credit_limit,
            //     'payment_term' =>$this->billing->paymentTerm,
            //     'send_statement'  =>$this->billing->send_statement
            // ],
            'city' => $this->city,
            'postal_code' =>$this->postal_code,
            'country_id' => $this->country->name,
            'user_id' => $this->user_id,
            'contacts' => $this->contacts,
            'sites' => SiteResource::collection($this->sites),
            'certificates' => $this->certificates,

        ];



        return $data;
    }
}
