<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset ('css/app.css')}}">
    <title>@yield('title') | prova</title>
</head>
<body>
     {{-- includo dalla cartella partials il file header che sarà uguale in ogni pagina web --}}
    @include('partials.header')

    <main>
        {{-- aggiungo un segnaposto in cui vado ad inserire il codice per ogni pagina. --}}
        @yield('content')
    </main>
    
</body>
</html>