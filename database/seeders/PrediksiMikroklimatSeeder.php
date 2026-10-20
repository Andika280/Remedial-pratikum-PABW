<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;
use Carbon\Carbon;

class PrediksiMikroklimatSeeder extends Seeder
{
    public function run(): void
    {
        $faker = Faker::create('id_ID');

        for ($i = 0; $i < 15; $i++) {
            $kelembapan_tanah = $faker->numberBetween(20, 90);
            
            if ($kelembapan_tanah < 40) {
                $status = 'Kering';
            } elseif ($kelembapan_tanah >= 40 && $kelembapan_tanah <= 70) {
                $status = 'Optimal';
            } else {
                $status = 'Terlalu Lembap';
            }

            DB::table('prediksi_mikroklimats')->insert([
                'lokasi' => $faker->randomElement(['Garut Kota', 'Tarogong Kaler', 'Samarang']),
                'nama_tanaman' => $faker->randomElement(['Padi', 'Jagung', 'Cabai']),
                'suhu_udara' => $faker->randomFloat(1, 18, 35),
                'kelembapan_udara' => $faker->numberBetween(40, 100),
                'kelembapan_tanah' => $kelembapan_tanah,
                'status_mikroklimat' => $status,
                'created_at' => Carbon::now()->subDays(rand(0, 10)),
                'updated_at' => Carbon::now(),
            ]);
        }
    }
}