<?php

namespace App\Repositories\Implementations;

use App\Repositories\Base\EloquentRepository;
use App\Repositories\Interfaces\OrderInterface;
use App\Models\Order;
use DB;
class EloquentOrder extends EloquentRepository implements OrderInterface
{
    public function __construct(Order $order)
    {
        $this->model = $order;
    }

    public function getOrder(){
        return DB::select("SELECT orders.order FROM orders ORDER BY id DESC LIMIT 1");
     }
}
