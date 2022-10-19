<!doctype html>
<html lang="ja">
<head>
    @include('layouts.head')
</head>
<body>
    @include('layouts.header')
    <div class="main-wrapper">
        @include('layouts.sidebar')
        @yield('content')
    </div>
    @include('layouts.footer')
</body>
</html>

