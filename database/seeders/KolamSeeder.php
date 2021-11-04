<?php

namespace Database\Seeders;

use App\Models\Kolam;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KolamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $kolam = [
            [
        	'nama_kolam' => 'kolam 1'
            ],
            [
        	'nama_kolam' => 'kolam 2'
            ],
            [
        	'nama_kolam' => 'kolam 3'
            ],
            [
        	'nama_kolam' => 'kolam 4'
            ]
        ];
        foreach($kolam as $klm) {
            Kolam::create($klm);
        }
    }
}
