<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Vetarsts;

class VetarstsSeeder extends Seeder
{
    public function run()
    {
        $data = [
            ['121298-12345', 'Anna', 'Berzina', '2015-06-30', '+37126781234'],
            ['110198-54321', 'Juris', 'Kreicbergs', '2013-05-20', '+37128345678'],
            ['140498-98765', 'Ieva', 'Ozola', '2020-01-01', '+37129876543'],
            ['050799-45632', 'Kaspars', 'Kalnins', '2019-09-15', '+37128654321'],
            ['250300-65432', 'Liene', 'Petrova', '2018-03-01', '+37129123456'],
            ['101200-78654', 'Andris', 'Saulitis', '2012-07-10', '+37129987654'],
            ['150500-45321', 'Marta', 'Rozīte', '2017-11-30', '+37127456789'],
            ['110197-12345', 'Linda', 'Liepa', '2016-08-25', '+37126543210'],
            ['090396-76543', 'Janis', 'Zaķis', '2019-04-15', '+37129012345'],
            ['060496-34567', 'Jana', 'Saulite', '2021-02-14', '+37128345678'],
            ['030697-98765', 'Klāvs', 'Kalniņš', '2022-01-01', '+37126123456'],
            ['080798-54321', 'Aija', 'Ozola', '2014-12-31', '+37129876543'],
            ['110899-23456', 'Dāvis', 'Bērziņš', '2015-05-20', '+37127654321'],
            ['060199-65432', 'Maija', 'Jansone', '2017-10-01', '+37128987654'],
            ['310300-78654', 'Edgars', 'Saulītis', '2013-12-25', '+37127456789'],
            ['020501-12345', 'Sandra', 'Krauze', '2020-07-15', '+37126781234'],
            ['081101-76543', 'Agnese', 'Liepa', '2021-06-30', '+37126123456'],
            ['110702-34567', 'Artis', 'Priedīte', '2018-02-14', '+37129876543'],
            ['070903-98765', 'Elza', 'Kalniņa', '2019-01-01', '+37129012345'],
            ['040404-54321', 'Toms', 'Bērziņš', '2016-05-20', '+37128345678'],
            ['221204-23456', 'Laima', 'Jēkabsone', '2014-10-01', '+37126781234'],
            ['111111-11111', 'Anna', 'Berzina', '2010-05-12', '+37112345678'],
            ['222222-22222', 'Juris', 'Ozols', '2008-11-23', '+37123456789'],
            ['333333-33333', 'Māris', 'Liepa', '2015-01-07', '+37134567890'],
            ['444444-44444', 'Zane', 'Krievina', '2012-09-18', '+37145678901'],
            ['555555-55555', 'Ieva', 'Kalnina', '2019-03-02', '+37156789012'],
            ['666666-66666', 'Jānis', 'Bērziņš', '2006-06-15', '+37167890123'],
            ['777777-77777', 'Inga', 'Priede', '2017-12-28', '+37178901234'],
            ['888888-88888', 'Andris', 'Zvirbulis', '2009-08-09', '+37189012345'],
            ['333334-33333', 'Andris', 'Vilks', '2009-08-09', '+37112345678'],
            ['344334-33333', 'Māris', 'Liepa', '2015-01-07', '+37134567890'],
        ];

        foreach ($data as $item) {
            Vetarsts::create([
                'PK' => $item[0],
                'Vards' => $item[1],
                'Uzvards' => $item[2],
                'Stazs' => $item[3],
                'Telefona_nr' => $item[4],
            ]);
        }
    }
}
