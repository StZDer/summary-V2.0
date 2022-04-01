@extends ('layouts.app')
<!-- Подключаем файл шаблон -->

@section ('title')
Связь со мной
@endsection

@include ('inc.navbar')
<div class="container">
    <div class="row">
        <div class="form-group">
            <div class="center">
                <h1>Связаться со мной</h1>
            </div>
            @include('inc.messages')
            <form action="{{ route('contact-form') }}" method="post">
                @csrf
                <!-- Перед каждым form создается защищенный ключ -->
                <div class="form-group">
                    <label for="name">Ваше имя</label>
                    <input type="text" name="name" id=name placeholder="Введите ваше имя" class="form-control">
                    @error('name')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
        </div>
        <div class="form-group">
            <div class="form-group">
                <label for="email">Ваш email</label>
                <input type="text" name="email" id="email" placeholder="Введите ваш email" class="form-control">
                @error('email')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="form-group">
            <div class="form-group">
                <label for="subject">Тема сообщения/Кампания</label>
                <input type="text" name="subject" id="subject" placeholder="Введите тему сообщения" id="subject" class="form-control">
                @error('subject')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="form-group">
            <div class="form-group">
                <label for="message">Сообщение</label>
                <textarea class="form-control" id="message" name="message" placeholder="Введите ваше сообщение"></textarea>
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