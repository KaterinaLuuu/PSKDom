<?php

namespace App\Http\Controllers;

use App\Models\MortgageProgram;
use App\Contracts\MortgageProgramServiceContract;
use App\Http\Requests\MortgageProgramFormRequest;

class MortgageProgramController extends Controller
{
    /**
     * @var \App\Contracts\MortgageProgramServiceContract
     */
    private MortgageProgramServiceContract $mortgageProgramService;

    public function __construct(MortgageProgramServiceContract $mortgageProgramService)
    {
        $this->mortgageProgramService = $mortgageProgramService;
    }

    public function index()
    {
        $programs = $this->mortgageProgramService->index();

        return view('mortgageProgram', compact('programs'));
    }

    public function create()
    {
        return view('createMortgageProgram');
    }

    public function store(MortgageProgramFormRequest $request)
    {
        $this->mortgageProgramService->store($request->validated());

        return redirect(route('programs.index'));
    }

    public function edit(MortgageProgram $program)
    {
        return view('updateMortgageProgram', compact('program'));
    }

    public function update(MortgageProgram $program, MortgageProgramFormRequest $request)
    {
        $this->mortgageProgramService->update($program, $request->validated());

        return redirect(route('programs.index'));
    }

    public function destroy(MortgageProgram $program)
    {
        $program->delete();

        return redirect(route('programs.index'));
    }
}
