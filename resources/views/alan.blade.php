<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <h1>Hello {{ $name }} You are {{ $age }}</h1>
    @foreach ($userss as $me)
        <p>This is user {{ $me}}</p>
    @endforeach
</body>

</html>
