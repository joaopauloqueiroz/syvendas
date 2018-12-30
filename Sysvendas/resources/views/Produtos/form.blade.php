<script src="{{asset('js/jquery.min.js')}}"></script>
<script src="{{asset('js/cadastro-product.js')}}"></script>

<form action="{{route('products.store')}}" method="post">
  @csrf
    @if(session('success'))
            <div class="alert alert-success">
                {!!session('success')!!}
            </div>
            @endif

    @if($errors->any())
    <div class="alert alert-danger">
        @foreach ($errors->all() as $erro)
            <p>{{$erro}}</p>
        @endforeach
    </div>
    @endif

    <div class="form-group">
      <label for="name">Nome</label>
          <input type="text" name="name" placeholder="Nome do produto" class="form-control" value="{{old('name')}}">
    </div>
    <div class="form-group">
      <label for="code">Código do Produto</label>
      <input type="number" name="code" placeholder="Código do produto" class="form-control" value="{{old('code')}}">
    </div>
    <div class="form-group">
      <label for="value">Quantidade</label>
      <input type="number" name="quantidade" class="form-control quantidade"  placeholder="Quantidade de Produtos" value="{{old('quantidade')}}">
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
      <input type="number" name="value" class="form-control preco"  placeholder="R$ Valor do produto" value="{{old('value')}}">
    </div>
    <div class="form-group">
      <label for="porcentagem">Porcentagem</label>
      <input type="number" name="porcentagem" class="form-control percent" placeholder="Porcentagem %" style="width: 40% !important;" value="{{old('porcentagem')}}">
      <div class="form-group" style="width: 40% !important; float: right !important; margin-top: -67px;" >
        <label for="price_vend">Preço de venda</label>
        <input type="number" name="price_vend" class="form-control venda"  placeholder="R$ Valor de venda" disabled="disabled" value="{{old('price_vend')}}">

        <input type="hidden" name="price_vend" class="form-control venda_hide"  placeholder="R$ Valor de venda" value="{{old('price_vend')}}"> 
      </div>
    </div>
    <div class="form-group">
      <input type="submit" class="btn btn-outline-secondary" value="Cadastrar">
    </div>
    </form>