<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="{{route('curso.store')}}" method = "POST">
        {{ csrf_field() }} 
        <label for="nombre">Nombre</label>
        <input type="text" name = "nombre" id = ""><br>
        <label for="duracion">Duracion</label>
        <input type="text" name = "duracion" id = ""><br>
        <label for="tipocurso">Tipo Curso</label>
        <input type="radio" name = "tipocurso" checked value = "Pesencial">Presencial
        <input type="radio" name = "tipocurso" checked value = "Virtual">Virtual<br>
        <label for="estado">Estado</label>
        <input type="radio" name = "estado" checked value = "V">V
        <input type="radio" name = "estado" checked value = "E">E<br>

        <input type="submit" value="Registrar">
    </form>
</body>
</html>