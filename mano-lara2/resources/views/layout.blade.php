<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {{-- linkas i CSS --}}
      @vite(['resources/css/app.scss'])
    <title> @yield('title')</title>
</head>
<body>
    @yield('body') 
</body>
</html>