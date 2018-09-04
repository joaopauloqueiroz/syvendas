@extends('home')
@section('titulo')
  Relatório de Produtos
@endsection
@section('form')
<span style="float: right;">Data: <span> 03/09/2018</span> </span>
    <table class=" table table-striped">
      
        <tr>
          <th>Código</th>
          <th>Produto</th>
          <th>Quantidade</th>
          <th>Fornecedor</th>
        </tr>
        <tr>
          <td>00001</td>
          <td>Picolé de Uva</td>
          <td>200</td>
          <td>Geladissimo</td>
        </tr>
        <tr>
            <td>00002</td>
            <td>Picolé de Maçã</td>
            <td>200</td>
            <td>Ice</td>
          </tr>
          <tr>
              <td>00003</td>
              <td>Picolé de Abacaxi</td>
              <td>200</td>
              <td>Geladissimo</td>
            </tr>
    </table>
    <input type="button" class="btn btn-outline-secondary" value="Imprimir" onclick="print();">
    
@endsection