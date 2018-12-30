<?php

namespace App\Http\Controllers\Stock;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\Interfaces\StockInterface;

class StockController extends Controller
{
    private $stock;
    public function __construct(StockInterface $stock)
    {
        $this->stock = $stock;
    }

    public function verifyQtd(Request $request){
        $resp = $this->stock->getQuantity($request->search);
      
            return json_encode(['qtd' => $resp[0]->amount]);
        
    }
}
