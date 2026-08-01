<!DOCTYPE html>
<html lang="ar" dir="rtl">
<!-- <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('page_title', 'لوحة إدارة الموظفين')</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head> -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('page_title', 'لوحة إدارة الموظفين')</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<!-- --------------------------------------------- -->
<body>
<div class="app-shell">
    @include('layouts.partials.sidebar')

    <div class="main-panel">
        @include('layouts.partials.navbar')

        <main class="content">
            <div class="page-header">
                <div>
                    <p class="eyebrow">نظام إدارة موظفين</p>
                    <h1>@yield('page_title', 'لوحة التحكم')</h1>
                </div>
                <div class="page-actions">
                    @yield('page_actions')
                </div>
            </div>

            @yield('content')
        </main>

        <footer class="footer">
            © {{ date('Y') }} نظام إدارة الموظفين · واجهة Frontend جاهزة للربط بالـ Backend
        </footer>
    </div>
</div>

<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
