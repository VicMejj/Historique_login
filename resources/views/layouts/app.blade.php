<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="/css/app.css">
</head>
<body>
    <div class="container">
        <h1 class="main-title">@yield('title')</h1>
        @if(session('success'))
            <div class="alert success">{{ session('success') }}</div>
        @endif
        @yield('content')
    </div>
</body>
</html>