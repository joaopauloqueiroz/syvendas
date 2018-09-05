<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Shopping extends Model
{
    protected $fillable = [
        'name',
        'amount',
        'provider',
        'order',
        'date',
        'description'
    ];
}
