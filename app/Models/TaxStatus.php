<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TaxStatus extends Model
{
    use HasFactory;
    protected $fillable = ['default_rate','tax_id','user_id'];

    public function tax()
    {
        return $this->belongsTo(TaxSetting::class,'tax_id');
    }
}
