@include('layouts.head')
<header>

    <div class="logo">
        <img src="{{ asset('img/logo.png') }}" alt="">
    </div>

    <nav class="link">
        <a href="/">Home</a>
        <a href="prodotti">Prodotti</a>
        <a href="contatti">Contatti</a>
    </nav>

</header>

    @yield('main')

</body>

</html>