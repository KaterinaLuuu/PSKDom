@extends('layouts.app')
@section('title', 'Редактирование квартиры')
@section('content')
    <form method="post" enctype="multipart/form-data" action="{{ route('apartments.update', ['apartment' => $apartment]) }}">
        @csrf
        @method('patch')
        <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Название квартиры</label>
            <input class="form-control" name="name" id="name" type="name" aria-label="Название" value="{{ old('name', $apartment->name)}}">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Тип квартиры</label>
            <input class="form-control" name="type" id="type" type="text" value="{{old('type', $apartment->type)}}" aria-label="Тип">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Цена квартиры</label>
            <input class="form-control" name="price" id="price" type="text" value="{{ old('price', $apartment->price)}}" aria-label="Цена">
            <div id="emailHelp" class="form-text">Укажите сумму в рублях</div>
        </div>
        <div class="mb-3">
            <select class="form-select" name="programs[]" multiple="multiple" aria-label="Выбор ипотечной программы">
                @foreach($programs as $program)
                    <option value="{{$program->id}}">{{$program->name}}</option>
                @endforeach
            </select>
            <div id="emailHelp" class="form-text">Для выбора нескольких программ используйте Ctrl</div>
        </div>

        <button type="submit" class="btn btn-primary">Отправить</button>
    </form>
@endsection

