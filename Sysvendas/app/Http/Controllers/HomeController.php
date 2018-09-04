<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    public function cadastro()
    {
        return view('Produtos.index');
    }
    public function fornecedor()
    {
        return view('Fornecedores.index');
    }
    public function Rprodutos()
    {
        return view('Relatorios.Produtos.index');
    }

    public function Rvendas()
    {
        return view('Relatorios.Vendas.index');
    }

    public function pagar()
    {
        return view('Contas.Pagar.index');
    }
    public function receber()
    {
        return view('Contas.Receber.index');
    }

    public function vender()
    {
        return view('Vendas.index');
    }
    public function teste(Request $request)
    {
        for ($i = 0; $i <= $request->count; $i++) {
            $array = [
                   "order" => $request->order,
                   "name"   => $request->input("product-$i"),
                   "amount" => $request->input("amount-$i"),
                   "value"  => $request->input("valor-$i"),
                   "total"  => $request->input("uni-pt-$i"),
                   "date"   => new Date('Y-m-d'),
                   "client_id" => Auth::user()->id,
                   "payment_id" => $request->payment,
                   "status" => 0
            ];
            echo "<pre>";
            var_dump($array);
        }
        return view('Vendas.index');
    }
}
