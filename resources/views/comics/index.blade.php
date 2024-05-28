@extends('layouts.app')

@section('content')
    <section>
        <div>
            @if (session()->has('message'))
                <div class="alert alert-success">
                    {{ session('message') }}
                </div>
            @endif
        </div>
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
                                <div>
                                    <form action="{{ route('comics.destroy', ['comic' => $comic->id])  }}" method="POST">
                                        @csrf
                                        @method('DELETE')
    
                                        <button class="btn btn-danger js-delete-item-btn"  data-comic-title="{{ $comic->title }}"  type="submit" >Elimina</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

        {{-- modale --}}
        <div class="modal fade" id="deleteConfirmModal" tabindex="-1" aria-labelledby="deleteConfirmModal" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h1 class="modal-title fs-5" id="deleteConfirmModalLabel">Modal title</h1>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Chiudi</button>
                  <button type="button" id="modal-confirm-delete" class="btn btn-danger">Cancella definitivamente</button>
                </div>
              </div>
            </div>
          </div>
        {{-- /modale --}}
    </section>
@endsection