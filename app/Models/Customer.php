<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Customer extends Model
{
    use HasFactory, SoftDeletes;

protected $fillable = [ 'name','first_name','last_name','type_id', 'address', 'street_num', 'city', 'postal_code', 'country_id','state','user_id'];
//protected $guarded=[];

    public function country()
    {
        return $this->belongsTo(Country::class, 'country_id');
    }

    public function contacts()
    {
        return $this->hasMany(Contact::class, 'customer_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function siteContact()
    {
        return $this->hasMany(SiteContact::class);
    }

    public function sites()
    {
        return $this->hasMany(Site::class);
    }


    public function certificates()
    {
        return $this->hasMany(Certificate::class);
    }

    public function billing()
    {
        return $this->hasOne(BillingDetail::class, 'customer_id');
    }
    public function customerType()
    {
        return $this->belongsTo(CustomerType::class, 'type_id');
    }
}
