<?php

namespace Database\Seeders;

use App\Models\Row;
use Illuminate\Database\Seeder;

class RowSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $rows = collect([
            'A',
            'B',
            'C',
            'D',
            'E',
            'F',
            'G',
            'H',
            'I',
            'J',
            'K',
            'L',
            'M',
        ]);

        $rows->each(function ($row) {
            Row::create([
                'name' => $row,
            ]);
        });
    }
}
