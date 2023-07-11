<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BusinessType extends Model
{
    use HasFactory;

    protected $fillable = ['name','user_id'];


    public function User()
    {
        return $this->belongsToMany(User::class,'user_busines_type','busines_type_id','user_id');
    }
}
