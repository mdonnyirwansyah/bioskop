<?php

namespace Database\Seeders;

use App\Models\Theater;
use Illuminate\Database\Seeder;

class TheaterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $theaters = collect([
            'Theater 1',
            'Theater 2',
        ]);

        $theaters->each(function ($theater) {
            Theater::create([
                'name' => $theater,
            ]);
        });
    }
}
