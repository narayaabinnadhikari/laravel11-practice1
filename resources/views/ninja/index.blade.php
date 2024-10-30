<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ninja Network</title>
</head>
<body>
    <h2> Currently available NINJAS:</h2>
    <h3>{{ $greeting }} </h3>
    <ul>
        <h4>Ninjas Below: </h4>
        @foreach ($ninjas as $ninja)
            <li>
                <p>{{ $ninja["name"] }} 
                <a href="/ninjas/{{$ninja["id"]}} ">View Details</a>  </p> 
            </li>
        @endforeach
        
    </ul>
</body>
</html>