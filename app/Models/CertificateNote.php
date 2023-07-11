<?php

namespace App\Models;

use App\Traits\FileableTrait;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class CertificateNote extends Model
{
    use HasFactory, FileableTrait;

    protected $fillable = ['title', 'body', 'certificate_id','user_id'];

    public function certificate()
    {
        return $this->belongsTo(Certificate::class, 'certificate_id');
    }
}
