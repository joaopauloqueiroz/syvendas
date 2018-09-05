@extends('home') 
@section('titulo') Vendas <span style="float: right;">Numero do pedido: 999999 &nbsp;&nbsp; &nbsp;Cliente: {{Auth::user()->name}}</span>
@endsection
 
@section('form')
<script src="{{asset('js/jquery-2.1.1.js')}}"></script>
<script src="{{asset('js/jquery.mask.js')}}"></script>
<script src="{{asset('js/vendas.js')}}"></script>

<form action="{{route('vender')}}" method="post">
  @csrf
  <div class="col-md-12">
    <div class="form-group apend">
      <label for="product">Produto</label>
      <input type="text" id="prod" onblur="valores(this);" name="search" list="listaProd" class="form-control busc" placeholder="Produto" style="max-width: 60%;">
      <datalist id="listaProd">
      </datalist>
      <div class="form-group" style="width: 10%; float: right; margin-top: -67px;">
          <label for="amount">Total</label>
          <input type="number" value="" readonly name="valor0" class="form-control tot" placeholder="R$">
        </div>
        
        <div class="form-group" style="width: 10%; float: right; margin-top: -67px; margin-right: 3%;">
            <label for="amount">Unidade/Pote</label>
            <input type="number" value="20.00" id="valorU" readonly name="unipt0" class="form-control" placeholder="R$">
          </div>
          
          <div class="form-group" style="width: 10%; float: right; margin-top: -67px; margin-right: 3%;">
              <label for="amount">Quantidade</label>
              <input type="number" name="amount0" class="form-control" placeholder="Qtd" onblur="calculo(this, 0)">
            </div>
            
          </div>
        </div>
        <input type="hidden" value="0" name="count" id="count">
        <input type="submit" class="btn btn-outline-secondary" value="Solicitar" >
        
        <div class="form-group" style="margin-top: 5%; width: 10%; float: right; margin-right: -35%;">
            <label for="valor_final">Total Vendas</label>
            <input type="number" name="valor_final" class="form-control" id="final_valor" placeholder="Total" readonly>
          </div>
        </form>
        <button id="btn-mais" class="btn btn-danger" style="float: right; font-size: 16pt; font-weight: bold; border-radius: 31px; width: 50px; margin-right: -10%; margin-top: -4%;">+</button>
          
        @endsection