<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TakeOver extends Model
{
    use HasFactory;

    protected $fillable = [
        'a_take_over',
        'b_take_over',
        'c_take_over',
        'provided_in',
    ];
}
