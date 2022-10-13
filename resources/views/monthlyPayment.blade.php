@extends('layouts.app')
@section('title', 'Расчет ежемесечной оплаты')
@section('content')
<div>
    <form method="get" enctype="multipart/form-data" action="{{ route('monthlypayment.select', $apartment) }}">
        @csrf
        <p>{{$apartment->name}}</p>
        <select class="form-select"  name="program" aria-label="Доступные программы по ипотеки">
            <option selected>Выберете доступную программу</option>
            @foreach($apartment->mortgageProgram as $program)
                <option value="{{$program->id}}">{{$program->name}}</option>
            @endforeach
        </select>
        <button type="submit" class="btn btn-primary mt-3">Расчитать платеж</button>
    </form>
</div>
@endsection
