<div class="card mb-5" style="width: 18rem;">
    <img src="img/index.jpg" class="card-img-top" alt="...">
    <div class="card-body">
        <h5 class="card-title">{{$apartment->name}}</h5>
        <p class="card-text">{{$apartment->type}}</p>
        <p class="card-text">Цена: {{$apartment->price}} руб.</p>
        <a href="{{route('monthlypayment.index', $apartment)}}" class="btn btn-primary mb-2">Посмотреть ежемесячный платеж по программе</a>
        <a href="{{route('apartments.edit', $apartment)}}" class="btn btn-primary">Изменить карточку</a>
    </div>
</div>
