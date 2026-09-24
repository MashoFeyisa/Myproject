<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CounterSrrder extends Seeder
{
    public function run(): void
    {
        $counters = [
            [
                'name' => 'masho',
                'code' => 'ab',
            ],
            [
                'name' => 'feyisa',
                'code' => 'abb',
            ],
            [
                'name' => 'aliyi',
                'code' => 'abc',
            ],
        ];

        DB::table('countires')->insert($counters);
    }
}