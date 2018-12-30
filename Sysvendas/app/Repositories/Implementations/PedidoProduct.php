<?php

namespace App\Repositories\Implementations;

use App\Repositories\Base\EloquentRepository;
use App\Repositories\Interfaces\PedidoInterface;
use App\Models\Product;

class PedidoProduct extends EloquentRepository implements PedidoInterface
{
    public function __construct(Product $product)
    {
        $this->model = $product;
    }
}
