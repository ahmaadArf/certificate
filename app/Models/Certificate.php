<?php

namespace App\Models;

use App\Traits\FileableTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Certificate extends Model
{
    use HasFactory,FileableTrait;

    protected $fillable = ['form_id', 'data', 'customer_id','user_id','tax_id', 'status_id','site_id'];

    protected $casts = [
        'data' => 'array'
    ];

    public function status()
    {
        return $this->belongsTo(Status::class, 'status_id');
    }


    public function form()
    {
        return $this->belongsTo(Form::class, 'form_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
    public function customer()
    {
        return $this->belongsTo(Customer::class, 'customer_id');
    }

    public function images()
    {
        return $this->morphMany(File::class, 'file', 'model_type', 'model_id', 'id')
            ->where('name_file', '!=', 'customer_signature');
    }

    public function notes(){
        return $this->hasMany(CertificateNote::class,'certificate_id');
    }

    public function customerSignature()
    {
        return $this->morphOne(File::class, 'file', 'model_type', 'model_id', 'id')
            ->where('name_file', 'customer_signature');
    }
}
