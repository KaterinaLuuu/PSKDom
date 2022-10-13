<?php

namespace App\Contracts;

use App\Models\MortgageProgram;
use Illuminate\Database\Eloquent\Collection;

interface MortgageProgramRepositoryContract
{
    public function getMortgageProgram():Collection;

    public function findByProgramId(int $programId);

    public function createMortgageProgram(array $data);

    public function updateMortgageProgram(MortgageProgram $program, array $data);

    public function deleteMortgageProgram($model);
}
