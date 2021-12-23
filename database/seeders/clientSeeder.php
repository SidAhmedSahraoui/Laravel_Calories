<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class clientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(clientFactory::class,10)->create();
    }
}
