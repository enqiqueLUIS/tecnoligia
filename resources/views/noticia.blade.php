<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div style="background: #f1f1f1; windth: 45%; height:150px">
        <h1>NOTICIA</h1>
        @foreach ($noticias as $n)
            <p><b>ID:</b> {{ $n['id'] }}</p>
            <p><b>TITULO:<b> {{ $n['titulo'] }}</p>
            <p><b>DESCRIPCION:<b> {{ $n ['descripcion'] }}</p>
            <p><b>------------------</b></p>
            @endforeach

    </div>
</body>
</html>