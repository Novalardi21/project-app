<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DonationLocation extends Model
{
    use HasFactory;

    // Nama tabel (opsional karena Laravel otomatis plural)
    protected $table = 'donation_locations';

    // Field yang boleh diisi (fillable)
    protected $fillable = [
        'name',
        'lat',
        'lng',
        'address',
        'hours',
        'phone',
        'items',
        'note',
    ];
}
