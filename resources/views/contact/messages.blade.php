@extends ('layouts.app')
<!-- Подключаем файл шаблон -->

@section ('title')
Все предложения
@endsection

@include ('inc.navbar')
<div class="container">
    <div class="row">
        <div class="form-group">
            <div class="center">
                <h1>Все предложения</h1>
            </div>
            <div class="container">
                @include('inc.messages')
            </div>
            @foreach ($data as $el)
            <div class="alert alert-dark mt-5">
                <h3>{{$el -> subject}}</h3>
                <p>{{$el -> name}}</p>
                <p>{{$el -> email}}</p>
                <a href="{{ route ('contact-more', $el -> id) }}"><button class=" btn btn-warning">Подробнее</button></a>
                <a href="{{ route ('contact-delete', $el -> id) }}"><button class=" btn btn-danger">Удалить</button></a>
            </div>
        </div>
    </div>
</div>

@endforeach


@include('inc.footers')