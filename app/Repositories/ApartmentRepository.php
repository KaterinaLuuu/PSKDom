<?php

namespace App\Repositories;

use App\Models\Apartment;
use Illuminate\Database\Eloquent\Collection;
use App\Contracts\ApartmentRepositoryContract;

class ApartmentRepository implements ApartmentRepositoryContract
{
    private Apartment $model;

    private $tag = 'apartment';

    public function __construct(Apartment $model)
    {
        $this->model = $model;
    }

    public function getApartments(): Collection
    {
        return \Cache::tags([$this->tag])->remember('all_apartments', 3600, function () {
            return $this->model->query()->get();
        });
    }

    public function createApartment(array $data)
    {
        return $this->model->create($data);
    }

    public function updateApartment(Apartment $apartment, array $data): bool
    {
        return $apartment->update($data);
    }

    public function deleteApartment($model)
    {
        return $model->delete();
    }

    public function getApartmentById(int $id)
    {
        return $this->model->where('id', $id)->with('mortgageProgram')->first();
    }
}
