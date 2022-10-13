@extends('layouts.app')
@section('title', 'Создание квартиры')
@section('content')
    <form method="post" enctype="multipart/form-data" action="{{ route('apartments.store') }}">
        @csrf
        <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Название квартиры</label>
            <input class="form-control" name="name" id="name" type="name" placeholder="Название..."
                   aria-label="Название">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Тип квартиры</label>
            <input class="form-control" name="type" id="type" type="type" placeholder="Тип..." aria-label="Тип">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Цена квартиры</label>
            <input class="form-control" name="price" id="price" type="price" placeholder="Цена..." aria-label="Цена">
            <div id="emailHelp" class="form-text">Укажите сумму в рублях</div>
        </div>
        <div class="mb-3">
            <select class="form-select" name="programs[]" multiple="multiple" aria-label="Выбор ипотечной программы">
            Выберете ипотечны программы для данной квартиры
            @foreach($programs as $program)
                    <option value="{{$program->id}}">{{$program->name}}</option>
            @endforeach
            </select>
            <div id="emailHelp" class="form-text">Для выбора нескольких программ используйте Ctrl</div>
        </div>

        <button type="submit" class="btn btn-primary">Отправить</button>
    </form>
@endsection

