<?php

use App\Models\MultiImages;
use Illuminate\Database\Seeder;

class MultiImagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(MultiImages::class)->create();
    }
}
