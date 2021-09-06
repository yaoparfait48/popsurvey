<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class alerte extends Model
{
    use HasFactory;

    protected $fillable = [
        'type',
        'niveau',
        'description_alerte',
        'user_id',
        'longitude',
        'latitude',
        'ville',
    ];
}
