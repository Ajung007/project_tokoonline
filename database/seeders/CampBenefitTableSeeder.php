<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\CampBenefit;

class CampBenefitTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $campBenefit = 
        [
            [
               'camp_id' => 1,
               'name' => 'Pengajar Profesional', 
            ],
            [
                'camp_id' => 1,
                'name' => 'Full Video', 
             ],
             [
                'camp_id' => 1,
                'name' => 'Form Diskusi', 
             ],
             [
                'camp_id' => 1,
                'name' => 'Akses Selamatnya', 
             ],
             [
                'camp_id' => 1,
                'name' => 'Sertifikat', 
             ],
             [
                'camp_id' => 2,
                'name' => '1-1 Monitoring', 
             ],
             [
                'camp_id' => 2,
                'name' => 'Full Video', 
             ],
             [
                'camp_id' => 2,
                'name' => 'Sertifikat', 
             ],
        ];

        CampBenefit::insert($campBenefit);
    }
}
