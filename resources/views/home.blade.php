<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
</head>
<body>

    <h1>Hello World!</h1>
    <h2> {{$sottotitolo}} </h2>

    <ul> {{$menu}}
        @foreach($opzioni as $opzione)
        <li> 
            {{$opzione}}
        </li>
        @endforeach
    </ul>
    
    <a href="/login">Login</a>
    
</body>
</html>