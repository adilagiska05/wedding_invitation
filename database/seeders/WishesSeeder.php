<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class WishesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Wishes::create([
            'wedding_id'            => 1,
            'name'                  => 'Dani Sofyan',
            'comment'               => 'Semoga sakinah mawadah warohmah',
            'created_at'            => now(),
            'updated_at'            => now()
        ]);
    }
}
