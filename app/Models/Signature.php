<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Signature extends Model
{
    use HasFactory;
    protected $fillable = ['user_id','signature'];
    protected $appends = ['file_url'];

    public function user(){
        return $this->belongsTo(User::class);
    }
    public function getFileUrlAttribute()
    {
        return asset('uploads/'.$this->signature);
    }
}
