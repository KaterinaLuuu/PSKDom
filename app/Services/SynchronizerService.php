<?php

namespace App\Services;

use App\Contracts\MortgageProgramRepositoryContract;
use App\Contracts\MortgageProgramServiceContract;
use App\Contracts\SynchronizerServiceContract;

class SynchronizerService implements SynchronizerServiceContract
{
    private $contract;

    public function __construct(MortgageProgramServiceContract $contract)
    {
        $this->contract = $contract;
    }

    public function sync(array $programs, $apartment): bool
    {
        $programsArr = collect();
        if(isset($programs)) {
            foreach ($programs as $program) {
                $programsArr->add($this->contract->getOrCreateProgram($program));
            }

            $apartment->mortgageProgram()->detach();
            $programsArr->each(function ($program) use ($apartment) {
                return $apartment->mortgageProgram()->save($program);
            });
        }

        return true;
    }
}
