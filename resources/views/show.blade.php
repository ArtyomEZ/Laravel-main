
<?php
?>
<html>
<link rel="stylesheet" href="/Style2.css">

<h1 align="center">Affichage des informations du couteau N°{{$knivesid->id}} :</h1>
<br>
<p>Nom du couteau : {{$knivesid->name}}</p>

<br>
<p>Prix du couteau : {{$knivesid->price}}</p>
<br>
<p>Date de sortie du couteau : {{$knivesid->birth_date}}</p>

<img src="{{$knivesid->image}}" alt="Image du couteau {{$knivesid->name}} "style="width: 150px; height: auto;"><br><br>

<form action="{{ route('knife.index') }}">
    <button >Retour à la page</button>
</form>
</html>
