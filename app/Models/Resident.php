<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Resident extends Model
{
    protected $fillable = [
        'name',
        'gender',
        'email',
        'phone'
    ];

    use HasFactory;
}
