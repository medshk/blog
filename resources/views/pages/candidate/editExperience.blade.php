

<!DOCTYPE html>
<html>
<style>
input[type=text], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=submit] {
  width: 100%;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

div {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
</style>
<body>

<h3>Editer Formation</h3>

<div>
<form action="{{url('resumeExp/'.$experience->id)}}" method="POST">
<input type="hidden" name="_method" value="PUT">
          {{csrf_field()}}


          <label for="fname">Intitume</label>
                    <input placeholder="Tooms.." type="text" name="intitule" value="{{$experience->intitule}}">
                    <label for="fname">Description</label>
                    <input placeholder="Tooms.." type="text" name="description" value="{{$experience->description}}">
               
                    <label for="fname">Date de debut</label>						
						   <input type="date" name="date_de_debut" value="{{$experience->date_de_debut}}">
												
                           <label for="fname">Date de fin</label>						
						   <input type="date" name="date_de_fin" value="{{$experience->date_de_fin}}">
												


    
    
                           <input type="submit" value="Modifier">
  </form>
</div>

</body>
</html>


