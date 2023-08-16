<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuario</title>
</head>
<body>
    <div style="background: #f1f1f1; width: 45%; height: 150px">
        <h1>USUARIO</h1>
        @foreach ($usuario as $n)
            <p><b>NOMBRE:</b> {{ $n['nombre'] }}</p>
            <p><b>EDAD:</b> {{ $n['edad'] }} @if ($n['edad'] >= 18) Mayor de edad @else Menor de edad @endif</p>
            <p><b>------------------</b></p>
        @endforeach
    </div>
</body>
</html>
