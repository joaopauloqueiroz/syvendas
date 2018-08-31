<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{
    protected $fillable = ['order','name','amount','value','total','client_id','date','status'];

    //relaciona com a tabela de produtos
    public function cliente()
    {
        return $this->hasOne('App\Models\Client', 'client_id');
    }
}
