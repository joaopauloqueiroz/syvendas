$(document).ready(function(){
  
  $('.percent').blur(function(){
    $('.venda')[0].value = parseInt($('.preco')[0].value) + parseInt($('.percent')[0].value / 100);
  });
});