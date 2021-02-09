<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Cars</title>
    </head>
    <body>
        <h1>Macchine</h1>

        @foreach ($cars as $car)
            <p>Marca: {{ $car->Marca }}</p>
            <p>Nome: {{ $car->Nome }}</p>
            <p>Targa: {{ $car->Targa }}</p>
            <hr>
        @endforeach
    </body>
</html>