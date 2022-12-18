<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
class ExpertisesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
      ['expertises'=> 'Artes plásticas'],
      ['expertises'=>'Teatro'],
      ['expertises'=> 'Música'], 
      [ 'expertises'=>'Danza'],
      ['expertises'=>'Cocina tradicional'],
      ['expertises'=>'Juegos tradicionales'],
      ['expertises'=>'Promoción de lectura']

        ];
        DB::table('expertises')->insert($data);
    }
}
