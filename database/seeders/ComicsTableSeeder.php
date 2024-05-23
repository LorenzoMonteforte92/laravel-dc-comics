<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Comic;

class ComicsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //salvo i dati del file comics.php in una variabile
        $comicArray = config('comics');
        
        //con ciclo foreach per ogni elemento dell'array creo una riga della tabella
        foreach($comicArray as $singleComic){

            $newComic = new Comic();
            $newComic->title = $singleComic['title'];
            $newComic->series = $singleComic['series'];
            $newComic->description = $singleComic['description'];
            $newComic->thumb = $singleComic['thumb'];
            $newComic->type = $singleComic['type'];
            $newComic->price = $singleComic['price'];
            $newComic->sale_date = $singleComic['sale_date'];
            $newComic->save();
        }
    }
}
