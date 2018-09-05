<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LowClient extends Model
{
    protected $fillable = [
        'order_cli',
        'date'
    ];
}
