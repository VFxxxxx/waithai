@extends('base')

@section('content')

    @include('components.salon_list')

    <div class="social text-center">
        <div class="icons">
            <a href="https://www.instagram.com/wai_thai/" class="icon instagram" target="_blank"></a>
            <a href="https://www.facebook.com/WaiThaiUkraine/?fref=ts" class="icon facebook" target="_blank"></a>
        </div>
    </div>

    <div class="content-block contact-block gray-block">
        <div class="container">
            <div class="contact-taxi">
                <div class="icon"></div>
                <div class="icon right"></div>
                Позвоните нам и мы закажем Вам такси:<br><span class="red">+38 (067) 788 88 84</span>
            </div>
            <div class="block-title-red">Контакты для партнеров</div>
            <div class="contact-partners-text"><div class="row"><div class="col-sm-5">По вопросам франчайзинга</div>
                    <div class="col-sm-3 col-md-4 red">+38 (097) 061-65-49</div><div class="col-sm-4 col-md-3">o.suksina@waithai.ua</div></div>
                <div class="row"><div class="col-sm-5">По вопросам маркетинга и рекламы</div><div class="col-sm-3 col-md-4 red"></div><div class="col-sm-4 col-md-3"></div></div>
            </div>
            <div class="block-title-red">Напишите нам</div>
            <div class="contact-form-text">Обратитесь к нам и мы в ближайшее время дадим Вам ответ. Возникли вопросы или сомнения? <br class="hidden-xs">Пишите нам и мы ответим в кратчайшие сроки.</div>
            <form name="contact_placeholder" method="post" id="contact-form" novalidate="novalidate" class="" action="">
                <div class="col-sm-6">
                    <div class="form-group">
                        <input type="text" id="contact_placeholder_name" name="contact_placeholder[name]" required="required" maxlength="255" placeholder="Ваше имя *" aria-required="true">
                    </div>
                    <div class="form-group">
                        <input type="text" id="contact_placeholder_phone" name="contact_placeholder[phone]" maxlength="255" placeholder="Телефон">
                    </div>
                    <div class="form-group">
                        <input type="text" id="contact_placeholder_email" name="contact_placeholder[email]" required="required" maxlength="255" placeholder="E-mail *" aria-required="true">
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <textarea id="contact_placeholder_text" name="contact_placeholder[text]" required="required" maxlength="5000" placeholder="Ваше сообщение *" aria-required="true"></textarea>
                    </div>
                    <div class="form-group">
                        <button type="submit" id="contact_placeholder_send" name="contact_placeholder[send]" class="button">ОТПРАВИТЬ СООБЩЕНИЕ</button>
                    </div>
                </div>
                <input type="hidden" id="contact_placeholder_lang" name="contact_placeholder[lang]" maxlength="2" value="ru"></form>
            <div class="loader"><img src="/images/loader.gif"> Ожидайте, сообщение отправляется</div>
        </div>
    </div>
@stop