
$(document).ready(function($){
    var controle = 1;
    $('#btn-mais').click(function(e){
        e.preventDefault();
        var obj = '<div class="form-group">\
        <label for="product">Produto</label>\
        <input type="search" id="prod" data-value="" name="product'+controle+'" list="listaProd" class="form-control busc" placeholder="Produto" style="max-width: 60%;">\
        <datalist id="listaProd">\
        </datalist>\
        <div class="form-group" style="width: 10%; float: right; margin-top: -67px;">\
        <label for="valor">Total</label>\
        <input type="number" readonly name="valor'+controle+'" class="form-control tot" placeholder="R$">\
        </div>\
        <div class="form-group" style="width: 10%; float: right; margin-top: -67px; margin-right: 3%;">\
        <label for="amount">Unidade/Pote</label>\
        <input type="number" readonly name="unipt'+controle+'" class="form-control" placeholder="R$" value="10">\
        </div>\
        <div class="form-group" style="width: 10%; float: right; margin-top: -67px; margin-right: 3%;">\
        <label for="amount">Quantidade</label>\
        <input type="number" name="amount'+controle+'" class="form-control" placeholder="Qtd" onblur="calculo(this, '+controle+')">\
        </div>\
        </div>';
        
        $('.apend').append(obj);
        document.getElementById('count').value = controle;
        controle ++;
    });

    });

    
    function calculo(dom, id){
        let res = parseFloat(dom.value) * parseFloat($("input[type=number][name=unipt"+id+"]").val());
        $("input[type=number][name=valor"+id+"]")[0].value = res;
        var v = document.getElementsByClassName('tot').length;
        
        //console.log($("input[type=number][name=valor-"+index+"]")[0].value);
        var soma = 0;
        for (var i = 0; i < v; i++) {
            soma += parseFloat(($("input[type=number][name=valor"+i+"]")[0].value.length) == 0 ? 0 : $("input[type=number][name=valor"+i+"]")[0].value);
        }
        
        $("input[type=number][name=valor_final]")[0].value = soma;
    }
    
    //colocar o valor no campo unidade/pote
function valores(obj){
    console.log(obj.list.length);
}