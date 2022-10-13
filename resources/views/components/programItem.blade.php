<div class="card m-4" style="width: 18rem;">
    <img src="img/image.jpg" class="card-img-top" alt="...">
    <div class="card-body">
        <h5 class="card-title">{{$program->name}}</h5>
    </div>
    <ul class="list-group list-group-flush">
        <li class="list-group-item">Процентная ставка: {{$program->interest_rate}}%</li>
        <li class="list-group-item">Максимальный срок: {{$program->max_term}} лет</li>
        <li class="list-group-item">Минимальный платеж: {{$program->min_down_payment}}%</li>
    </ul>
    <div class="card-body">
        <a href="{{route('programs.edit', $program)}}" class="card-link m-1">Изменить</a>
        <form method="post" action="{{ route('programs.destroy', ['program' => $program]) }}">
            @csrf
            @method("delete")
            <button type="submit" class="btn btn-primary mb-2">
                Удалить
            </button>
        </form>
    </div>
</div>
