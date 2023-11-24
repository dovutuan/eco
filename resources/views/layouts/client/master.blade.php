<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {!! SEOMeta::generate() !!}
    {!! OpenGraph::generate() !!}
    {!! Twitter::generate() !!}
    {!! JsonLd::generate() !!}

    {!! SEO::generate() !!}

    @vite('resources/css/app.scss')
</head>
<body id="app">
@include('layouts.client.header')

@yield('content')

<search></search>
<cart></cart>

@include('layouts.client.footer')
</body>

@vite('resources/js/app.js')

</html>