<?php

namespace Database\Seeders;

use App\Models\CensorRating;
use Illuminate\Database\Seeder;

class CensorRatingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $censorRatings = collect([
            'SU',
            '13+',
            '17+',
            '21+',
        ]);

        $censorRatings->each(function ($censorRating) {
            CensorRating::create([
                'name' => $censorRating,
            ]);
        });
    }
}
