<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title', config('app.name', 'techtec'))</title>
    <meta
        content="株式会社techtecのコーポレートサイトです。プロダクトやサービス、採用情報、チームメンバーなどを紹介します。「個人の成長をサポートし、誰もが自由に生きていける世界を作る。」をミッションに、より良い社会の実現を目指します。"
        name="description">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- Fabicon -->
    <link rel="icon" type="image/x-icon" href="{{ asset('images/favicon.ico') }}">
</head>
<body>
    <div id="app">
        @include('layouts.header')

        @yield('content')

        @include('layouts.footer')
    </div>
</body>

</html>
