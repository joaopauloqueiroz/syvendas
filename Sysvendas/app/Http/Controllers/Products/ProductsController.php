<?php

namespace App\Http\Controllers\Products;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Http\Requests\ProductRequest;

use App\Repositories\Interfaces\PedidoInterface;
use App\Repositories\Interfaces\SaleInterface;
use App\Repositories\Interfaces\StockInterface;
use App\Repositories\Interfaces\OrderInterface;

class ProductsController extends Controller
{
    private $product;
    private $sale;
    private $stock;
    private $order;
    public function __construct(SaleInterface $sale, PedidoInterface $product, StockInterface $stock, OrderInterface $order){
        $this->middleware('auth');
        $this->product = $product;
        $this->sale = $sale;
        $this->stock = $stock;
        $this->order = $order;
    }
    

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //return view('Produtos.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Produtos.index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProductRequest $request)
    {
        $form = [
            'name' => $request->name,
            'value' => $request->value,
            'code' => $request->code,
            'type'  => $request->type,
            'price_vend' => $request->price_vend,
            'date'  => date('Y-m-d'),
        ];

        $estoque = [
            'amount' => $request->quantidade,
            'code'   => $request->code,
            'date'   => date('Y-m-d'),
        ];

        if($this->product->create($form) && $this->stock->create($estoque)){
            return redirect()->route('products.create')->with('success', 'Produto cadastrado com sucesso.');
        }else{
            return "Erro ao cadastrar um produto entre em contato com o suporte no numero: (11) 9 9509-6974 <br> <a href='/home'>HOME</a>";
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    /**
     * Finalizar pedido
     *
     * @param Request $request
     * @return void
     */
    public function vender(Request $request){
        $nPedido = 1;
        $pedido = $this->order->getOrder();
        if(count($pedido) >  0){
            $nPedido = $pedido[0]->order + 1;
        }


        $form  = [];
        for ($i=0; $i <= $request->count ; $i++) { 
            $name = "product".$i;
            $amount = 'amount'.$i;
            $value  = 'unipt'.$i;
            $total = 'valor'.$i;

                $form = [
                    "order" => $nPedido,
                    "name"  => $request->$name,
                    "amount" => $request->$amount,
                    "value" => $request->$value,
                    "total" => $request->$total,
                    "date"  => date('Y-m-d'),
                    "client_id" => 1,
                    "status" => 0,
                ];

                $id = $this->order->create($form);

                $nPedido = $this->order->find($id->id)->order;
        }

        return redirect()->route('vendas')->with('success', 'Pedido realizado com sucesso.');
        
    }
}
