@extends('layouts.app')
@section('content')
    <section class="bg-white">
        <div class="container" style="height: 250px">
            <div class="text-center pt-5">
                <h1>Benvenuto in DC Comics</h1>
                <ul class="list-group list-group-flush ">
                    <a href="{{ route('comics.index') }}">
                        <li class="list-group-item">Vedi i comics</li>
                    </a>
                    <a href="{{ route('comics.create') }}">
                        <li class="list-group-item">Aggiungi un comics</li>
                    </a>
                </ul>
            </div>
        </div>
    </section>
@endsection
