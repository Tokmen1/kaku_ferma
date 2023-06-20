<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RotallietaSeeder extends Seeder
{
    public function run()
    {
        $rotallieta = [
            ['Lūgšanu rotas', 'Pogas'],
            ['Bumbieris', 'Mīksta rotaļlieta'],
            ['Klavieres', 'Mūzikas instrumenti'],
            ['Spogulis', 'Spēļu rotaļlieta'],
            ['Ūdens krūze', 'Rotaļlieta dārzā'],
            ['Māja', 'Konstruktori'],
            ['Kreklāda', 'Rotaļlieta virtuvē'],
            ['Radio', 'Elektronika'],
            ['Lokomotīve', 'Braucamrīki'],
            ['Mīkstais zirgs', 'Mīksta rotaļlieta'],
            ['Monētu glābšanas banka', 'Izglītības rotaļlieta'],
            ['Čaula', 'Spēļu rotaļlieta'],
            ['Mīkstā rotaļlieta', 'Mīksta rotaļlieta'],
            ['Drošības siksna', 'Sporta rotaļlieta'],
            ['Gulbene', 'Braucamrīki'],
            ['Trakums', 'Konstruktori'],
            ['Karaļu pils', 'Konstruktori'],
            ['Dzelzceļš', 'Braucamrīki'],
            ['Saites', 'Sporta rotaļlieta'],
            ['Ūdens laiva', 'Rotaļlieta dārzā'],
            ['Zirnekļa tīkls', 'Spēļu rotaļlieta'],
            ['Būvlaukums', 'Konstruktori'],
            ['Rotējošais mūzikas spēlētājs', 'Elektronika'],
            ['Auto', 'Braucamrīki'],
            ['Krēsliņš', 'Mīksta rotaļlieta'],
            ['Pīķis', 'Konstruktori'],
            ['Ūdens pistole', 'Rotaļlieta dārzā'],
            ['Atslēgas', 'Spēļu rotaļlieta'],
            ['Dzīvnieku pūlis', 'Konstruktori'],
            ['Radiovadāmā mašīna', 'Braucamrīki'],
        ];

        foreach ($rotallieta as $rotallietas) {
            DB::table('rotallieta')->insert([
                'Nosaukums' => $rotallietas[0],
                'Tips' => $rotallietas[1],
            ]);
        }
    }
}
