<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Locandine Film</title>
    <link rel="stylesheet" href="{{ mix('/css/app.css') }}">
</head>
<body>
    <h1>Locandine Film:</h1>
    @foreach($allMovies as $movie)
        <div class="locandine">
            <div class="locandine-inner">
                <img src="{{ $movie->cover }}" alt="Locandina Film: {{ $movie->title }}">
                <h3><span>TITOLO:</span>{{ $movie->title }}</h3>
                <p><span>TRAMA:</span>{{ $movie->plot}}</p>
                <h5><span>PREZZO:</span>{{ $movie->price}} Euro.</h5>
            </div>
        </div>
    @endforeach
</body>
</html>