<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CustomerType extends Model
{
    use HasFactory;
    protected $fillable = ['name','user_id'];


    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function customer()
    {
        return $this->hasMany(Customer::class);
    }

    public function contact()
    {
        return $this->belongsTo(Contact::class);
    }
}
