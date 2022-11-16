<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LimitCount extends Model
{
    use HasFactory;

    protected $fillable = [
        'a_count',
        'b_count',
        'c_count',
        'provided_in',
    ];
}
