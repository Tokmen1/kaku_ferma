<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KakisRotallietaSeeder extends Seeder
{
    public function run()
    {
        $kakisRotallieta = [
            ['12345678', 1, 1],
            ['23456789', 2, 1],
            ['34567890', 3, 0],
            ['45678901', 4, 0],
            ['56789012', 5, 0],
            ['67890123', 6, 0],
            ['78901234', 7, 0],
            ['89012345', 8, 0],
            ['90123456', 9, 0],
            ['11223344', 10, 0],
            ['22334455', 11, 0],
            ['33445566', 12, 1],
            ['44556677', 13, 0],
            ['55667788', 14, 0],
            ['12345678', 5, 0],
            ['23456789', 6, 1],
            ['34567890', 7, 0],
            ['45678901', 8, 0],
            ['56789012', 9, 0],
            ['78901234', 11, 0],
            ['89012345', 12, 0],
            ['90123456', 13, 0],
            ['11223344', 15, 1],
            ['22334455', 14, 0],
            ['33445566', 15, 0],
            ['44556677', 15, 0],
            ['55667788', 15, 1],
            ['12345678', 15, 0],
            ['23456789', 14, 1],
            ['34567890', 13, 1],
            ['45678901', 12, 1],
            ['56789012', 11, 0],
            ['78901234', 9, 0],
            ['12345678', 3, 0],
            ['23456789', 4, 0],
            ['34567890', 5, 0],
            ['45678901', 6, 0],
            ['56789012', 7, 0],
            ['67890123', 8, 0],
            ['78901234', 6, 0],
            ['89012345', 10, 0],
            ['90123456', 11, 0],
            ['11223344', 12, 0],
            ['22334455', 13, 0],
            ['33445566', 14, 0],
            ['44556677', 7, 0],
            ['55667788', 7, 0],
            ['22334455', 12, 0],
            ['33445566', 11, 0],
            ['44556677', 11, 0],
            ['55667788', 11, 0],
        ];

        foreach ($kakisRotallieta as $kakisRotaļlieta) {
            DB::table('kakis_rotallieta')->insert([
                'Kakis_Cipa_Num' => $kakisRotaļlieta[0],
                'Rotallieta_ID' => $kakisRotaļlieta[1],
                'Ir_milaka' => $kakisRotaļlieta[2],
            ]);
        }
    }
}