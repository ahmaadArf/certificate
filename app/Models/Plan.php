<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Plan extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'stripe_plan',
        'price',
       
    ];
    protected $nullable=[ 'description'];
    public function features(){
        return $this->belongsToMany(Feature::class)->withPivot(['max_amount']);
    }
}
