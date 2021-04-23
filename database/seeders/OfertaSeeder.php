<?php

namespace Database\Seeders;

use App\Models\Image;
use App\Models\Oferta;
use Illuminate\Database\Seeder;

class OfertaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $ofertas = Oferta::factory(20)->create();

        foreach($ofertas as $oferta){
            Image::factory(1)->create([
                'imageable_id' => $oferta->id,
                'imageable_type' => Oferta::class
            ]);
        }

    }
}
