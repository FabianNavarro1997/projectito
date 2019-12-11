<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TablaCarroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('carro')->insert([
            [
                'marca' => 'Ford',
                'modelo' => 'F150',
                'pasajeros' => '6',
                'created_at' => carbon::now()->format('y-m-d H:i:s')
            ], [
                'marca' => 'Chervrolet',
                'modelo' => 'Camaro',
                'pasajeros' => '4',
                'created_at' => carbon::now()->format('y-m-d H:i:s')
            ], [
                'marca' => 'Rover Ranger',
                'modelo' => 'Rover 345',
                'pasajeros' => '2',
                'created_at' => carbon::now()->format('y-m-d H:i:s')
            ]
        ]);

        /* //para hacer un array e insertar marcas muchas veces
       $marcas = [
           'Ford' ,
            'VolsWagen',
            'Lamborgini',
            'Crisler',
        ];

          foreach ($marcas as $key => $value) {
            DB::table('carro')->insert([
                'marca'=> 'nu',
                'modelo' => $value,
                'pasajeros'=>'4',
                'created_at' => carbon::now()->format('y-m-d H:i:s')  

            ]);  */
    }
}
