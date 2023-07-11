<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ElectricBoard extends Model
{
    use HasFactory;
    protected $table='electric_boards';
    protected $fillable = ['name'];
    // public function category()
    // {
    //     return $this->hasMany(Category::class);
    // }
}
