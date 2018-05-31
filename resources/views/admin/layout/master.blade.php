<!DOCTYPE html>
<html>

@include('admin.layout.head')

<body class="app">

<div id="loader">
    <div class="spinner"></div>
</div>
<script>window.addEventListener('load', () => {
        const loader = document.getElementById('loader');
        setTimeout(() => {
            loader.classList.add('fadeOut');
        }, 300);
    });</script>

@include('admin.layout.sidebar')

@yield('content')

</body>

@include('admin.layout.footer')

</html>