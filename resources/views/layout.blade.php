<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <link rel="stylesheet" href="/style.css">
    <title>
        @yield ('Title')
    </title>
</head>
<body>
    <header><h1>LE SITE LE PLUS [DONNEE SUPPRIMEE] DE TOUS LES TEMPS</h1></header>

    <main>
        @yield('Content') {{// c'est sympatique, je l'ai appellé Content :) }}
    </main>

    <footer>Copyright Me (TM)</footer>
</body>
</html>
