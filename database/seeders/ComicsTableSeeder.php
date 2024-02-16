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
        $comics = config('comics');

        foreach ($comics as $comic) {
            $new_comics = new Comic();
            $new_comics->title = $comic['title'];
            $new_comics->description = $comic['description'];
            $new_comics->thumb = $comic['thumb'];
            $new_comics->price = $comic['price'];
            $new_comics->series = $comic['series'];
            $new_comics->sale_date = $comic['sale_date'];
            $new_comics->type = $comic['type'];
            $new_comics->artists = implode(', ', $comic['artists']);
            $new_comics->writers = implode(', ', $comic['writers']);
            $new_comics->save();
        }
    }
}
