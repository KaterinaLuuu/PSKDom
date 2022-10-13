<?php

namespace App\Contracts;

interface MonthlyPaymentServiceContract
{
    public function calculation(int $price, int $programId);
}
