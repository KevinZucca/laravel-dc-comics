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
        $comics = config('comics');

        foreach ($comics as $item) {
            $newSingleComic = new Comic();

            $newSingleComic->title = $item['title'];
            $newSingleComic->description = $item['description'];
            $newSingleComic->thumb = $item['thumb'];
            $newSingleComic->price = $item['price'];
            $newSingleComic->series = $item['series'];
            $newSingleComic->sale_date = $item['sale_date'];
            $newSingleComic->type = $item['type'];
            $newSingleComic->artists =  implode(',', $item['artists']);
            $newSingleComic->writers = implode(',', $item['writers']);

            $newSingleComic->save();
        }
    }
}
