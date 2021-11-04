<?php

namespace Database\Seeders;


use App\Models\SuhuPh;
use Illuminate\Database\Seeder;

class SuhuPhSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $suhuPh = [
            [
                'id_kolam_foreign' => 1,
                'waktu' => '18:00:00',
                'suhu' => rand(200,300)/10,
                'ph' => rand(10,140)/10
            ],
            [
                'id_kolam_foreign' => 1,
                'waktu' => '19:00:00',
                'suhu' => rand(200,300)/10,
                'ph' => rand(10,140)/10
            ],
            [
                'id_kolam_foreign' => 1,
                'waktu' => '20:00:00',
                'suhu' => rand(200,300)/10,
                'ph' => rand(10,140)/10
            ],
            [
                'id_kolam_foreign' => 1,
                'waktu' => '21:00:00',
                'suhu' => rand(200,300)/10,
                'ph' => rand(10,140)/10
            ],
            [
                'id_kolam_foreign' => 2,
                'waktu' => '18:00:00',
                'suhu' => rand(200,300)/10,
                'ph' => rand(10,140)/10
            ],
            [
                'id_kolam_foreign' => 2,
                'waktu' => '19:00:00',
                'suhu' => rand(200,300)/10,
                'ph' => rand(10,140)/10
            ],
            [
                'id_kolam_foreign' => 2,
                'waktu' => '20:00:00',
                'suhu' => rand(200,300)/10,
                'ph' => rand(10,140)/10
            ],
            [
                'id_kolam_foreign' => 2,
                'waktu' => '21:00:00',
                'suhu' => rand(200,300)/10,
                'ph' => rand(10,140)/10
            ],
            [
                'id_kolam_foreign' => 3,
                'waktu' => '18:00:00',
                'suhu' => rand(200,300)/10,
                'ph' => rand(10,140)/10
            ],
            [
                'id_kolam_foreign' => 3,
                'waktu' => '19:00:00',
                'suhu' => rand(200,300)/10,
                'ph' => rand(10,140)/10
            ],
            [
                'id_kolam_foreign' => 3,
                'waktu' => '20:00:00',
                'suhu' => rand(200,300)/10,
                'ph' => rand(10,140)/10
            ],
            [
                'id_kolam_foreign' => 3,
                'waktu' => '21:00:00',
                'suhu' => rand(200,300)/10,
                'ph' => rand(10,140)/10
            ],
            [
                'id_kolam_foreign' => 4,
                'waktu' => '18:00:00',
                'suhu' => rand(200,300)/10,
                'ph' => rand(10,140)/10
            ],
            [
                'id_kolam_foreign' => 4,
                'waktu' => '19:00:00',
                'suhu' => rand(200,300)/10,
                'ph' => rand(10,140)/10
            ],
            [
                'id_kolam_foreign' => 4,
                'waktu' => '20:00:00',
                'suhu' => rand(200,300)/10,
                'ph' => rand(10,140)/10
            ],
            [
                'id_kolam_foreign' => 4,
                'waktu' => '21:00:00',
                'suhu' => rand(200,300)/10,
                'ph' => rand(10,140)/10
            ],
        ];
        foreach($suhuPh as $shPh) {
            SuhuPh::create($shPh);
        }
    }
}
