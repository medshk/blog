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

<form action="{{url('resume/'.$formation->id)}}" method="POST">
<input type="hidden" name="_method" value="PUT">
          {{csrf_field()}}

    <label for="fname">Diplome</label>
    <input type="text" name="diplome" value="{{$formation->diplome}}" placeholder="Your name..">

    <label for="lname">Domaine</label>
    <input placeholder="Tooms.." type="text" name="domaine" value="{{$formation->domaine}}">
    <label for="lname">Date de debut</label>
    <input type="date" name="date_de_debut" value="{{$formation->date_de_debut}}">
    <label for="lname">Date de Fin</label>
    <input type="date" name="date_de_fin" value="{{$formation->date_de_fin}}">
    <label for="lname">Lieu</label>
    <input type="text" name="lieu" value="{{$formation->lieu}}">
  
    <input type="submit" value="Modifier">
  </form>
</div>

</body>
</html>


