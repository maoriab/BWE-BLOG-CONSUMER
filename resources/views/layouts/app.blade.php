<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Blog</title>

    <style>
    @font-face {
        font-family: 'Spartan';
        src: url('http://127.0.0.1:8000/fonts/Archivo/spartan-regular.woff2') format('woff2');
        font-weight: 400;
        font-style: normal;
    }

    .font-spartan {
        font-family: 'Spartan', sans-serif;
    }
</style>

    <link rel="stylesheet" href="http://127.0.0.1:8000/api/styles/app.css">
</head>

<body>
    @yield('content')
</body>
</html>