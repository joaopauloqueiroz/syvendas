$(document).ready(function(){
  
  $('.percent').blur(function(){
  	let valor = parseInt($('.preco')[0].value) + parseInt(($('.percent')[0].value / 100))
    $('.venda')[0].value = valor.toFixed(2);
    $('.venda_hide')[0].value = valor.toFixed(2);
  });
});