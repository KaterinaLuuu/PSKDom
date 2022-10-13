<?php

namespace App\Repositories;

use App\Contracts\MortgageProgramRepositoryContract;
use App\Models\MortgageProgram;
use Illuminate\Database\Eloquent\Collection;

class MortgageProgramRepositories implements MortgageProgramRepositoryContract
{
    private MortgageProgram $model;
    private $tag = 'mortgageProgram';

    public function __construct(MortgageProgram $model)
    {
        $this->model = $model;
    }

    public function getMortgageProgram(): Collection
    {
        return \Cache::tags([$this->tag])->remember('all_programs', 3600, function () {
            return $this->model->query()->get();
        });
    }

    public function findByProgramId(int $programId)
    {
        return $this->model->where('id', $programId)->first();
    }

    public function createMortgageProgram(array $data)
    {
        return $this->model->create($data);
    }

    public function updateMortgageProgram(MortgageProgram $program, array $data)
    {
        return $program->update($data);
    }

    public function deleteMortgageProgram($model)
    {
        return $model->delete();
    }
}
