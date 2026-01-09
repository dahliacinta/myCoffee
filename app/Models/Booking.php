<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'name',
        'email',
        'phone',
        'date',
        'pax',
        'package_id',
        'address',
    ];

     protected $casts = [
        'date' => 'datetime', // Now $booking->date is a Carbon instance
    ];

    // Relationship: A booking belongs to a user
    public function user()
    {
       // return $this->belongsTo(Package::class);
          return $this->belongsTo(User::class);
    }
    
}