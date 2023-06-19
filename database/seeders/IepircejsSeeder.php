<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class IepircejsSeeder extends Seeder
{
    public function run()
    {
        $data = [
            ['234512-34567', 'Līga', 'Bērziņa', '+37129123456'],
            ['123456-78901', 'Jānis', 'Liepiņš', '+37129567890'],
            ['345678-90123', 'Laima', 'Ozola', '+37129654321'],
            ['567890-12345', 'Andris', 'Kalniņš', '+37129345678'],
            ['789012-34567', 'Inese', 'Dzene', '+37129234567'],
            ['246810-13579', 'Valdis', 'Kokins', '+37129765432'],
            ['123456-78910', 'Maija', 'Bērziņa', '+37129111111'],
            ['678901-23456', 'Juris', 'Saulītis', '+37129333333'],
            ['987654-32109', 'Liene', 'Ābele', '+37129222222'],
            ['345678-90133', 'Arturs', 'Priedītis', '+37129777777'],
            ['123456-71101', 'Laura', 'Jansone', '+37929555555'],
            ['234567-89012', 'Māris', 'Lapiņš', '+37929999999'],
            ['789012-34267', 'Līga', 'Bērziņa', '+37929888888'],
            ['456789-01234', 'Dace', 'Kļaviņa', '+37129666666'],
            ['568890-12345', 'Andris', 'Bērziņš', '+37129000000'],
            ['778901-23456', 'Inga', 'Kalniņa', '+37129444444'],
            ['234512-43567', 'Linda', 'Ozola', '+37129523456'],
            ['345678-90993', 'Ieva', 'Saulīte', '+37129234567'],
            ['511190-12345', 'Gints', 'Liepa', '+37129345678'],
            ['890123-45678', 'Liene', 'Briede', '+37129456789'],
            ['283132-21412', 'Anna', 'Berzina', '+37129123126'],
            ['345678-12345', 'Janis', 'Ozols', '+37129876543'],
            ['128765-34567', 'Linda', 'Jansone', '+37129765432'],
            ['233456-45678', 'Marta', 'Kalnina', '+37129098765'],
            ['345678-56789', 'Jāzeps', 'Bērziņš', '+37129898989'],
            ['123456-99901', 'Ieva', 'Krumina', '+37129345678'],
            ['556789-01234', 'Mārtiņš', 'Zariņš', '+37129643734'],
            ['234567-12345', 'Inga', 'Bērziņa', '+3726342843'],
            ['876543-23456', 'Guntars', 'Osis', '+37229183456'],
            ['765432-34567', 'Andris', 'Vītols', '+37229188456'],
            ['654321-45678', 'Elīna', 'Jēkabsone', '+37229999956']
        ];

        foreach ($data as $record) {
            DB::table('Iepircējs')->insert([
                'PK' => $record[0],
                'Vards' => $record[1],
                'Uzvards' => $record[2],
                'Telefona_numurs' => $record[3],
            ]);
        }
    }
}
