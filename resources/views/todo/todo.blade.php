@extends ('layouts.app')
<!-- Подключаем файл шаблон -->

@section ('title')
Все предложения
@endsection

@include ('inc.navbar')

@section ('content')
<div class="container">
    <br>
    @include('inc.messages')
    <div class="accordion mt-3" id="accordionExample">
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingOne">
                <button class="accordion-button " type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                    Добавить цель
                </button>
            </h2>
            <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    <form action="{{ route('todo-add') }}" method="post">
                        <div class="row">
                            @csrf
                            <div class="col">
                                <div class="form-group">
                                    <label for="name">Цель</label>
                                    <input type="text" name="name" id=name placeholder="Цель" class="form-control">
                                    @error('name')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label for="notes">Notes</label>
                                    <input type="text" name="notes" id=notes placeholder="Notes" class="form-control">
                                    @error('notes')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label for="status">Статус</label>
                                    <select class="form-select" aria-label="Default select example" name="status" id=status>
                                        <option value="1">Будущее</option>
                                        <option value="2">В работе</option>
                                        <option value="3">Выполнено</option>
                                    </select>
                                    @error('status')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <br>
                        <button type="submit" class="btn btn-success">Добавить</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="row mt-5">
        <div class="alert alert-primary col-4" role="alert">
            <h3> Будущее</h3>
            <ol>
                @foreach ($data as $el)
                @if ($el->status === 1)
                <li>
                    {{$el-> name}}
                    <br>
                    <small> {{$el-> notes}}</small>
                    <br>
                    <a href="{{ route ('todo-info', $el -> id) }}">
                        <button type="button" class="btn btn-info">В работе</button>
                    </a>
                </li>
                @endif
                @endforeach
            </ol>
        </div>
        <div class="alert alert-info col-4" role="alert">
            <h3> В работе </h3>
            <ol>
                @foreach ($data as $el)
                @if ($el->status === 2)
                <li>
                    {{$el-> name}}
                    <br>
                    <small> {{$el-> notes}}</small>
                    <br>
                    <a href="{{ route ('todo-success', $el -> id) }}">
                        <button type="button" class="btn btn-success">Выполнено</button>
                    </a>
                </li>
                @endif
                @endforeach
            </ol>
        </div>
        <div class="alert alert-success col-4" role="alert">
            <h3> Выполнено </h3>
            <ol>
                @foreach ($data as $el)
                @if ($el->status === 3)
                <li>
                    {{$el-> name}}
                    <br>
                    <small> {{$el-> notes}} </small>
                </li>
                @endif
                @endforeach
            </ol>
        </div>
    </div>
</div>