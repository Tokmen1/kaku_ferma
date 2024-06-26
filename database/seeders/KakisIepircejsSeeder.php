<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KakisIepircejsSeeder extends Seeder
{
    public function run()
    {
        $kakisIepircejs = [
            ['90123456', '234512-34567'],
            ['89012345', '123456-78910'],
            ['78901234', '123456-78901'],
            ['67890123', '345678-90123'],
            ['56789012', '567890-12345'],
            ['45678901', '789012-34567'],
            ['34567890', '246810-13579'],
            ['23456789', '987654-32109'],
            ['12345678', '678901-23456'],
            ['12472351', '678901-23456'],
            ['11472351', '987654-32109'],
            ['52567823', '345678-90133'],
            ['62132142', '123456-71101'],
            ['62133132', '234567-89012'],
            ['15129041', '789012-34267'],
            ['51221312', '456789-01234'],
            ['44124141', '568890-12345'],
            ['12313123', '778901-23456'],
            ['35684552', '234512-43567'],
            ['24646611', '345678-90993'],
            ['52221234', '511190-12345'],
            ['52223465', '890123-45678'],
            ['52222747', '283132-21412'],
            ['52664788', '345678-12345'],
            ['52222788', '128765-34567'],
            ['55667788', '233456-45678'],
            ['44556677', '345678-56789'],
            ['33445566', '123456-99901'],
            ['22334455', '556789-01234'],
            ['11223344', '234567-12345'],
        ];

        foreach ($kakisIepircejs as $iepircejs) {
            DB::table('kakis_iepircejs')->insert([
                'Kakis_Cipa_Num' => $iepircejs[0],
                'Iepircejs_PK' => $iepircejs[1],
            ]);
        }
    }
}
