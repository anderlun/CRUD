<!-- resources/views/layouts/app.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>Tu Proyecto Laravel</title>
</head>
<body>
    <div>
        @yield('content')
    </div>
</body>
</html>
