<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $table='categories';
    protected $fillable = [
        'name'
    ];
    public function forms()
    {
        return $this->hasMany(Form::class);
    }
    // public function electricBoard()
    // {
    //     return $this->belongsTo(ElectricBoard::class);
    // }
    public function users(){
        return  $this->belongsToMany(User::class,'categories_users')->withPivot('electric_board_id','license_number','gas_register_number');
    }
}
