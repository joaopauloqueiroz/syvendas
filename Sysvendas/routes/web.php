<?php


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/fornecedor', 'HomeController@fornecedor')->name('fornecedores');
Route::get('/relatorio/produtos', 'HomeController@Rprodutos')->name('relatorio.produtos');
Route::get('/relatorio/vendas', 'HomeController@Rvendas')->name('relatorio.vendas');
Route::get('/contas/pagar', 'HomeController@pagar')->name('contas.pagar');
Route::get('/contas/receber', 'HomeController@receber')->name('contas.receber');
Route::get('/vendas', 'HomeController@vender')->name('vendas');
Route::post('/vendas/fim', 'Products\ProductsController@vender')->name('vender');
Route::post('/products/find/', 'SearchProduct\SearchProduct');
//verificar quantidade disponivel
Route::post('/stock/amount','Stock\StockController@verifyQtd')->name('verificaQuantidade');
Route::resource('/products', 'Products\ProductsController');

