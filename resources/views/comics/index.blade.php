@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row row-cols-4 row-gap-5 p-4">
            @foreach ($comics as $comic)
                <div class="col" style="hight: 60%;">
                    <div class="card" style="width: 18rem;">
                        <img src="https://m.media-amazon.com/images/I/71aCHLA1geL._AC_UF1000,1000_QL80_.jpg" class="card-img-top" alt="...">
                        <div class="card-body d-flex flex-column justify-content-between">
                            <div class="card-title m-0" ><h5 class="m-0" >{{ $comic->title }}</h5></div>
                            <div class="card-text">{{ $comic->series }}</div>
                            <div class="d-flex justify-content-between mb-3" >
                                <small>{{ $comic->type }}</small>
                                <small>{{ $comic->price }}</small>
                            </div>
                            <a href="#" class="m-auto btn btn-primary">maggiori informazioni</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection