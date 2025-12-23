<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $titles = ['новая', 'в процессе', 'завершена', 'отменена'];

        foreach($titles as $title) {
            \App\Models\Status::firstOrCreate(['title'=>$title]);
        }
    }
}
