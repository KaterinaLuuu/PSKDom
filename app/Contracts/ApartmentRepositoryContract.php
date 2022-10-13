<?php

namespace App\Contracts;

use App\Models\Apartment;

interface ApartmentRepositoryContract
{
    public function getApartments();

    public function createApartment(array $data);

    public function updateApartment(Apartment $apartment, array $data): bool;

    public function deleteApartment($model);

    public function getApartmentById(int $id);
}
