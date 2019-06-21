@extends('base')

@section('header')
    @include('components.slider')
@stop


@section('content')
    @include('components.about_us_block')
    @include('components.advantages_block')

    <div class="content-block home-block">
        <div class="container">
            <div class="block-title">
                {{ __('messages.home.title') }}
            </div>
            <div class="block-text page-text">
                <p style="text-align: center;">На нашем сайте вы можете выбрать и оплатить услуги тайского массажа в режиме онлайн, а также заказать подарочные сертификаты на спа-процедуры для родных и близких. Кроме того, здесь вы всегда можете ознакомиться с интересными материалами о массаже и культуре Таиланда, особенностями тайского этикета, акциями и специальными предложениями на услуги массажа, программой лояльности для постоянных клиентов, а так же написать отзыв о вашем посещении салона.</p>
                <p style="text-align: center;">Если вы ищете идеальный тайский массаж – то премиум сеть массажных салонов&nbsp;Wai Thai&nbsp;это всё, в чём нуждается не только ваше тело, но и ваша душа для того, чтобы оставаться здоровыми и молодыми на долгие годы.</p>
            </div>
        </div>
    </div>

    @include('components.wait_for_you_block')

@stop

@section('js')
<script src="{{ asset('assets/js/slick.min.js') }}"></script>
<script type="text/javascript">
    $(document).ready(function () {
        // slider
        if ($('#home_slider .slick-slider').length) {
            $('#home_slider .slick-slider').slick({
                infinite: true,
                dots: true,
                //autoplay: true,
                autoplaySpeed: 4000,
                //fade: true,
                cssEase: 'linear',
                arrows: false,
                swipeToSlide: true
            });
        }
    });
</script>
@stop
