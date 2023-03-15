<?php

namespace Database\Seeders;

use App\Models\Home;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class HomeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {  Home::insert([
        [
            'id' => 1,
            'title' => 'Hasdrubal Prestige Thalassa & Spa Djerba',
            'BLOB' => 'lHasdrubal Prestige Thalassa & Spa Djerba vous propose un hébergement de luxe 5 étoiles',
            'image' => 'img-1.png',
        ],
        [
            'id' => 2,
            'title' => 'Radisson Blu Palace Resort & Thalasso, Djerba',
           'BLOB' => 'Installé directement sur la plage,Radisson Blu Palace Resort & Thalasso propose une salle de sport ainsi que des installations de spa.',
            'image' => 'img-2.png',
        ],
        [
            'id' => 3,
            'title' => 'Royal Garden Palace Djerba',
            'BLOB' => 'venez en Tunisie et séjournez au Royal Garden Palace, un hôtel cinq étoiles de luxe alliant confort, calme et convivialité.',
            'image' => 'img-3.png',
        ],
        [
            'id' => 4,
            'title' => 'YADIS DJERBA GOLF THALASSO & SPA',
            'BLOB' => 'Le Yadis Djerba Thalasso & Spa propose des chambres et des suites insonorisées avec télévision satellite. Toutes les chambres sont climatisées et desservies par un ascenseur.',
            'image' => 'img-4.png',
        ],
        [
            'id' => 5,
            'title' => 'IBEROSTAR MEHARI DJERBA',
            'BLOB' => 'Hôtel 4 étoiles, en front de mer, tout compris, club enfants, jardins et piscines. ',
            'image' => 'img-5.png',
        ],
    ]);
    
    }
}
