<?php

namespace Database\Seeders;

use App\Models\Apartment;
use Illuminate\Database\Seeder;

class ApartmenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'name'  => '1-комнатная квартира',
                'type'  => 'Бизнес-класс',
                'price' => '1500000',
            ],
            [
                'name'  => '2-комнатная квартира',
                'type'  => 'Вторичка',
                'price' => '2100000',
            ],
            [
                'name'  => '3-комнатная квартира',
                'type'  => 'Эконом-класс',
                'price' => '4500000',
            ],
            [
                'name'  => 'Студия',
                'type'  => 'Черновая',
                'price' => '1100000',
            ],
            [
                'name'  => 'Аппартаменты',
                'type'  => 'Элитное жилье',
                'price' => '5800000',
            ],
        ];
        foreach ($data as $value) {
            Apartment::factory()->create(
                [
                    'name'  => $value['name'],
                    'type'  => $value['type'],
                    'price' => $value['price'],
                ]
            );
        }
    }
}
