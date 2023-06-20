<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KakisBaribaSeeder extends Seeder
{
    public function run()
    {
        $kakisBariba = [
            ['12345678', '1'],
            ['12345678', '2'],
            ['12345678', '3'],
            ['89012345', '4'],
            ['89012345', '5'],
            ['89012345', '6'],
            ['89012345', '2'],
            ['23456789', '3'],
            ['23456789', '4'],
            ['90123456', '5'],
            ['90123456', '6'],
            ['90123456', '1'],
            ['55667788', '4'],
            ['55667788', '5'],
            ['55667788', '6'],
            ['22334455', '1'],
            ['22334455', '2'],
            ['22334455', '3'],
            ['33445566', '5'],
            ['33445566', '6'],
            ['33445566', '1'],
            ['56789012', '2'],
            ['56789012', '3'],
            ['56789012', '4'],
            ['34567890', '3'],
            ['34567890', '4'],
            ['34567890', '5'],
            ['34567890', '6'],
            ['34567890', '1'],
            ['34567890', '2'],
        ];

        foreach ($kakisBariba as $bariba) {
            DB::table('kakis_bariba')->insert([
                'Kakis_Cipa_Num' => $bariba[0],
                'Bariba_ID' => $bariba[1],
            ]);
        }
    }
}
