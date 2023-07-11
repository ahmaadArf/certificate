<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Site extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'address', 'street_num', 'city','state' ,'country_id', 'customer_id', 'postal_code','property_type','other_value' ,'user_id'];


    public function country()
    {
        return $this->belongsTo(Country::class, 'country_id');
    }


    public function siteContact()
    {
        return $this->hasOne(SiteContact::class);
    }

    
    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }


    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
