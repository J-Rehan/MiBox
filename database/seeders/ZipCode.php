<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ZipCode extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         \App\Models\ZipCode::factory(50)->create();
    }
}
