<?php

namespace App\Services;

use App\Contracts\MortgageProgramRepositoryContract;
use App\Contracts\MortgageProgramServiceContract;
use App\Models\MortgageProgram;
use Illuminate\Database\Eloquent\Collection;

class MortgageProgramService implements MortgageProgramServiceContract
{
    private MortgageProgramRepositoryContract $repository;

    public function __construct(MortgageProgramRepositoryContract $repository)
    {
        $this->repository = $repository;
    }

    /**
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public function index(): Collection
    {
        return $this->repository->getMortgageProgram();
    }

    public function store(array $data): void
    {
        $this->repository->createMortgageProgram($data);
    }

    public function update(MortgageProgram $program, array $data): void
    {
        $this->repository->updateMortgageProgram($program, $data);
    }

    public function getOrCreateProgram($program)
    {
        $prog = $this->repository->findByProgramId($program);

        if (is_null($prog)) {
            $prog = $this->repository->createMortgageProgram($program);
        }

        return $prog;
    }

    /**
     * @return Collection
     */
    public function getMortgageProgram(): Collection
    {
        return $this->repository->getMortgageProgram();
    }
}
