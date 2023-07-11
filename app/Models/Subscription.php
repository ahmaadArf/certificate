<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subscription extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'stripe_id',
        'stripe_status',
        'name',
        'stripe_price',
        'quantity',
        'trial_ends_at',
        'ends_at',
    ];

    public function subscriptionItems()
    {
        return $this->hasMany(SubscriptionItem::class);
    }
}
