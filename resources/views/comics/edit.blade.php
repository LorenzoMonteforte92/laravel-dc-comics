@extends('layouts.app')

@section('content')
<section>
    @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    <div class="container">
        <h1>Modifica prodotto: {{ $comics->title }}</h1>

        <form action="{{ route('comics.update', ['comic' => $comics->id]) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
              <label for="title" class="form-label">Title</label>
              <input type="text" class="form-control" id="title" name="title" value="{{ old('title', $comics->title) }}" >
            </div>

            <div class="mb-3">
                <label for="series" class="form-label">Series</label>
                <input type="text" class="form-control" id="series" name="series" value="{{ old('series', $comics->series)}}" >
            </div>


            <div class="mb-3">
                <label for="thumb" class="form-label">Image</label>
                <input type="text" class="form-control" id="thumb" name="thumb" value="{{ old('thumb', $comics->thumb)}}" >
            </div>

            <div class="mb-3">
                <label for="type" class="form-label">Type</label>
                <select class="form-select" id="type" name="type">
                    <option @selected(old('type', $comics->type) === 'comic book') value="comic book">Comic Book</option>
                    <option @selected(old('type', $comics->type) === 'graphic novel') value="graphic novel">Graphic Novel</option>
                  </select>
            </div>

            <div class="mb-3">
                <label for="price" class="form-label">Price</label>
                <input type="text" class="form-control" id="price" name="price" value="{{ old('price', $comics->price)}}" >
            </div>

            <div class="mb-3">
                <label for="sale_date" class="form-label">Sale Date</label>
                <input type="text" class="form-control" id="sale_date" name="sale_date" value="{{ old('sale_date', $comics->sale_date) }}" >
            </div>


            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea class="form-control" id="description" rows="5" name="description">{{ old('description', $comics->description )}}</textarea>
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</section>
@endsection