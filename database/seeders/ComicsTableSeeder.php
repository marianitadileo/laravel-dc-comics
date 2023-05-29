<?php

namespace Database\Seeders;

use App\Models\Comics;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ComicsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $comics_db = config('comics');
        foreach ($comics_db as $comics_item) {
            $newComics= new Comics();
            $newComics->title = $comics_item["title"];
            $newComics->description = $comics_item["description"];
            $newComics->thumb = $comics_item["thumb"];
            $newComics->price = $comics_item["price"];
            $newComics->series = $comics_item["series"];
            $newComics->sale_date = $comics_item["sale_date"];
            $newComics->type = $comics_item["type"];
            $newComics->save();
        }
    }
}
