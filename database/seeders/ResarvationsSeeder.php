<?php

namespace Database\Seeders;

use Carbon\Carbon;
use App\Models\resarvations;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ResarvationsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
            resarvations::insert([
                [
                    'user_id' => 1,
                    'excursion_id' => 1,
                    'rented' => false,
                    'limit' => Carbon::now()->addDays(4)->toDateTimeString(),
                    'start' =>  Carbon::now()->addDays(5)->toDateTimeString(),
                    'end' =>  Carbon::now()->addDays(6)->toDateTimeString(),
                ],
                [
                    'user_id' => 1,
                    'excursion_id' => 1,
                    'rented' => true,
                    'limit' => Carbon::now()->addDays(3)->toDateTimeString(),
                    'start' =>  Carbon::now()->addDays(10)->toDateTimeString(),
                    'end' =>  Carbon::now()->addDays(11)->toDateTimeString(),
                ],
            ]);
            }}


?>
