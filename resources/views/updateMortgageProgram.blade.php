@extends('layouts.app')
@section('title', 'Редактирование ипотечной программы')
@section('content')
    <form method="post" enctype="multipart/form-data" action="{{ route('programs.update', ['program' => $program]) }}">
        @csrf
        @method('patch')
        <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Название квартиры</label>
            <input id="name" name="name" class="form-control" type="text" value="{{old('name', $program->name)}}" placeholder="Название..." aria-label="Название">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Процентная ставка</label>
            <input id="interest_rate" name="interest_rate" class="form-control" type="text" value="{{old('interest_rate', $program->interest_rate)}}" placeholder="Ставка..." aria-label="Тип">
            <div id="emailHelp" class="form-text">Укажите процент ставки по программе</div>
        </div>
        <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Максимальный срок</label>
            <input id="max_term" name="max_term" class="form-control" type="text" value="{{old('max_term', $program->max_term)}}" placeholder="Срок..." aria-label="Цена">
            <div id="emailHelp" class="form-text">Укажите максимальный срок ипотеки</div>
        </div>
        <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Минимальный первоначальный взнос</label>
            <input id="min_down_payment" name="min_down_payment" class="form-control" type="text" value="{{old('min_down_payment', $program->min_down_payment)}}" placeholder="Взнос..." aria-label="Цена">
            <div id="emailHelp" class="form-text">Укажите процент взноса</div>
        </div>
        <button type="submit" class="btn btn-primary">Отправить</button>
    </form>
@endsection

