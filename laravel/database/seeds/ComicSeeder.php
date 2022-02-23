<?php

use Faker\Generator as Faker;
use App\Comic;
use Illuminate\Database\Seeder;

class ComicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 100; $i++) {
            $newComic = new Comic();
            $newComic->name = $faker->word();
            $newComic->code = $faker->ean8();
            $newComic->editor = $faker->company();
            $newComic->writer = $faker->name($gender = null);
            $newComic->description = $faker->sentence();
            $newComic->price = $faker->randomFloat(1, 5, 30);
            $newComic->photo = 'https://www.editorialecosmo.it/wp-content/uploads/2019/12/Showcase-Presenta-3-Superman-1-Copertina.jpg';
            $newComic->page = $faker->numberBetween(50, 400);
            $newComic->adult = $faker->numberBetween(0, 1);

            $newComic->save();
        }
    }
}
