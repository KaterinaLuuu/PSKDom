<?php

namespace App\Contracts;

use App\Models\Apartment;

interface ApartmentServiceContract
{
    public function index();

    public function store(array $data, array $programs);

    public function update(Apartment $apartment, array $data, array $programs);

    public function getApartmentWithRelation(Apartment $apartment);
}
