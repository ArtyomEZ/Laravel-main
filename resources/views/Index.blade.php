<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <title> Artyom Knife's Store</title>
    <link href="/Style.css" rel="stylesheet">

</head>
<body>
<p><div align ="center"><font size="5"> Welcome to Artyom's Knives store<a href="{{ route('knife.create')}}"> + </a></font> </div></p>
<br>
<br>
<p div align="center">Voici les couteaux : </p>
<br>

<table>

        <tr>
            <th>id</th>
            <th>name knife</th>
            <th>description</th>
            <th>see more</th>
        </tr>
    @foreach($knives as $knife)
    <tr>
            <td>{{$knife->id}}</td>


            <td>
                {{$knife->name}}
            </td>


            <td>
                {{$knife->desc}}
            </td>
        <td>
            <a href="{{ route('knife.show', ['id' => $knife->id]) }}">See more</a>
        </td>
        </tr>
    @endforeach
</table>

</body>


</html>
