<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BillingDetail extends Model
{
    use HasFactory;

    protected $fillable = [
        'address',
        'street_num',
        'country_id',
        'city',
        'state',
        'postal_code',
        'credit_limit',
        'payment_term_id',
        'send_statement'
    ];
    public function customer()
    {
        return $this->belongsTo(Customer::class, 'customer_id');
    }
    public function country()
    {
        return $this->belongsTo(Country::class, 'country_id');
    }

    /*  public function tax(){
        return $this->belongsTo(TaxSetting::class,'tax_id');
    } */
    public function paymentTerm()
    {
        return $this->belongsTo(PaymentTerm::class, 'payment_term_id');
    }
}
