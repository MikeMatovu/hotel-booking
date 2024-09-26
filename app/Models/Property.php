<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    use HasFactory;

    protected $fillable = [
        'checkin_time',
        'guests',
        'beds',
        'bedrooms',
        'bathrooms',
        'description',
        'location',
        'images',
        'house_rules',
        'user_id',
    ];

    // Cast JSON fields to arrays
    protected $casts = [
        'images' => 'array',
        'house_rules' => 'array',
    ];


    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
