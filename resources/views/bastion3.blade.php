
<x-layout>
<x-header>

</x-header>
<section
    class="preview"
    style="background: url('./img/background/priview-bg.png') no-repeat"
>
    <img src="./img/background/preview-2.png" alt="" />
    <div class="container">
        <div class="preview__body">
            <h1 class="preview__title">Wallix Bastion
                Пробная версия</h1>
            <div class="preview__desc">
                Опробуйте отмеченное наградами решение Wallix для управления привилегированным доступом совершенно бесплатно
            </div>
            <button class="preview__btn btn">Подробно</button>
        </div>
    </div>
</section>
<section class="pack pack--white">
    <div class="container">
        <div class="pack__title pack__title--p title">Попробуйте WALLIX Bastion
            бесплатно в течение месяца</div>
        <div class="pack__desc">
            Wallix Bastion это универсальная сертифицированная
            платформа управления привилегированным доступом
        </div>
        <div class="pack__row row">
            <img src="./img/pack-4.jpg" />
            <div class="pack__item">
                <div class="pack__text text">
                    <ul>
                        <li>Аудит и соответствие</li>
                        <li>Кибератаки и внутренние угрозы</li>
                        <li>Сторонний мониторинг и дистанционное управление</li>
                        <li>Сертифицированное решение «все в одном»</li>
                        <li>Полная видимость</li>
                        <li>Гарантированное принятие пользователем</li>
                        <li>Ненавязчивое и быстрое развертывание</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="form">
    <div class="container">
        <div class="form__body">
            <div class="form__title title">Форма обратной связи</div>
            <div class="form__desc">
                Хотите испытать наши решения? Свяжитесь с нами. Мы не шлем спам,
                и не передаём никому ваши данные.
            </div>
            <div class="form__subtitle">Меня интересует</div>
            <div class="form__subdesc">
                Пожалуйста, выберите хотя бы один вариант
            </div>
            <form action="#">
                <div class="form__check">
                    <div class="form__checkbox">
                        <input id="cb1" type="checkbox" checked />
                        <label for="cb1">Wallix Bastion</label>
                    </div>
                    <div class="form__checkbox">
                        <input id="cb2" type="checkbox" />
                        <label for="cb2">Wallix Trustelem</label>
                    </div>
                    <div class="form__checkbox">
                        <input id="cb3" type="checkbox" />
                        <label for="cb3">Wallix BestSafe</label>
                    </div>
                </div>
                <div class="form__row">
                    <div class="form__left">
                        <input type="text" placeholder="Имя" />
                        <input type="text" placeholder="Фамилия" />
                        <input type="email" placeholder="Электронная почта" />
                        <input type="text" placeholder="Телефон" />
                        <input type="text" placeholder="Название компании" />
                        <select class="form__select">
                            <option>Страна</option>
                        </select>
                        <select class="form__select">
                            <option>Промышленность</option>
                        </select>
                    </div>
                    <div class="form__right">
                        <textarea placeholder="Сообщение"></textarea>
                        <div class="form__agree">
                            Ознакомьтесь с <span>Политикой конфиденциальности</span>
                        </div>
                        <div class="form__btn btn">Отправить</div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>
<x-footer>

</x-footer>
<script src="js/script.min.js"></script>
</x-layout>
