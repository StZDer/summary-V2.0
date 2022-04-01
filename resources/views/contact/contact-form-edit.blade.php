@extends ('layouts.app')
<!-- Подключаем файл шаблон -->

@section ('title')
{{$data -> subject}}
@endsection
@include ('inc.navbar')
<div class="container">
    <div class="row">
        <div class="form-group">
            <div class="center">
                <h1>Редактирование записи </h1>
            </div>
            @include('inc.messages')
            <form action="{{ route('contact-edit', $data -> id) }}" method="post">
                @csrf
                <!-- Перед каждым form создается защищенный ключ -->
                <div class="form-group">
                    <label for="name">Ваше имя</label>
                    <input type="text" name="name" id=name value="{{ $data -> name }}" class="form-control">
                    @error('name')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
        </div>
        <div class="form-group">
            <div class="form-group">
                <label for="email">Ваш email</label>
                <input type="text" name="email" id="email" value="{{ $data -> email }}" class="form-control">
                @error('email')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="form-group">
            <div class="form-group">
                <label for="subject">Тема сообщения/Кампания</label>
                <input type="text" name="subject" id="subject" value="{{ $data -> subject }}" id="subject" class="form-control">
                @error('subject')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="form-group">
            <div class="form-group">
                <label for="message">Сообщение</label>
                <textarea class="form-control" id="message" name="message">{{$data -> message}}</textarea>
                @error('message')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <br>
            <button type="submit" class="btn btn-success">Отправить</button>
            </form>
        </div>
    </div>
</div>
@include('inc.footers')