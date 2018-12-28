<?php

namespace App\Http\Controllers\Products;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Http\Requests\ProductRequest;

class ProductsController extends Controller
{
    private $product;

    public function __construct(Product $product){

        $this->product = $product;

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
            'date'      => date('Y-m-d'),
        ];

        if($this->product->create($form)){
            return redirect()->route('products.create')->with('success', 'Produto cadastrado com sucesso.');
        }else{
            return "Erro ao cadastrar um produto entre em contato com o suporte no numero: (11) 9 9509-6974";
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
}
