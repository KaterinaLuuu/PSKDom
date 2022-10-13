@extends('layouts.app')
@section('title', 'Квартиры')
@section('content')
    <div>
        <h1 class="text-black fst-italic mb-4 text-center">Квартиры</h1>

        <div class="d-flex justify-content-between align-self-stretch align-content-center flex-wrap">
            @foreach($apartments as $apartment)
                <x-apartmentItem :apartment="$apartment"/>
            @endforeach
        </div>
    </div>
@endsection
