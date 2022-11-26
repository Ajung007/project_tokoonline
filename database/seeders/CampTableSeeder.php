<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Camp;

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
            'title' => 'Bootcamp',
            'slug' => 'Bootcamp',
            'price' => 290,
            'created_at' => date('Y-m-d H:i:s', time()),
            'updated_at' => date('Y-m-d H:i:s', time()),
            ],
            [
                'title' => 'Permula',
                'slug' => 'Permula',
                'price' => 190,
                'created_at' => date('Y-m-d H:i:s', time()),
                'updated_at' => date('Y-m-d H:i:s', time()),
            ],
        ];

        foreach ($camps as $key => $camps){
            Camp::create($camps);
        }

        // cara ke dua dapat menggunakan        
        // ++++++++++++++++++++++++++++++++
        // Camp::insert($camps) ;
        // ++++++++++++++++++++++++++++++++
    }
}
