@extends('home') 
@section('titulo') Vendas <span style="float: right;">Numero do pedido: 999999 &nbsp;&nbsp; &nbsp;Cliente: {{Auth::user()->name}}</span>
@endsection
 
@section('form')
<script src="{{asset('js/jquery.min.js')}}"></script>
<script src="{{asset('js/vendas.js')}}"></script>
<form action="{{route('vender')}}" method="post">
  @csrf
  <div class="col-md-12">
    <div class="form-group apend">
      <label for="product">Produto</label>
      <input type="text" name="product-0" list="listaProd" class="form-control" placeholder="Produto" style="max-width: 60%;">
      <datalist id="listaProd">
              <option value="Produto 1">Produto 1</option>
              <option value="Sabonete">Sabonete</option>
              <option value="Arroz">Arroz</option>
          </datalist>
      <div class="form-group" style="width: 10%; float: right; margin-top: -67px;">
        <label for="amount">Total</label>
        <input type="number" value="100.00" readonly name="valor-0" class="form-control" placeholder="R$">
      </div>

      <div class="form-group" style="width: 10%; float: right; margin-top: -67px; margin-right: 3%;">
        <label for="amount">Unidade/Pote</label>
        <input type="number" value="20.00" readonly name="uni-pt-0" class="form-control" placeholder="R$">
      </div>

      <div class="form-group" style="width: 10%; float: right; margin-top: -67px; margin-right: 3%;">
        <label for="amount">Quantidade</label>
        <input type="number" name="amount-0" class="form-control" placeholder="Qtd" onblur="calculo(this, 0)">
      </div>

    </div>
  </div>
  <input type="hidden" value="0" name="count" id="count">
  <input type="submit" class="btn btn-outline-secondary" value="Solicitar" >

  <div class="form-group" style="margin-top: 5%; width: 10%; float: right; margin-right: -35%;">
    <label for="valor_final">Total Vendas</label>
    <input type="number" name="valor_final" class="form-control" placeholder="Total vendas" readonly>
  </div>
</form>
<button id="btn-mais" class="btn btn-danger" style="float: right; font-size: 16pt; font-weight: bold; border-radius: 31px; width: 50px; margin-right: -10%; margin-top: -4%;">+</button>
@endsection