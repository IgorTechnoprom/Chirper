<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chirp extends Model
{
    use HasFactory;
    
    // Let's add the $fillable property to our Chirp model to enable mass-assignment for the message attribute
    protected $fillable = [
        'message',
    ];
}
