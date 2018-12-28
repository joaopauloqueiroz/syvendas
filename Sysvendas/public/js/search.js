$(document).ready(function(){
  $(this).keyup(function(e){
    e.preventDefault();
    $.ajax({
        url: "/products/find/",
        dataType: "json",
        type: "POST",
        data: {
          search: $('#prod').val()
        },
        headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        success: function(result){
          var items = '';
          for(let i in result){
            items += '<option value="'+result[i]['name']+'" data-value="'+result[i]['price_vend']+'"">'+ result[i]['code']+'</oprion>';
            }
          $('#listaProd').html(items);
        }

    });
   
  });
});