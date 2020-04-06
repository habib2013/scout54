$(document).ready(function(){

   $('#country_name').keyup(function(){ 
          var query = $(this).val();
          if(query != '')
          {
           var _token = $('input[name="_token"]').val();
           $.ajax({
            url:"{{ route('autocomplete.fetch') }}",
            method:"POST",
            data:{query:query, _token:_token},
            success:function(data){
             $('#countryList').fadeIn();  
                      $('#countryList').html(data);
            }
           });
          }
      });
  
      $(document).on('click', 'li', function(){  
          $('#country_name').val($(this).text());  
          $('#countryList').fadeOut();  
      });  
  
  });