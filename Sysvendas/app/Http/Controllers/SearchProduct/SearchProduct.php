<?php
namespace App\Http\Controllers\SearchProduct;

use App\Http\Controllers\Controller;
use App\Repositories\Interfaces\SearchProductInterface;
use Illuminate\Http\Request;

class SearchProduct extends Controller
{
    public function __invoke(SearchProductInterface $buscas, Request $request)
    {
        $da = $request->except('_token');
        
        foreach ($da as $key => $value) {
            $cd = $key;
            break;
        }
        return $buscas->getBySubject($request->cd);
    }
}
