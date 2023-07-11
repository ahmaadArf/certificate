<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Form extends Model
{
    use HasFactory;
    protected $fillable = ['name','type','status','file_name','category_id'];

   
    public function template(){
        return $this->hasMany(FormTemplate::class,'form_id');
    }

    public function users(){
        return  $this->belongsToMany(User::class,'forms_users')->withPivot('tax_id','price');
    }
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
