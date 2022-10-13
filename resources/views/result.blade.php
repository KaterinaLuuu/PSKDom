@extends('layouts.app')
@section('title', 'Результат')
@section('content')
    <div>
        <p>Сумма ежемесячного платежа будет составлять: {{$monthlyPayment}}</p>
    </div>
@endsection
