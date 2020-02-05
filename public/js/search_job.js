$(document).ready(function(){  
    $('#kword').keyup(function(){  
         var query = $(this).val();  
         if(query != '')  
         {  
              $.ajax({  
                   url:"{{ route('getKeyWord') }}",  
                   method:"GET",  
                   data:{query:query},  
                   success:function(data)  
                   {  
                        $('#kWordList').fadeIn();  
                        $('#kWordList').html(data);  
                   }  
              });  
         }  
    });  
    $(document).on('click', 'li', function(){  
         $('#country').val($(this).text());  
         $('#countryList').fadeOut();  
    });  
});  