@section ('navbar')
<!-- Место вставки Секции, ее не надо закрывать -->

<nav class="navbar navbar-expand-lg navbar-light bg-light ">
  <a class="navbar-brand" href="{{route ('home')}}">Резюме</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Связаться со мной
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="{{route ('contact')}}">Оставить свои контакты</a>
          <a class="dropdown-item" href="{{route ('contact-all')}}">Все контакты</a>
        </div>
      </li>
      <ul class="navbar-nav">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Мои проекты
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <a class="dropdown-item" href="{{route ('todo')}}">ToDo</a>
            <a class="dropdown-item" href="{{route ('summary')}}">Summary</a>
          </div>

        </li>
      </ul>
      <li class="nav-item">
        <a class="nav-link" href="{{ asset('pdf/Summary_v2.pdf') }}">Скачать</a>
      </li>
    </ul>
  </div>
</nav>