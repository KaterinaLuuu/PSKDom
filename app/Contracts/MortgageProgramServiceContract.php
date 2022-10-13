<?php

namespace App\Contracts;

use App\Models\MortgageProgram;
use Illuminate\Database\Eloquent\Collection;

interface MortgageProgramServiceContract
{
    public function index();

    public function store(array $data): void;

    public function update(MortgageProgram $program, array $data): void;

    public function getOrCreateProgram($program);

    public function getMortgageProgram(): Collection;
}
