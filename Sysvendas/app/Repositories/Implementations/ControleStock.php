<?php

namespace App\Repositories\Implementations;

use App\Repositories\Base\EloquentRepository;
use App\Repositories\Interfaces\StockInterface;
use App\Models\Stock;

class ControleStock extends EloquentRepository implements StockInterface
{
    public function __construct(Stock $stock)
    {
        $this->model = $stock;
    }

    public function getQuantity($code)
    {
        return $this->model->where('code', $code)->select('amount')->get();
    }
}
