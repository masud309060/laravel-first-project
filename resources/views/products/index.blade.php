<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Index</title>
</head>
<body>
<div>
    <h1>Products</h1>

    @foreach($data as $item)
        <p>{{ $item }}</p>
    @endforeach
    <p>{{ $description ?? ""}}</p>
</div>
</body>
</html>
