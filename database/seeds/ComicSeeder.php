<?php

use Illuminate\Database\Seeder;
use App\Comic;

class ComicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $comicList = config('comics');

        foreach ($comicList as $comics) {

            $newComic = new Comic();
            $newComic->title = $comics['title'];
            $newComic->description = $comics['description'];
            $newComic->thumb = $comics['thumb'];
            $newComic->price = $comics['price'];
            $newComic->series = $comics['series'];
            $newComic->sale_date = $comics['sale_date'];
            $newComic->type = $comics['type'];
            $newComic->save();

        }
    }
}
