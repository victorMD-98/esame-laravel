<?php

// print_r($progetti);
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
    <div class="container p-0" >
        <h1 class="text-center" >Progetti</h1>
        <div class="my-1 row">
            <div class="col pe-3">
            <a class="btn btn-secondary w-25 float-end" href="#" role="button">ADD</a>
            </div>
        </div>
        <div>
            @if(count($progetti)>0)
                <ul class="list-group">
                    @foreach ($progetti as $key => $progetto)
                        <li class="list-group-item"> <b>{{$key+1}}:</b>    {{$progetto->title}}
                            <span class="float-end" >
                                <a class="btn btn-warning" href="progetti/{{$progetto->id}}" role="button">Info</a>
                            </span>
                        </li>
                    @endforeach
                </ul>
                @else
                <p>non ci sono progetti</p>
            @endif
        </div>
    </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>