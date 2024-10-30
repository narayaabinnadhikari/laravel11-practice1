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
        <li>Future Ninjas Below: </li>
        <li>
            <a href="/ninjas/{{$ninjas[0]["id"]}} ">{{$ninjas[0]["name"]}} </a>
        </li>
        <li>
            <a href="/ninjas/{{$ninjas[1]["id"]}} ">{{$ninjas[1]["name"]}} </a>
        </li>
    </ul>
</body>
</html>