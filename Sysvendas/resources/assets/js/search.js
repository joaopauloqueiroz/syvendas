$(document).ready(function(){
  $(this).keyup(function(e){
    e.preventDefault();
    $.ajax({
        url: "http://127.0.0.1:8000/products/find/",
        dataType: "json",
        type: "post",
        data: {
          search: $('#prod').val()
        },
        headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        success: function(result){
          var items = '';
          for(let i in result){
            items += '<option  value="'+result[i]['name']+'">'+ result[i]['code']+'</oprion>';
            }
          $('#listaProd').html(items);
        }

    });
   
  });
});