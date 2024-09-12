<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <link rel="stylesheet" href="style.css">
        <title>Plus</title>
    </head>
    <body>
        <h1>PLUS</h1>
        {{$num1}} plus {{$num2}} = {{$num1+$num2}}
    </body>
</html>
