<?php

namespace Database\Seeders;

use App\Models\Camp;
use Illuminate\Database\Seeder;
// 1st A methods
// use Str;

class CampTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $camps = [
            [
                'title' => 'Gila Belajar',
                // 1st A methods tidak jadi dipakai karena sekarang hanya digunakan untuk hal sederhana
                // 'slug' => Str::slug('Gila Belajar'),
                'slug' => 'gila-belajar',
                'price' => 280,
                // timestamp dibawah bisa otomatis dari db jika menggunakan 1st B methods
                'created_at' => date('Y-m-d H:i:s', time()),
                'updated_at' => date('Y-m-d H:i:s', time()),
            ],
            [
                'title' => 'Baru Mulai',
                // 1st A methods tidak jadi dipakai karena sekarang hanya digunakan untuk hal sederhana
                // 'slug' => Str::slug('Baru Mulai'),
                'slug' => 'baru-mulai',
                'price' => 140,
                // timestamp dibawah bisa otomatis dari db jika menggunakan 1st B methods
                'created_at' => date('Y-m-d H:i:s', time()),
                'updated_at' => date('Y-m-d H:i:s', time()),
            ],
        ];

        // 1st B methods
        // foreach ($camps as $key => $camp) {
        //     Camp::create($camp);
        // }

        // 2nd methods
        Camp::insert($camps);
    }
}
