<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Provider extends Model
{
    protected $fillable = [
        'name',
        'cnpj',
        'email',
        'address',
        'telephone'
    ];
}
