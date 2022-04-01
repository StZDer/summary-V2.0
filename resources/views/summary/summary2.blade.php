@extends ('layouts.app')
<!-- Подключаем файл шаблон -->

@section ('title')
Резюме
@endsection

@include ('inc.navbar')

<div class="one">
    <div class="container">
        <div class="center">
            <h2>Васильченко Александр <br> Олегович</h2>
            <h3>Web designer & developer</h3>
            <img width="200px" src="{{ asset('img\avatar_2.png') }}" alt="тут должна быть фоточка" class="img-fluid" />
        </div>
    </div>
</div>
<div class="container">
    <div class="social-container">
        <ul class="social-icons">
            <li><a target="_blank" href="https://www.instagram.com/stzder/"><i class="fa fa-instagram"></i></a></li>
            <li><a target="_blank" href="https://vk.com/sasha_vasilchenko"><i class="fa fa-vk"></i></a></li>
            <li><a target="_blank" href="https://t.me/StZDer"><i class="fa-brands fa-telegram"></i></a></li>
            <li><a target="_blank" href="https://github.com/StZDer"><i class="fa fa-github" aria-hidden="true"></i></a></li>
        </ul>
    </div>
    <div class="center">
        <h5>
            Я начинающий Вэб разработчик. Неплохо ориентируюсь в таком фреймворке, как Laravel.
            Ежедневно занимаюсь разработкой собственных проектов или изучением новых фреймворков и возможностей.
            Хорошо работаю, как самостоятельная единица в команде.
            Знаю не так много, как хотелось, но если чего не знаю, найду.
            А что не найду, спрошу у коллег. Умею работать в коллективе и ОЧЕНЬ хочу профессионально развиваться. <br>
            - «Киборг - беспрецедентная стрессоустойчивость (меня не выводит из себя большинство из того, что выводит 95% людей).
        </h5>
        <div class="row">
            <div class="col-6">
                <div class="wrap">
                    <a class="nav-link" href="{{ asset('pdf/Summary_v2.pdf') }}"><button class="button">Скачать</button></a>
                </div>
            </div>
            <div class="col-6">
                <div class="wrap">
                    <button class="button">Обо мне</button>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-6">
            <div class="center">
                <h1>Опыт работы</h1>
            </div>
        </div>
        <div class="col-6">
            <div class="center">
                <h1>Образование</h1>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-lg-6 xl-6">
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th colspan="3">
                            <div class="center">
                                <h4> Спасатель "Аквапарк" в 2016 году</h4>
                            </div>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th>1. Оказание немедленной помощи людям, терпящим бедствие на воде</th>
                        <th>2. Несение дежурства на спасательном посту, осуществление контроля и проведение мероприятия на водоемах по укреплению правопорядка, охране жизни людей и окружающей среды.</th>
                        <th>3. Разъяснение гражданам правил безопасного поведения в целях предотвращения несчастных случаев на воде.</th>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="col-lg-6 xl-6">
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th colspan="3">
                            <div class="center">
                                <h4> МПГУ в г.-к. Анапа с 2016 по 2019 год</h4>
                            </div>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th> Проходил обучение по специальности инженер - программист. <br>
                            Познакомился с Си языками программирования. В 2017 познакомился с Web разработкой.
                            Долгое время сидел на php, вплоть до выпуска. На нем же написал проект c простенькой CRM системой для школы "Электронный журнал".
                            К сожалению, дальше не продвигал, так как ушел в армию в 2019 году.
                        </th>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="col-lg-6 xl-6">
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th colspan="3">
                            <div class="center">
                                <h4> Санитарный инструктор с 2019 по 2020 год</h4>
                            </div>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th>1. Оказывать заболевшим первую медицинскую помощь в случае отсутствия врача или фельдшера</th>
                        <th>2. Представлять заболевших на осмотр врачу или фельдшеру после доклада командиру роты, а в случаях, не терпящих отлагательства, лично отправлять больных к врачу с последующим докладом командиру роты (старшине роты)</th>
                        <th>3. Выполнять предписанные врачом простейшие лечебные назначения и наблюдать за выполнением больными указаний врача.</th>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="col-lg-6 xl-6">
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th colspan="3">
                            <div class="center">
                                <h4> МПГУ в г.-к. Анапа с 2019 по н.в.</h4>
                            </div>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th>Продолжил обучение по специальности Прикладная информатика. <br>

                            Познакомился с фреймворков Laravel. В планах дальнейшее развитие и более подробное изучение Node.js и Mongodb.
                        </th>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-6 xl-6">
                <table class="table">
                    <thead class="thead-dark">
                        <tr>
                            <th colspan="3">
                                <div class="center">
                                    <h4>Дежурный инженер ВИТ "ЭРА" по н.в.</h4>
                                </div>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th>1. Посменные дежурства</th>
                            <th>2. Обеспечение бесперебойной работы.</th>
                            <th>3. Работа с системами мониторинга и оповещения, эскалация профильным специалистам, протоколирование.</th>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="col-lg-6 xl-6">
                <table class="table">
                    <thead class="thead-dark">
                        <tr>
                            <th colspan="3">
                                <div class="center">
                                    <h4>Дополнительное образование:</h4>
                                </div>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th>1. Проходил курсы валантеров в ~2018 году. Курсы проходили около 70 часов с последующей практикой в детском лагере "Звездочка"</th>
                            <th>2. Курсы по 1С:Предприятию.</th>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="center">
        <h1>Навыки</h1>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-6 xl-12 mb-4">
                <div class="one">
                    <div class="center">
                        <h2>Профессиональные</h2>
                    </div>
                    <h5>HTML</h5>
                    <div class="progress">
                        <div class="progress-bar progress-bar-striped bg-info" role="progressbar" style="width: 80%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100">
                            <div class="black"> 80%</div>
                        </div>
                        <div class="progress-bar  bg-dark" role="progressbar" style="width: 20%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                    </div> <br>
                    <h5>CSS</h5>
                    <div class="progress">
                        <div class="progress-bar progress-bar-striped bg-info" role="progressbar" style="width: 60%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100">
                            <div class="black"> 60%</div>
                        </div>
                        <div class="progress-bar  bg-dark" role="progressbar" style="width: 40%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                    </div> <br>
                    <h5>Bootsrtap</h5>
                    <div class="progress">
                        <div class="progress-bar progress-bar-striped bg-info" role="progressbar" style="width: 40%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100">
                            <div class="black"> 40%</div>
                        </div>
                        <div class="progress-bar  bg-dark" role="progressbar" style="width: 60%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                    </div> <br>
                    <h5>Php web developer</h5>
                    <div class="progress">
                        <div class="progress-bar progress-bar-striped bg-info" role="progressbar" style="width: 40%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100">
                            <div class="black"> 40%</div>
                        </div>
                        <div class="progress-bar  bg-dark" role="progressbar" style="width: 60%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                    </div> <br>
                    <h5>JS</h5>
                    <div class="progress">
                        <div class="progress-bar progress-bar-striped bg-info" role="progressbar" style="width: 20%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100">
                            <div class="black"> 20%</div>
                        </div>
                        <div class="progress-bar  bg-dark" role="progressbar" style="width: 80%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                    </div> <br>
                </div>
            </div>
            <div class="col-lg-6 xl-12 mb-4">
                <div class="one">
                    <div class="center">
                        <h2>Личностные</h2>
                    </div>
                    <h5>Любопытство</h5>
                    <div class="progress">
                        <div class="progress-bar progress-bar-striped bg-info" role="progressbar" style="width: 100%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100">
                            <div class="black"> 100%</div>
                        </div>
                    </div> <br>
                    <h5>Стремление к проф. росту</h5>
                    <div class="progress">
                        <div class="progress-bar progress-bar-striped bg-info" role="progressbar" style="width: 100%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100">
                            <div class="black"> 100%</div>
                        </div>
                    </div>
                    <br>
                    <h5>Коммуникабельность</h5>
                    <div class="progress">
                        <div class="progress-bar progress-bar-striped bg-info" role="progressbar" style="width: 90%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100">
                            <div class="black"> 90%</div>
                        </div>
                        <div class="progress-bar  bg-dark" role="progressbar" style="width: 10%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <br>
                    <h5>Критическое мышление</h5>
                    <div class="progress">
                        <div class="progress-bar progress-bar-striped bg-info" role="progressbar" style="width: 70%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100">
                            <div class="black"> 70%</div>
                        </div>
                        <div class="progress-bar   bg-dark" role="progressbar" style="width: 30%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <br>
                    <h5>Аналитическое мышление</h5>
                    <div class="progress">
                        <div class="progress-bar progress-bar-striped bg-info" role="progressbar" style="width: 65%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100">
                            <div class="black"> 65%</div>
                        </div>
                        <div class="progress-bar bg-dark" role="progressbar" style="width: 35%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                    </div> <br>
                </div>
            </div>
        </div>
    </div>
</div>