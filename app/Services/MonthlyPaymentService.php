<?php

namespace App\Services;

use App\Contracts\MonthlyPaymentServiceContract;
use App\Contracts\MortgageProgramRepositoryContract;

class MonthlyPaymentService implements MonthlyPaymentServiceContract
{
    /**
     * @var \App\Contracts\MortgageProgramRepositoryContract
     */
    private MortgageProgramRepositoryContract $mortgageProgramRepository;

    public function __construct(MortgageProgramRepositoryContract $mortgageProgramRepository)
    {
        $this->mortgageProgramRepository = $mortgageProgramRepository;
    }

    public function calculation(int $price, int $programId)
    {
        $program = $this->mortgageProgramRepository->findByProgramId($programId);

        $monthlyRate = $program->interest_rate / 12 / 100;
        $generalRate = (1 + $monthlyRate) ** ($program->max_term * 12);
        return round(($price * $monthlyRate * $generalRate / ($generalRate - 1)), 2);
    }
}
