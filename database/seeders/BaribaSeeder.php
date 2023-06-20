<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Bariba;

class BaribaSeeder extends Seeder
{
    public function run()
    {
        $data = [
            ['Bioloģiskās sausās barības maisījums', 'Kārums SIA', 1],
            ['Gourmet Gold mākslīgā barība', 'Nestlé Purina PetCare', 0],
            ['Royal Canin mākslīgā barība', 'Royal Canin', 0],
            ['Acana zivju barība', 'Champion Petfoods LP', 1],
            ['Mājās gatavota vistas barība', 'Mājas dzīvnieku pārtikas darbnīca', 1],
            ['Pedigree mākslīgā barība', 'Mars, Incorporated', 0],
            ['Hills Prescription Diet bioloģiskā barība', 'Hills Pet Nutrition, Inc.', 1],
            ['Almo Nature mākslīgā barība', 'Almo Nature S.p.A.', 0],
            ['Eukanuba mākslīgā barība', 'Eukanuba', 0],
            ['Bioloģiskais mājputnu gaļas maisījums', 'BioVārds', 1],
            ['Kitekat mākslīgā barība', 'Mars, Incorporated', 0],
            ['Bioloģiskās vistas saldējums', 'Biogarantijas', 1],
            ['Josera zirņu barība', 'Josera', 1],
            ['Nutro mākslīgā barība', 'Nutro', 0],
            ['Whiskas mākslīgā barība', 'Mars, Incorporated', 0],
            ['Acana vistas barība', 'Champion Petfoods LP', 1],
            ['Royal Canin bioloģiskā barība', 'Royal Canin', 1],
            ['Applaws mākslīgā barība', 'Applaws', 0],
            ['Lilys Kitchen bioloģiskā barība', 'Lilys Kitchen', 1],
            ['IAMS mākslīgā barība', 'IAMS', 0],
            ['Animonda mākslīgā barība', 'Animonda Petfood GmbH', 0],
            ['Bioloģiskās jēru barības maisījums', 'BioBari', 1],
            ['Orijen bioloģiskā zivju barība', 'Champion Petfoods LP', 1],
            ['Purina Pro Plan mākslīgā barība', 'Nestlé Purina PetCare', 0],
            ['Bioloģiskās cūkgaļas barība', 'BioVārds', 1],
            ['Zivju mērce', 'Zivju mērces fabrika SIA', 0],
            ['Vistas fileja', 'Mājputni SIA', 0],
            ['Vistas fileja', 'Ķekavas vistas SIA', 1],
            ['Siers', 'Piena produkti SIA', 0],
            ['Tītara fileja', 'Mājputni SIA', 0],
            ['Kaķu barība', 'Nutro', 0],
        ];

        foreach ($data as $item) {
            Bariba::create([
                'Nosaukums' => $item[0],
                'Razotajs' => $item[1],
                'Ir_biologisks' => $item[2],
            ]);
        }
    }
}
