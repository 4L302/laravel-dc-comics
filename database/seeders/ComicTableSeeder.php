<?php

namespace Database\Seeders;

use App\Models\Comic;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

/* use Faker\Generator as Faker; */

class ComicTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    /* public function run(Faker $faker)
    {
        for($i = 0; $i < 20; $i ++){
            $newComic = new Comic();
            $newComic -> Title = $faker->word();
            $newComic -> Description = $faker->paragraph();
            $newComic -> Thumb = $faker->imageUrl(360, 360, true);
            $newComic -> Price = $faker->randomNumber();
            $newComic -> Series = $faker->sentence(3);
            $newComic -> Sale_date = $faker->dateTime();
            $newComic -> Type = $faker->word();
            $newComic->save();
        }
    } */

    public function run ()
    {
        $comics = config('db.comics');
        foreach ($comics as $comic) {
            $newComic = new Comic();
            $newComic -> Title = $comic ['title'];
            $newComic -> Description = $comic ['description'];
            $newComic -> Thumb = $comic ['thumb'];
            $newComic -> Price = $comic ['price'];
            $newComic -> Series = $comic ['series'];
            $newComic -> Sale_date = $comic ['sale_date'];
            $newComic -> Type = $comic ['type'];
            $newComic->save();
        }
    }
}