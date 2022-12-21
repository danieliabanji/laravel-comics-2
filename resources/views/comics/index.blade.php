<?php

$linksImage = config('db_comics.linksImage');
?>


@extends('layouts.app')


@section('content')
    <main>
        <div class="inner-main">
            <div class="container text-center">
                <div class="cards">
                    @foreach ($comics as $key => $comic)
                        <div class="my-card">
                            <div>
                                <div>
                                    <a href="{{ route('comics.show', $comic->id) }}">
                                        <div class="img-box"><img src="{{ $comic['thumb'] }}" alt=""></div>
                                    </a>
                                    <span class="title">{{ $comic['series'] }}</span>
                                    <br>
                                    <span class="title">{{ $comic['price'] }}</span>
                                    <br>

                                </div>

                            </div>
                        </div>
                    @endforeach

                </div>
                <a href="{{ route('comics.create') }}"><button class="btn btn-primary text-uppercase mt-5">Add
                        Comics</button></a>
            </div>
        </div>
    </main>
    <section class="icons-wrap">
        <div class="icons">
            @foreach ($linksImage as $link)
                <div class="icon">
                    <img src="{{ Vite::asset('resources/img/' . $link['url']) }}" class="img-icon">
                    <a href="#">{{ $link['text'] }}</a>
                </div>
            @endforeach
        </div>
    </section>
@endsection
