<?php

namespace Database\Seeders;

use App\Models\Excursion;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ExcursionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
       Excursion::insert([ [
        'id' => 1,
        'title' => 'Circuit Sud Complet',
        'BLOB' => ' ',
        'image' => 'exc1.jpg',
        'image1' => 'image2.jpg',
        'image2' => 'image3.jpg',
        'image3' => 'image4.jpg',
        
    ],
    [
        'id' => 2,
        'title' => 'Circuit Matmata',
        'BLOB' => ' ',
        'image' => 'exc-2.jpg',
        'image1' => 'matmata.jpg',
        'image2' => 'matmata1.jpg',
        'image3' => 'matmata2.jpg',
    ],
    [
        'id' => 3,
        'title' => 'Circuit Touzer',
        'BLOB' => ' ',
        'image' => 'exc-3.jpg',
        'image1' => 'touzer1.jpg',
        'image2' => 'touzer2.jpg',
        'image3' => 'touzer3.jpg',
    ],
]);
    }
}
