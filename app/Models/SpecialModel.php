<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SpecialModel extends Model
{
    protected $fillable = [
        'name',
        'email',
        'age'
    ];

    use HasFactory;
}
