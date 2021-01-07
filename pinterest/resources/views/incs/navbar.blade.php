<header class="header">
    <div class="container">
        <div class="header__logo">
            <i class="fab fa-pinterest"></i>
        </div>
        <nav class="header__nav">
            <ul>
                <li><a href="{{ route('home') }}">Home</a></li>
            </ul>
            <ul>
                @if (Auth::user())
                <li>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit">Logout</button>
                    </form>
                <li><a href="/profil">Dashboard</a></li>
                @else
                <li><a href="{{ route('login') }}">Login</a></li>
                @endif
            </ul>
        </nav>
    </div>
</header>