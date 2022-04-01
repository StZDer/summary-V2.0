@extends ('layouts.app')
<!-- Подключаем файл шаблон -->

@section ('title')
Резюме
@endsection

@include ('inc.navbar')
<!-- Начало вставки -->
<div class="about">
  <div class="row">
    <div class="col-lg-12">
      <img src="{{ asset('img/avatar.jpg') }}" alt="тут должна быть фоточка" class="img-fluid">
      <div class="contacts">
        Контактная информация:
        <br />
        <br />
        Электронная почта:
        <br />
        Sasha-vasilchenko-1999@mail.ru
        <br />
        <br />
        <div class="contacts-info">
          Мои социальные сети:
          <br />
          <img src="{{ asset('img/vk.png') }}" />
          <a target="_blank" href="https://vk.com/sasha_vasilchenko">
            Вконтакте</a>
          <br />
          <img src="{{ asset('img/Telegramm.png') }}" />
          <a target="_blank" href="https://t.me/StZDer"> Телеграмм</a>
          <br />
          <img src="{{ asset('img/Instagramm.png') }}" />
          <a target="_blank" href="https://www.instagram.com/stzder/">Instagram</a>
          <br />
          <img src="{{ asset('img/GitHub.png') }}" />
          <a target="_blank" href="https://github.com/StZDer">GitHub</a>
        </div>
      </div>
    </div>
  </div>
  <div class="col-lg-9">
    <div class="about-text">
      <h1>Васильченко</h1>
      <h1>Александр</h1>
      <h4>Просто Junior-самоучка</h4>
      <div class="line"></div>
      <h2>Основные умения:</h2>
      <ul>
        <li>Быстрая обучаемость</li>
        <li>Умение работать в команде</li>
        <li>Любознательность</li>
        <li>Аналитическое мышление</li>
        <li><u> HTML, CSS, PHP, Bootstrap, and others</u></li>
        <li><u>В настоящий момент изучаю Laravel</u></li>
      </ul>
      <h2>Опыт работы:</h2>
      <table>
        <thead>
          <tr>
            <td>Должность</td>
            <td>Год</td>
            <td>Обязанности</td>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>
              <h4>Спасатель "Аквапарк"</h4>
            </td>
            <td>2016 год</td>
            <td>
              <ul>
                <li>Оказание немедленной помощи людям, терпящим бедствие на воде</li>
              </ul>
            </td>
          </tr>
          <tr>
            <td>
              <h4>Санитарный инструктор</h4>
            </td>
            <td>2019-2020 год</td>
            <td>
              <ul>
                <li>Срочная военная служба</li>
              </ul>
            </td>
          </tr>
          <tr>
            <td>
              <h4>Дежурный инженер ВИТ "ЭРА"</h4>
            </td>
            <td>2020 - н.в.</td>
            <td>
              <ul>
                <li>Посменные дежурства</li>
                <li>Обеспечение бесперебойной работы</li>
                <li>
                  Работа с системами мониторинга и оповещения, эскалация
                  профильным специалистам, протоколирование.
                </li>
              </ul>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
    <div class="row">
      <div class="col-lg-9">
        <div class="education">
          <h2>Образование:</h2>
          <table>
            <thead>
              <tr>
                <td>Название</td>
                <td>Год</td>
                <td>Описание</td>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>
                  <h4>МПГУ в г.-к. Анапа</h4>
                </td>
                <td>2016-2019</td>
                <td>
                  <ul>
                    <li> Познакомился с програмированием на С++, C#.
                      Обучилался в большей степени HTML, PHP, JavaScript и другим языкам...
                      ВКР написал сайт "Электронный журнал для учителей" без последующего внедрения
                  </ul>
                </td>
              </tr>
              <tr>
                <td>
                  <h4>МПГУ в г.-к. Анапа</h4>
                </td>
                <td>2019 - н.в.</td>
                <td>
                  <ul>
                    <li>Заочная форма обучения</li>
                  </ul>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
</body>

</html>