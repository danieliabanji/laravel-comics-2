@extends('layouts.app')
@section('page-title', 'Comic Form')

@section('content')

    <section class="bg-white">
        <div class="container mt-4">
            <h1 class="text-center">Inserisci nuovo comic</h1>
            <div class="row">
                <div class="col-12">
                    <form action="{{ route('comics.store') }}" method="POST" class="p-4">
                        @csrf
                        <div class="mb-3">
                            <label for="title" class="form-label">Title</label>
                            <input type="text" class="form-control" id="title" name="title" required>
                        </div>
                        <div class="mb-3">
                            <label for="description" class="form-label">Description</label>
                            <textarea class="form-control" id="description" name="description"></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="thumb" class="form-label">Url Immage</label>
                            <input type="text" class="form-control" id="thumb" name="thumb" required>
                        </div>
                        <div class="mb-3">
                            <label for="type" class="form-label">type</label>
                            <select name="type" id="type" required>
                                <option value="comic book">Comic Book</option>
                                <option value="graphic novel">Graphic Novel</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="price" class="form-label">Price</label>
                            <input type="text" class="form-control" id="price" name="price" required>
                        </div>
                        <div class="mb-3">
                            <label for="sale_date" class="form-label">Sale Date</label>
                            <input type="text" class="form-control" id="sale_date" name="sale_date"
                                aria-describedby="cookingHelp" required>
                            <div id="cookingHelp" class="form-text">inserire nel formato americano y/m/d</div>
                        </div>
                        <div class="mb-3">
                            <label for="series" class="form-label">Series</label>
                            <input type="text" class="form-control" id="series" name="series" required>
                        </div>
                        <div class="mb-3">
                            <label for="writers" class="form-label">Writers</label>
                            <input type="text" class="form-control" id="writers" name="writers" required>
                        </div>
                        <div class="mb-3">
                            <label for="artists" class="form-label">Artists</label>
                            <input type="text" class="form-control" id="artists" name="artists" required>
                        </div>
                        <button type="submit" class="btn btn-success">Submit</button>
                        <button type="reset" class="btn btn-primary">Reset</button>
                    </form>
                </div>
            </div>
        </div>

    </section>
@endsection
