@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 text-center p-5">
                <div><img src="{{ $comics->thumb }}" alt=""></div>
                <h2>{{ $comics->title }}</h2>
                <div>{{ $comics->series }}</div>
                <div>{{ $comics->description }}</div>
            </div>
        </div>
    </div>
@endsection