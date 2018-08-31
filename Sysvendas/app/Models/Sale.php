<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{
    protected $fillable = ['order','name','amount','value','total','date','client_id','payment_id','status'];

    //relaciona com a tabela de cliente
    public function cliente()
    {
        return $this->hasOne('App\Models\Client', 'client_id');
    }

    //relação com a tabela de forma de pagamento
    public function pagamento()
    {
        return $this->hasOne('App\Models\Payment', 'payment_id');
    }
}
