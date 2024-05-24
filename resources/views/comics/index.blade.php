@extends('layouts.app')

@section('content')
    <section>
        <div class="container index-conteiner">
            <div class="row row-cols-4 row-gap-5 p-4">
                @foreach ($comics as $comic)
                    <div class="col" style="hight: 60%;">
                        <div class="card" style="width: 18rem;">
                            <img src="{{ $comic->thumb }}" class="card-img-top" alt="...">
                            <div class="card-body d-flex flex-column justify-content-between">
                                <div class="card-title m-0" ><h5 class="m-0" >{{ $comic->title }}</h5></div>
                                <div class="card-text">{{ $comic->series }}</div>
                                <div class="d-flex justify-content-between mb-3" >
                                    <small>{{ $comic->type }}</small>
                                    <small>{{ $comic->price }}</small>
                                </div>
                                <div class="pb-3">
                                    <a href="{{ route('comics.show', ['comic' => $comic->id]) }}" class="m-auto btn btn-primary">Maggiori informazioni</a>
                                </div>
                                <div class="pb-3">
                                    <a href="{{ route('comics.edit', ['comic' => $comic->id]) }}" class="m-auto btn btn-primary">Modifica prodotto</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection