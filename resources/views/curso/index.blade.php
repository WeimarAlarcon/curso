<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border = "1">
        <tr>
            <th>
                Nombre
            </th>
            <th>
                Duracion
            </th>
            <th>
                Tipo de Curso
            </th>
            <th>
                Estado
            </th>
            <th>
                Operaciones
            </th>
        </tr>
        @foreach($cursos as $curso)
        <tr>
            <td>{{$curso->nombre}}</td>
            <td>{{$curso->duracion}}</td>
            <td>{{$curso->tipocurso}}</td>
            <td>{{$curso->estado}}</td>
            <td><a href="{{route('curso.edit',$curso->id)}}">Editar</a>
                <form action="{{route('curso.destroy',$curso->id)}}" method="POST">
                    {{ csrf_field() }}
                    @method('DELETE')
                    <input type="submit" value="eliminar">
                </form>
            </td>

        </tr>
        @endforeach
    </table>
    <a href="{{route('curso.create')}}">Crear</a>
</body>
</html>