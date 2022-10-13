@extends('layouts.app')
@section('title', 'Ипотечные программы')
@section('content')
    <div>
        <h1 class="text-black fst-italic mb-4 text-center">Программы</h1>
        <div class="d-flex justify-content-between align-self-stretch align-content-center flex-wrap">
            @foreach($programs as $program)
                <x-programItem :program="$program"/>
            @endforeach
        </div>
    </div>
@endsection
