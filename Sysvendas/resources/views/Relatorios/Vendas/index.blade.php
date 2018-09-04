@extends('home')
@section('titulo')
  Relatório de Vendas
@endsection
@section('form')
<span style="float: right;">Data: <span> 03/09/2018</span> </span>
    <table class=" table table-striped">
      
        <tr>
          <th>Pedido</th>
          <th>Data da venda</th>
          <th>Cliente</th>
          <th>Valor</th>
        </tr>
        <tr>
          <td>999999</td>
          <td>03/09/2018</td>
          <td>João Paulo</td>
          <td>1000.00</td>
        </tr>
        <tr>
            <td>888888</td>
            <td>02/09/2018</td>
            <td>Nelson Queiroz</td>
            <td>2000.00</td>
          </tr>
          <tr>
              <td>777777</td>
              <td>01/03/2018</td>
              <td>Luiz Felipe</td>
              <td>3000.00</td>
            </tr>
    </table>
    <input type="button" class="btn btn-outline-secondary" value="Imprimir" onclick="print();">
    
@endsection