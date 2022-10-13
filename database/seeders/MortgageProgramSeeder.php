<?php

namespace Database\Seeders;

use App\Models\MortgageProgram;
use Illuminate\Database\Seeder;

class MortgageProgramSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'name' => 'Льготная ипотека',
                'interest_rate' => '2',
                'max_term' => '30',
                'min_down_payment' => '5',
            ],
            [
                'name' => 'Семейная ипотека',
                'interest_rate' => '6.5',
                'max_term' => '30',
                'min_down_payment' => '10',
            ],
            [
                'name' => 'Сельская ипотека',
                'interest_rate' => '6',
                'max_term' => '30',
                'min_down_payment' =>'15' ,
            ],
        ];

        foreach ($data as $value) {
            MortgageProgram::factory()->create(
                [
                    'name'             => $value['name'],
                    'interest_rate'    => $value['interest_rate'],
                    'max_term'         => $value['max_term'],
                    'min_down_payment' => $value['min_down_payment'],
                ]
            );
        }
    }
}
