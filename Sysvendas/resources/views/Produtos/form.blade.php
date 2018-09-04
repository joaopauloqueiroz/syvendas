<script src="{{asset('js/jquery.min.js')}}"></script>
<script src="{{asset('js/cadastro-product.js')}}"></script>
<form action="">
    <div class="form-group">
      <label for="name">Nome</label>
          <input type="text" name="name" placeholder="Nome do produto" class="form-control">
    </div>
    <div class="form-group">
      <label for="code">Código do Produto</label>
      <input type="number" name="code" placeholder="Código do produto" class="form-control">
    </div>
    <div class="form-group">
      <label for="type">Tipo de produto</label>
        <select name="type" selected="selected" class="form-control" placeholder="Tipo de produto">
          <option value="UNI">UNI</option>
          <option value="POTE">POTE</option>
        </select>
    </div>
    <div class="form-group">
      <label for="value">Preço</label>
      <input type="number" name="value" class="form-control preco"  placeholder="R$ Valor do produto">
    </div>
    <div class="form-group">
      <label for="porcentagem">Porcentagem</label>
      <input type="number" name="porcentagem" class="form-control percent" placeholder="Porcentagem %" style="width: 40% !important;">
      <div class="form-group" style="width: 40% !important; float: right !important; margin-top: -67px;">
        <label for="price_vend">Preço de venda</label>
        <input type="number" name="price_vend" class="form-control venda"  placeholder="R$ Valor de venda" disabled="disabled">
      </div>
    </div>
    <div class="form-group">
      <input type="submit" class="btn btn-outline-secondary" value="Cadastrar">
    </div>
    </form>