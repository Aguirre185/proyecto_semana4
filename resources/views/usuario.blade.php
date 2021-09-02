<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<table>
        <tr>
            <td>CODIGO</td>
            <td>apellido</td>
            <td>user</td>
            <td>pasword</td>
            
        </tr>
        @foreach($dato as $value)
        <tr>
            <td>{{$value->idusuario}}</td>
            <td>{{$value->apellido_nombre}}</td>
            <td>{{$value->user}}</td>
            <td>{{$value->pasword}</td>
            
        </tr>
        @endforeach
    </table>
</body>
</html>