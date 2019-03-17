
$(document).ready(function ($) {
    $('#erro').hide();
    $('.btn_modal').hide();
    var controle = 1;
    $('#btn-mais').click(function (e) {
        e.preventDefault();
        var obj = '<div class="form-group">\
        <label for="product">Produto</label>\
        <input type="search" onchange="valores(this);" id="'+ controle + '" data-value="" name="product' + controle + '" list="listaProd" class="form-control busc" placeholder="Produto" style="max-width: 60%;">\
        <datalist id="listaProd">\
        </datalist>\
        <div class="form-group" style="width: 10%; float: right; margin-top: -67px;">\
        <label for="valor">Total</label>\
        <input type="number" id="total'+ controle + '" readonly name="valor' + controle + '" class="form-control tot" placeholder="R$">\
        </div>\
        <div class="form-group" style="width: 10%; float: right; margin-top: -67px; margin-right: 3%;">\
        <label for="amount">Unidade/Pote</label>\
        <input type="number" id="valor_'+ controle + '" readonly name="unipt' + controle + '" class="form-control" placeholder="R$" value="R$">\
        </div>\
        <div class="form-group" style="width: 10%; float: right; margin-top: -67px; margin-right: 3%;">\
        <label for="amount">Quantidade</label>\
        <input type="number" id="qtd_'+ controle + '" name="amount' + controle + '" class="form-control" placeholder="Qtd" onblur="calculo(this, ' + controle + ')">\
        </div>\
        </div>';

        $('.apend').append(obj);
        document.getElementById('count').value = controle;
        controle++;
    });

    $('#removeItem').click(function(){
        console.log($('#removeItem'));
       if(controle==1){
        $( "#0" ).prop( "disabled", true );
        $( "#qtd_0" ).prop("disabled", true);
       }else{
        $( "#"+controle ).prop( "disabled", true );
        $( "#qtd_"+controle ).prop("disabled", true);
       }
    })
});


function calculo(dom, id) {
    var campo = document.getElementById(dom.id);
    if (dom.value < 0) {
        $('#erro').show();
        campo.focus();
    } else {
        if(quantidadeD<dom.value){
            $('.btn_modal').click();
            campo.focus();
        }
        $('#erro').hide();

        let res = parseFloat(dom.value) * parseFloat($("input[type=number][name=unipt" + id + "]").val());

        $("input[type=number][name=valor" + id + "]")[0].value = res.toFixed(2);
        var v = document.getElementsByClassName('tot').length;

        var soma = 0;
        for (var i = 0; i < v; i++) {
            soma += parseFloat(($("input[type=number][name=valor" + i + "]")[0].value.length) == 0 ? 0 : $("input[type=number][name=valor" + i + "]")[0].value);
        }

        $("input[type=number][name=valor_final]")[0].value = soma.toFixed(2);
    }
}


//colocar o valor no campo unidade/pote
var quantidadeD = 0;
function valores(obj) {
    for (var i = 0; i < obj.list.options.length; i++) {
        if (obj.list.options[i].value == obj.value) {
            let valor = obj.list.options[i].getAttribute("data-value");
            let code = obj.list.options[i].innerHTML;
            let resp = verificaEstoque(code);
            quantidadeD = resp.qtd;

            if(resp.qtd == 0){
                $('.estoque').addClass('alert alert-danger');
            }else{
            $('.estoque').addClass('alert alert-success');
            }

            $('.estoque')[0].innerHTML = 'Quantidade disponivel em estoque ' + resp.qtd + ' itens.';
            $('#valor_' + obj.id)[0].value = parseFloat(valor).toFixed(2);
            
        }
    }
}

function verificaEstoque(code) {
    var resposta = '';
    $.ajax({
        url: "/stock/amount",
        dataType: "json",
        type: "POST",
        async: false,
        data: {
            search: code,
        },
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        success: function (result) {
            resposta = result;
        }
    });

    return resposta;
}
