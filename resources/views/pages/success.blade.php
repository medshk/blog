<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.css')}}" />
    <title>Success</title>
</head>
<body>
    <div  >
    <div class="alert alert-success " role="alert" >
    you are  successfully registrated you will be automaticaly redirected to  <h1 class="alert-link">Home page</h1> 
      </div>
      
    </div>

 
      <?php header("refresh:3;url=guest");?>
    
</body>
</html