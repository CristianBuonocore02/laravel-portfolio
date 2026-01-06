<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Progetti')</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" rel="stylesheet">
</head>

<body class="d-flex flex-column min-vh-100 ">

    <main class="flex-grow-1">
        @yield('content')
    </main>

</body>

</html>
