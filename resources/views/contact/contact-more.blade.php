@extends ('layouts.app')
<!-- Подключаем файл шаблон -->

@section ('title')
{{$data -> subject}}
@endsection
@include ('inc.navbar')

<div class="container mt-5">
    <div class="alert alert-dark">
        <div class="center">
            <h1>{{$data -> subject}}</h1>
        </div>
        <p>{{$data -> name}}</p>
        <p>{{$data -> email}}</p>
        <p><small>{{$data -> message}}</small></p>
        <a href="{{ route ('contact-form-edit', $data -> id) }}"><button class=" btn btn-warning">Редактировать</button></a>
    </div>
</div>



@include('inc.footers')