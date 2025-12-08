<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Donation extends Model
{
    protected $fillable = [
        'user_id',
        'donation_location_id',
        'donor_name',
        'phone',
        'address',
        'item_type',
        'delivery_type',
        'item_description',
        'photos',
        'status',
        'proof_photo',
    ];

    protected $casts = [
        'photos' => 'array',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function location()
    {
        return $this->belongsTo(DonationLocation::class, 'donation_location_id');
    }
}
