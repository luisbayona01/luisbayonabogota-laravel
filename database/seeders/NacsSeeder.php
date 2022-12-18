<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
class NacsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [

            ['nacs' => 'ALCALÁ'],
            ['nacs' => 'ANDALUCÍA'],
            ['nacs' => 'ANSERMANUEVO'],
            ['nacs' => 'ARGELIA'],
            ['nacs' => 'BOLÍVAR'],
            ['nacs' => 'BUENAVENTURA'],
            ['nacs' => 'BUGA']
        ];

        DB::table('nacs')->insert($data);
    }
}
