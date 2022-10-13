<?php

namespace Database\Seeders;

use App\Models\Apartment;
use App\Models\MortgageProgram;
use Illuminate\Database\Seeder;

class ApartmentsMortgageProgramSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $apartments = Apartment::query()->get();
        $programs = MortgageProgram::query()->get();
        foreach ($apartments as $apartment) {
            $apartment->mortgageProgram()->attach($programs->random(2));
        }
    }
}
