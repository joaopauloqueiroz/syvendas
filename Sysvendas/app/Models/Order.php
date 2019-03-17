<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
        "order",
        "name",
        "amount",
        "value",
        "total",
        "date",
        "status",
        "client_id"
    ];
}
