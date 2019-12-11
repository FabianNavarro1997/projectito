<?php

use App\Model\Usuario;
use Illuminate\Database\Seeder;

class TablaUsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Usuario::class,50)->create();
    }
}
