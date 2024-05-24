@extends('layouts.app')

@section('content')
    <div class="container show-container">
        <div class="row">
            <div class="col-12 d-flex flex-column justify-content-center align-items-center p-5">
                <div class="img-container"><img src="{{ $comics->thumb }}" alt=""></div>
                <h2>{{ $comics->title }}</h2>
                <div>{{ $comics->series }}</div>
                <div>{{ $comics->description }}</div>
            </div>
        </div>
    </div>
@endsection