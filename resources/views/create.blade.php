<!DOCTYPE html>
<html>
<head>
    <title>Page création d'un couteau </title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="/Style3.css" rel="stylesheet">

</head>
<body>
<form action="{{ route('knife.createe')}}" method="POST" enctype="multipart/form-data">
    @csrf

    Nom du couteau :<input value='{{old('name')}}' type="text" name="name">
    @error('name') <p class="text-sm text-red-500">{{ $message }}</p> @enderror

    <br><br>
    Description du couteau : <input value='{{old('desc')}} ' type="text" name="desc">
    @error('desc') <p class="text-sm text-red-500">{{ $message }}</p> @enderror

    <br><br>
    Date de sortie : <input value='{{old('date')}} ' type="date" name="date">
    @error('date') <p class="text-sm text-red-500">{{ $message }}</p> @enderror

    <br><br>
    Prix du couteau : <input value='{{old('price')}} ' type="number" name="price">
    @error('price') <p class="text-sm text-red-500">{{ $message }}</p> @enderror

    <br><br>
    Image du couteau(lien de l'image) : <input value='{{old('image')}} ' type="text" name="image">
    @error('image') <p class="text-sm text-red-500">{{ $message }}</p> @enderror

    <br><br>
    <button type="submit">Créer</button>
</form>
</body>
</html>
