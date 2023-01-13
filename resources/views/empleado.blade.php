<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('css/estilo.css')}}">
</head>

<body>
    <h1>vista empleados</h1>
    <br>
    <p>Nombre del empleado {{$nombre}} trabajo {{$dias}} dias y se le pago {{$nomina}}</p>
    <br>
    @if ($nombre == 'irwin')
        <h2>Hola {{$nombre}}</h2>
        <img src="{{asset('photos/prueba.png')}}" alt="" width="500">
       
    
    @elseif ($nombre=='jose')
        <h2>Hola {{$nombre}}</h2>
        <img src="{{asset('photos/prueba1.png')}}" alt="" >
    @else
        <h2>Sin foto</h2>
    @endif
    <br>
    <a href="{{route('salir')}}">Cerrar</a>
</body>

</html>