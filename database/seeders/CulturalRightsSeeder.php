<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
class CulturalRightsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {   
        $data=[
['cultural_rights'=>'Identidad y patrimonios culturales'],
['cultural_rights'=>'Referencias a comunidades culturales'],
['cultural_rights'=>'Acceso y participación en la vida cultural'],
['cultural_rights'=>'Educación y formación'],
['cultural_rights'=>'Información y comunicación'],
['cultural_rights'=>'Cooperación cultural']
        ];
DB::table('cultural_rights')->insert($data);
    
    }
}
