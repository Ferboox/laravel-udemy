<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Custom</title>
</head>
<body>
    <h1>{{ $message }}</h1>

    <a href="/contacto">Contacto (Sin nombre)</a>
    
    <a href="{{ route('contacto') }}">Contacto (Con nombre)</a>

</body>
</html>