<?php

namespace App\Traits;

use App\Models\File;

trait FileableTrait
{
    public function files()
    {
        return $this->morphMany(File::class, 'file', 'model_type', 'model_id', 'id');
    }
}
