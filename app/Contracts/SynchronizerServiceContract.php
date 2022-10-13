<?php

namespace App\Contracts;

use App\Models\Apartment;

interface SynchronizerServiceContract
{
    public function sync(array $programs, Apartment $apartment);
}
