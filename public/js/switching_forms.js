$(document).ready(function(){
  
  $("#form2").hide();
    $("#can").click(function(){
      $("#form2").hide();
      $("#form1").show();
    });
    $("#rec").click(function(){
      $("#form1").hide();
      $("#form2").show();
    });

    $("#form_2").hide();
    $("#c").click(function(){
      $("#form_2").hide();
      $("#fr1").show();
    });
    $("#r").click(function(){
      $("#fr1").hide();
      $("#form_2").show();
    });

    
  });



