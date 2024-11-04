<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ninja Network</title>
</head>
<body>
    <header>
        <nav>
            <h1>Ninja Network</h1>
            <a href="/ninjas">All Ninjas</a>
            <a href="/ninjas/create">Create A New Ninja</a>
        </nav>
    </header>
    <main class="container">
        {{ $slot }}
    </main>
</body>
</html>