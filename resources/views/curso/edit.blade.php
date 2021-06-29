<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="{{route('curso.update',$curso->id)}}" method="POST">
        {{ csrf_field() }}
        @method('PUT')
        <label for="nombre">Nombre</label>
        <input type="text" name="nombre" value="{{$curso->nombre}}"> <br>
        <label for="duracion">Duracion</label>
        <input type="text" name="duracion" value="{{$curso->duracion}}"> <br>
        <label for="tipocurso">Tipo Curso</label>
        <input type="radio" name="tipocurso"  {{$curso->tipocurso=='Presencial'?'checked':''}} value="Presencial">Presencial
        <input type="radio" name="tipocurso"  {{$curso->tipocurso=='Virtual'?'checked':''}} value="Virtual">Virtual  
        <br>
        <label for="estado">Estado</label>
        <input type="radio" name="estado"  {{$curso->estado=='V'?'checked':''}} value="V">V
        <input type="radio" name="estado"  {{$curso->estado=='E'?'checked':''}} value="E">E  
        <br>
        <input type="submit" value="Actualizar">
    </form>
</body>
</html>