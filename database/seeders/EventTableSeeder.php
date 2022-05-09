<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EventTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \Illuminate\Support\Facades\DB::table('events')->insert([
            [
                'title' => 'Reunião',
                'start' => '2022-05-11 21:30:00',
                'end' => '2022-05-12 21:30:00',
                'color' => '#20B2AA',
                'location' => 'Parque',
                'status' => '2',
                'description' => 'Reunião com Clientes'
            ],
            [
                'title' => 'Reunião Escola',
                'start' => '2022-05-06',
                'end' => '2022-05-06 21:30:00',
                'color' => '#3CB371',
                'location' => 'Floresta',
                'status' => '1',
                'description' => 'Reunião com os Professores'
            ]
        ]);
    }
}
