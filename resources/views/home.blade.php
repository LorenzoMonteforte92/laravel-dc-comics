@extends('layouts.app')

@section('content')
    
@endsection

{{-- 
    1. creare nuovo database
    2. modificare file .env con nome database e password
    3. creare una migration create_comics_table che genererà le colonne della tabella coi rispettivi tipi di dato
    4. nel seeder collegare il model e popolare la tabella con un ciclo foreach partendo dai dati del file inserito in config
    5. nel file controller dico cosa fare ad ogni funzione precompilata, 
        index = prende tutti i dati dal db
        create = genera form per inserire nuovo elemento nel db
        show = mostra singolo prodotto per $id

    
    
    
    
    --}}