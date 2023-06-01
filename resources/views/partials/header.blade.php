<style>
    ul{
        display: flex;
        padding-left: 0;
    }
    li {
        list-style: none;
        padding-right: 10px;
    }

    a {
        text-decoration: none;
        text-decoration: underline;
        color: #A0AEC0;
    }
    a:hover {
        color: #EF3B2D;
    }
</style>

<header>
    <nav>
        <ul>
            {{-- <li><a href="/">Home</a></li>
            <li><a href="/about">About Us</a></li> --}}
            {{-- * oppure MIGLIORE --}}
            <li><a href="{{ route('home') }}">Home</a></li>
            <li><a href="{{ route('about') }}">About Us</a></li>
        </ul>
    </nav>
</header>
