<script src="{{asset('js/jquery.min.js')}}"></script>
<form action="">
    <div class="form-group">
      <label for="name">Nome</label>
          <input type="text" name="name" placeholder="Nome do Fornecedor" class="form-control">
    </div>
    <div class="form-group">
      <label for="cnpj">Cnpj</label>
      <input type="number" name="cnpj" placeholder="CNPJ do Fornecedor" class="form-control">
    </div>
    <div class="form-group">
      <label for="email">E-mail</label>
        <input type="email" name="email" class="form-control" placeholder="E-mail do Fornecedor">
    </div>
    <div class="form-group">
      <label for="address">Endereço</label>
      <input type="text" name="address" class="form-control preco"  placeholder="Endereço">
    </div>
    <div class="form-group">
      <label for="telephone">Telefone</label>
      <input type="number" name="telephone" class="form-control" placeholder="Telefone">
    </div>
    <div class="form-group">
      <input type="submit" class="btn btn-outline-secondary" value="Cadastrar">
    </div>
    </form>