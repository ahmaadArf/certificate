<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TaxSetting extends Model
{
    use HasFactory;

    protected $fillable = ['tax_name', 'tax_amount','user_id'];


    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    
    public function status()
    {
        return $this->hasOne(TaxStatus::class,'tax_id')->where('user_id',authUser('sanctum')->id);
    }
}
