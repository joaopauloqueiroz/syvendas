<?php
namespace App\Repositories\Implementations;

use App\Repositories\Base\EloquentRepository;
use App\Repositories\Interfaces\SaleInterface;
use App\Models\Sale;
use DB;
/**
 * Class de implemtação do repositorio de sale
 */
class EloquentSale extends EloquentRepository implements SaleInterface
{
    public function __construct(Sale $sale)
    {
        $this->model = $sale;
    }
    
    
}
