@extends('layouts.app')
@section('title', 'Главная')
@section('content')
    <div class="d-flex justify-content-evenly">
        <div class="w-25 text-center">
            <a href="{{route('apartments.index')}}" class="link-dark">Квартиры</a>
        </div>
        <div class="w-25 text-center">
            <a href="{{route('programs.index')}}" class="link-dark">Программы</a>
        </div>
    </div>
@endsection
