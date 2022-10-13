<?php

namespace App\Services;

use App\Contracts\ApartmentRepositoryContract;
use App\Contracts\ApartmentServiceContract;
use App\Contracts\SynchronizerServiceContract;
use App\Models\Apartment;

class ApartmentService implements ApartmentServiceContract
{
    private ApartmentRepositoryContract $repository;

    /**
     * @var \App\Contracts\SynchronizerServiceContract
     */
    private SynchronizerServiceContract $synchronizerService;

    public function __construct(
        ApartmentRepositoryContract $repository,
        SynchronizerServiceContract $synchronizerService
    ) {
        $this->repository = $repository;
        $this->synchronizerService = $synchronizerService;
    }

    public function index()
    {
        return $this->repository->getApartments();
    }

    public function store(array $data, array $programs)
    {
        $newApartment = $this->repository->createApartment($data);

        $this->synchronizerService->sync($programs, $newApartment);
    }

    public function update(Apartment $apartment, array $data, array $programs)
    {
        $this->repository->updateApartment($apartment, $data);

        $this->synchronizerService->sync($programs, $apartment);
    }

    public function getApartmentWithRelation(Apartment $apartment)
    {
        return $this->repository->getApartmentById($apartment->id);
    }
}
