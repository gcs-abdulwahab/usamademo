<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
</head>
<body>
@yield('content')
<script type="module" src="http://localhost:3000/@vite/client"></script>
<script type="module" src="{{ mix('/js/app.js') }}"></script>
</body>
</html>
