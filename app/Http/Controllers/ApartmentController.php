<?php

namespace App\Http\Controllers;

use App\Models\Apartment;
use Illuminate\Contracts\View\View;
use App\Http\Requests\ApartmentFormRequest;
use App\Contracts\ApartmentServiceContract;
use App\Contracts\MortgageProgramServiceContract;

class ApartmentController extends Controller
{
    /**
     * @var \App\Contracts\ApartmentServiceContract
     */
    private ApartmentServiceContract $apartmentService;

    /**
     * @var \App\Contracts\MortgageProgramServiceContract
     */
    private MortgageProgramServiceContract $mortgageProgramService;

    public function __construct(
        ApartmentServiceContract $apartmentService,
        MortgageProgramServiceContract $mortgageProgramService
    ) {
        $this->apartmentService = $apartmentService;
        $this->mortgageProgramService = $mortgageProgramService;
    }

    /**
     * @return \Illuminate\Contracts\View\View
     */
    public function index(): View
    {
        $apartments = $this->apartmentService->index();

        return view('apartments', compact('apartments'));
    }

    public function create()
    {
        $programs = $this->mortgageProgramService->getMortgageProgram();

        return view('create_apartment', compact('programs'));
    }

    public function store(ApartmentFormRequest $request)
    {
        $this->apartmentService->store($request->validated(), $request->toArray()['programs']);

        return redirect(route('apartments.index'));
    }

    public function edit(Apartment $apartment)
    {
        $programs = $this->mortgageProgramService->getMortgageProgram();

        return view('update_apartment', compact('programs', 'apartment'));
    }

    public function update(Apartment $apartment, ApartmentFormRequest $request)
    {
        $this->apartmentService->update($apartment, $request->validated(), $request->toArray()['programs']);

        return redirect(route('apartments.index'));
    }

    public function destroy(Apartment $apartment)
    {
        $apartment->delete();

        return redirect(route('apartments.index'));
    }
}
