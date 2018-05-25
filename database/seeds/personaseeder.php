<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class personaseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\personas::class)->create([
            'Nombre'        => 'David',
            'Direccion'     => 'Loa n#256',
            'Telefono'      => '72807483',
            'Edad'          => '22'
       ]);
       factory(App\personas::class, 40)->create();
    }
}
