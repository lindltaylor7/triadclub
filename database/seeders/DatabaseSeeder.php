<?php

namespace Database\Seeders;

use App\Models\Empresa;
use App\Models\Image;
use App\Models\Oferta;
use App\Models\Role;
use App\Models\Rubro;
use App\Models\User;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\Storage;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Storage::makeDirectory('ofertas');
        $this->call(RoleSeeder::class);
        $this->call(UserSeeder::class);
        Rubro::factory(4)->create();
        Empresa::factory(15)->create();
        $this->call(OfertaSeeder::class);

    }
}
