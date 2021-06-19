<?php

namespace Database\Seeders;

use App\Models\Genre;
use Illuminate\Database\Seeder;

class GenreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $genres = collect([
            'Action',
            'Comedy',
            'Drama',
            'Fantasy',
            'Horror',
            'Mystery',
            'Romance',
            'Thriller',
            'Western',
        ]);

        $genres->each(function ($genre) {
            Genre::create([
                'name' => $genre
            ]);
        });
    }
}
