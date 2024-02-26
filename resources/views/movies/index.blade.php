<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movies</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <h1>Movies</h1>
    
    <div class="movies">
        @foreach($movies as $movie)
            <div class="card">
                <h2>{{$movie->title}}</h2>
                <p>Year:{{$movie->date}}</p>
                <p>Vote:{{$movie->vote}}</p>                
            </div>
        @endforeach
    </div>
</body>
</html>