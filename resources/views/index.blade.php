@extends('layout')
@section('content')
    <section class="preview">
        <div class="preview__wrapper">
            <div class="preview--left">
                <img src="{{asset('img/background/preview-bg.png')}}" alt="">
            </div>
            <div class="preview--center">
                <div class="container">
                    <div class="preview__body">
                        <h1 class="preview__title">
                            Обеспечьте свое цифровое будущее
                        </h1>
                        <div class="preview__desc">
                            Wallix защищает идентификационные данные и доступ для ускорения цифровой трансформации
                        </div>
                        <a href="#video" class="preview__btn btn">
                            Смотреть видео
                        </a>
                    </div>
                </div>
            </div>
            <div class="preview--right"
                    style="background-image: url('{{'/img/background/preview-1.png'}}')">
                <img src="{{asset('img/background/preview-1.png')}}" alt="">
            </div>
        </div>
    </section>
    <section class="desc just-align">
        <div class="container">
            <div class="desc__row">
                <div class="desc__title">
                    Защитите своё цифровое будущее с лидером в области безопасности упрощённого доступа
                </div>
                <div class="desc__text">
                    Wallix & Abris защищает удостоверения и доступ к ИТ-инфраструктуре, приложениям и данным. Специализируясь на управлении привилегированным доступом, решения   обеспечивают соответствие последним стандартам ИТ-безопасности и защищают от кибератак, краж и утечек данных, связанных с украденными учетными данными и повышенными привилегиями на конфиденциальные активы компании.
                </div>
            </div>
        </div>
    </section>
    <section class="list just-align">
        <div class="container">
            <div class="list__body">
                <div class="list__item">
                    <div class="list__icon">
                        <div class="list__border">
                            <img src="{{asset('img/icon/list-18.svg')}}" alt="img">
                        </div>
                    </div>
                    <div class="list__desc">
                        <div class="list__title">
                            Упрощенная кибербезопасность
                        </div>
                        <div class="list__text">
                            Комплексные решения с бесшовным пользовательским интерфейсом. Простота развёртывания, работа и обслуживание
                        </div>
                    </div>
                </div>
                <div class="list__item">
                    <div class="list__icon">
                        <div class="list__border">
                            <img src="{{asset('img/icon/list-19.svg')}}" alt="img">
                        </div>
                    </div>
                    <div class="list__desc">
                        <div class="list__title">
                            Сертифицированный в отрасли поставщик решений
                        </div>
                        <div class="list__text">
                            Комплексные сертифицированные решения для соответствия национальным, государственным или деловым нормам
                        </div>
                    </div>
                </div>
                <div class="list__item">
                    <div class="list__icon">
                        <div class="list__border">
                            <img src="{{asset('img/icon/list-20.svg')}}" alt="img">
                        </div>
                    </div>
                    <div class="list__desc">
                        <div class="list__title">
                            Лидер по управлению привилегированным доступом
                        </div>
                        <div class="list__text">
                            Защитите свои стратегические активы
                            путем контроля и аудита привилегий
                            и секретов пользователей с лидером в PAM
                        </div>
                    </div>
                </div>
                <div class="list__item">
                    <div class="list__icon">
                        <div class="list__border">
                            <img src="{{asset('img/icon/list-21.svg')}}" alt="img">
                        </div>
                    </div>
                    <div class="list__desc">
                        <div class="list__title">
                            Конфиденциальность данных по замыслу
                        </div>
                        <div class="list__text">
                            Как европейский лидер, WALLIX заботится о конфиденциальности данных. Держите под контролем свои данные; не позволяйте другим использовать их ценность.
                        </div>
                    </div>
                </div>
            </div>
            <div class="list__line line"></div>
        </div>
    </section>
    <section class="management just-align">
        <div class="management__orange orange">
        </div>
        <div class="container">
            <div class="management__title">
                Передовые продукты для безопасного цифрового будущего
            </div>
            <div class="management__list">
                <div class="management__item">
                    <img src="{{asset('assets/img/management-1.jpg')}}" alt="management">
                    <div class="management__subtitle">
                        Управление привилегированным
                        доступом
                    </div>
                    <div class="management__desc">
                        Защита от угрозы со стороны привилегированных пользователей
                    </div>
                    <a href="https://www.wallix.com/free-trial/bastion" class="management__link">
                        Wallix Bastion
                    </a>
                </div>
                <div class="management__item">
                    <img src="{{asset('assets/img/management-2.jpg')}}" alt="management">
                    <div class="management__subtitle">
                        Управление привилегиями
                        конечных точек
                    </div>
                    <div class="management__desc">
                        Установите права локального администратора и остановите вымогателей
                    </div>
                    <a href="https://www.wallix.com/endpoint-privilege-management/" class="management__link">
                        Wallix BestSafe
                    </a>
                </div>
                <div class="management__item">
                    <img src="{{asset('assets/img/management-3.jpg')}}" alt="management">
                    <div class="management__subtitle">
                        Управление идентификационным
                        доступом
                    </div>
                    <div class="management__desc">Упрощение доступа пользователей к
                        корпоративным приложениям (iDaaS)
                    </div>
                    <a href="https://www.wallix.com/identity-as-a-service/  " class="management__link">
                        Wallix Trustelem
                    </a>
                </div>
            </div>
            <div class="management__line line"></div>
        </div>
    </section>
    <section class="solution just-align">
        <div class="container">
            <div class="solution__title title">
                Наши решения
            </div>
            <div class="solution__list">
                <a href="{{route('solution1')}}" class="solution__item" style="background: url('/img/solutions/solution-1.jpg') center center/cover no-repeat ;">
                    <div class="solution__text">
                        <div class="solution__subtitle">
                            Обеспеченный цифровой трансформации
                        </div>
                        <div class="solution__desc">
                            Обеспечьте безопасность вашей трансформации
                            независимо от того, где она подключена
                        </div>
                    </div>
                </a>
                <a href="{{route('solution2')}}" class="solution__item" style="background: url('/img/solutions/solution-2.png') center center/cover no-repeat ;">
                    <div class="solution__text">
                        <div class="solution__subtitle">
                            Аудит и соответствие
                        </div>
                        <div class="solution__desc">
                            Упрощение аудита и соблюдение требований безопасности с помощью сквозного управления доступом
                        </div>
                    </div>
                </a>
                <a href="{{route('solution3')}}" class="solution__item" style="background: url('/img/solutions/solution-33.jpg') center center/cover no-repeat ;">
                    <div class="solution__text">
                        <div class="solution__subtitle">
                            Управление рисками и безопасностью
                        </div>
                        <div class="solution__desc">
                            Упрощение аудита и соблюдение требований безопасности с помощью сквозного управления доступом
                        </div>
                    </div>
                </a>
            </div>

            <div id="solution" class="solution__list" style="display: none;">
                <a href="{{route('solution4')}}" class="solution__item" style="background: url('/img/solutions/solution-4.jpg') center center/cover no-repeat ;">
                    <div class="solution__text">
                        <div class="solution__subtitle">
                            Wallix inside
                        </div>
                        <div class="solution__desc">
                            Встроенные технологии. Кибербезопасность по дизайну для ваших решений
                        </div>
                    </div>
                </a>
                <a href="{{route('solution5')}}" class="solution__item" style="background: url('/img/solutions/solution-5.png') center center/cover no-repeat ;">
                    <div class="solution__text">
                        <div class="solution__subtitle">
                            Решения по отраслям
                        </div>
                        <div class="solution__desc">
                            Мы защищаем ваши данные и обеспечиваем
                            непрерывность ведения бизнеса
                        </div>
                    </div>
                </a>
            </div>
            <div onclick="show(this)" class="solution__btn btn">Все решения</div>
        </div>
    </section>
    <section id="video" class="video">
        <div class="video__bg" style="background: url('/img/background/video-bg.jpg');">
        </div>
        <div class="container">
            <div class="video__title title">
                Видео о нашей работе
            </div>
            <div class="video__desc">
                Видео о нашей работе
            </div>
            <div class="video__block">
                <iframe style='height: 100%; width: 100%'src="https://www.youtube.com/embed/NMiL_aCg9Mc" title="Wallix" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
            <div class="video__line line">
            </div>
        </div>
    </section>

    <x-news></x-news>
    <x-message></x-message>
@endsection
@section('script')
    <script>
        function show(btn) {
            $('#solution').show()
            btn.remove()
        }
    </script>
@endsection
