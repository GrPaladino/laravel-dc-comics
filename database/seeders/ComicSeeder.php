<?php

namespace Database\Seeders;

use App\Models\Comic;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ComicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $comics_data = config('comics');



        foreach ($comics_data as $comic_data) {

            $comic = new Comic;

            $comic->title = $comic_data["title"];
            $comic->description = $comic_data['description'];
            $comic->thumb = $comic_data['thumb'];

            $priseString = substr($comic_data['price'], 1, 5);
            $priceInt = floatval($priseString);
            $comic->price = $priceInt;

            $comic->series = $comic_data['series'];
            $comic->sale_date = $comic_data['sale_date'];
            $comic->type = $comic_data['type'];
            $comic->save();


        }



    }
}
