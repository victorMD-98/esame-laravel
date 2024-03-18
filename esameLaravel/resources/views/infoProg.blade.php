<?php
var_dump($progetto)
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="container" >
        <h1 calss="text-center" >Attività Progetto</h1>
        @if($progetto)
        <table class="table">
        <thead>
            <tr>
            <th scope="col">#</th>
            <th scope="col">Titolo</th>
            <th scope="col">Descrizione</th>
            </tr>
        </thead>
        <tbody>
            
            <tr>
            <th scope="row">{{$progetto->id}}</th>
            <td>{{$progetto->title}}</td>
            <td>{{$progetto->description}}</td>
            </tr>
           
        </tbody>
        </table>
        @endif
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>