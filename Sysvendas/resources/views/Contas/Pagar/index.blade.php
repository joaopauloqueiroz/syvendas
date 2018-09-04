@extends('home')
@section('titulo')
    Contas a Pagar
@endsection
@section('form')
<span style="float: right;">Data: <span> 03/09/2018</span> </span>
<table class=" table table-striped">
      
    <tr>
      <th>Data</th>
      <th>Numero do pedido</th>
      <th>Nome</th>
      <th>Telefone</th>
      <th>Valor</th>
    </tr>
    <tr>
      <td>03/09/2018</td>
      <td>789456</td>
      <td>João Paulo</td>
      <td>11 995096974</td>
      <td>5000.00</td>
    </tr>
    <tr>
        <td>01/03/2018</td>
        <td>789456</td>
        <td>Luiz Felipe</td>
        <td>11 995096974</td>
        <td>500.00</td>
      </tr>
      <tr>
          <td>04/02/2018</td>
          <td>789456</td>
          <td>Milton Junior</td>
          <td>11 995096974</td>
          <td>7000.00</td>
        </tr>
</table>
<input type="button" class="btn btn-outline-secondary" value="Imprimir" onclick="print();">
@endsection