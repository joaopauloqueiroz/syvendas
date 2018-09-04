$(document).ready(function(){

    var controle = 1;
    $('#btn-mais').click(function(e){
        e.preventDefault();
        var obj = '<div class="form-group">\
        <label for="product">Produto</label>\
        <input type="text" name="product-'+controle+'" list="listaProd" class="form-control" placeholder="Produto" style="max-width: 60%;">\
        <datalist id="listaProd">\
        <option value="Produto 1">Produto 1</option>\
        <option value="Sabonete">Sabonete</option>\
        <option value="Arroz">Arroz</option>\
        </datalist>\
        <div class="form-group" style="width: 10%; float: right; margin-top: -67px;">\
        <label for="valor">Total</label>\
        <input type="number" disabled="disabled" name="valor-'+controle+'" class="form-control" placeholder="R$">\
        </div>\
        <div class="form-group" style="width: 10%; float: right; margin-top: -67px; margin-right: 3%;">\
        <label for="amount">Unidade/Pote</label>\
        <input type="number" disabled="disabled" name="uni-pt-'+controle+'" class="form-control" placeholder="R$">\
        </div>\
        <div class="form-group" style="width: 10%; float: right; margin-top: -67px; margin-right: 3%;">\
        <label for="amount">Quantidade</label>\
        <input type="number" name="amount-'+controle+'" class="form-control" placeholder="Qtd" onblur="calculo(this, '+controle+')">\
        </div>\
        </div>';
        
        $('.apend').append(obj);
        document.getElementById('count').value = controle;
        controle ++;
    });
    
});
function calculo(dom, id){
    $("input[type=number][name=valor-"+id+"]")[0].value = parseInt(dom.value) * parseFloat($("input[type=number][name=uni-pt-"+id+"]").val());
}