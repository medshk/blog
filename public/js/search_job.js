$(document).ready(function(){  
    $('#kword').keyup(function(){  
         var query = $(this).val();  
         if(query=='')
         {
          $('#kWordList').fadeOut();  
         }
         if(query != '')  
         {  
              $.ajax({  
                   url:"getKeyWord",  
                   method:"GET",  
                   data:{query:query},  
                   success:function(data)  
                   {  
                        console.log(data);
                        $('#kWordList').fadeIn();  
                        $('#kWordList').html(data);  
                   }  
              });  
         }  
    });  
    $(document).on('click', '.dropdown-item', function(){  
         $('#search_bar').prepend('<span>'+$(this).text()+'<i class="close-tag">x</i></span>');  
         $('#kWordList').fadeOut();  
    });  

    //location
    $('#loc').keyup(function(){  
     var query = $(this).val();  
     if(query=='')
     {
      $('#locList').fadeOut();  
     }
     if(query != '')  
     {  
          $.ajax({  
               url:"getLocation",  
               method:"GET",  
               data:{query:query},  
               success:function(data)  
               {  
                    console.log(data);
                    $('#locList').fadeIn();  
                    $('#locList').html(data);  
               }  
          });  
     }  
});  
$(document).on('click', '.dropdown-item', function(){  
    // document.gelElementById('search_bar').innerHTML+='<span>'+$(this).text()+'<i class="close-tag">x</i></span>';
     $('#search_bar').prepend('<span>'+$(this).text()+'<i class="close-tag">x</i></span>');  
     $('#locList').fadeOut();  
});  

});  