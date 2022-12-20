<?php
$links = config('db_comics.navbar');
?>

<header class="container">

    <a href="{{ route('home') }}"><img src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="logo"></a>
    <nav>

        <ul>
            @foreach ($links as $link)
                <li>
                    <a href="{{ $link['url'] == 'comics' ? '/' : $link['url'] }}">{{ $link['text'] }}</a>
                </li>
            @endforeach
        </ul>
    </nav>
</header>
