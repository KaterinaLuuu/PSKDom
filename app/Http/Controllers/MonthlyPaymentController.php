<?php

namespace App\Http\Controllers;

use App\Contracts\ApartmentRepositoryContract;
use App\Contracts\ApartmentServiceContract;
use App\Contracts\MonthlyPaymentServiceContract;
use App\Models\Apartment;
use App\Models\MortgageProgram;
use Illuminate\Http\Request;

class MonthlyPaymentController extends Controller
{
    /**
     * @var \App\Contracts\ApartmentServiceContract
     */
    private ApartmentServiceContract $apartmentService;

    /**
     * @var \App\Contracts\MonthlyPaymentServiceContract
     */
    private MonthlyPaymentServiceContract $monthlyPaymentService;

    public function __construct(
        ApartmentServiceContract $apartmentService,
        MonthlyPaymentServiceContract $monthlyPaymentService
    ) {
        $this->apartmentService = $apartmentService;
        $this->monthlyPaymentService = $monthlyPaymentService;
    }

    public function index(Apartment $apartment)
    {
        $apartment = $this->apartmentService->getApartmentWithRelation($apartment);

        return view('monthlyPayment', compact('apartment'));
    }

    public function select(Apartment $apartment, Request $request)
    {
        $monthlyPayment = $this->monthlyPaymentService->calculation($apartment->price, $request->input('program'));

        return view('result', compact('monthlyPayment'));
    }
}
