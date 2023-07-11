<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FormTemplate extends Model
{
    use HasFactory;
    
    protected $fillable = ['user_id','name','form_id','service_id','data','default'];

    protected $casts = [
        'data' => 'array'
    ];

    public function form(){
        return $this->belongsTo(Form::class,'form_id');
    }
}
