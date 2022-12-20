<?php
$linksComics = config('db_comics.linksComics');
$linksShop = config('db_comics.linksShop');
$linksDc = config('db_comics.linksDc');
$linksSites = config('db_comics.linksSites');
$socials = config('db_comics.socials');

?>


<section class="links-footer">
    <div class="container links-wrap">
        <div class="links">
            <div class="link">
                <span class="title">dc comics</span>
                <ul>
                    @foreach ($linksComics as $link)
                        <li><a href="{{ $link['url'] }}">{{ $link['text'] }}</a></li>
                    @endforeach
                </ul>
                <span class="title">shop</span>
                <ul>
                    @foreach ($linksShop as $link)
                        <li><a href="{{ $link['url'] }}">{{ $link['text'] }}</a></li>
                    @endforeach
                </ul>
            </div>
            <div class="link">
                <span class="title">dc</span>
                <ul>
                    @foreach ($linksDc as $link)
                        <li><a href="{{ $link['url'] }}">{{ $link['text'] }}</a></li>
                    @endforeach
                </ul>
            </div>
            <div class="link">
                <span class="title">sites</span>
                <ul>
                    @foreach ($linksSites as $link)
                        <li><a href="{{ $link['url'] }}">{{ $link['text'] }}</a></li>
                    @endforeach
                </ul>
            </div>
        </div>
        <div class="img-box"><img src="{{ Vite::asset('/resources/img/dc-logo-bg.png') }}" alt=""></div>
    </div>
</section>

<section class="contacts-wrap">
    <div class="container contacts">
        <button>sign-up now</button>
        <div class="social">
            <span>follow us</span>
            <ul>
                @foreach ($socials as $item)
                    <li>
                        <a href="{{ $item['url'] }}" class="">
                            <img src="{{ Vite::asset("/resources/img/$item[imageName]") }}" alt="{{ $item['text'] }}">
                        </a>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
</section>
