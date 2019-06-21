@extends('base')

@section('content')
    <div class="page-text container">
        <div class="help-us-block">
            <div class="help-title">Помогите нам стать лучше!</div>
            <div class="help-text">Поделитесь своими впечатлениями о Wai Thai в TripAdvisor:</div>
            <div class="row trip-row">
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <a href="https://www.tripadvisor.ru/Attraction_Review-g295377-d10053842-Reviews-Wai_Thai-Lviv_Lviv_Oblast.html"
                       target="_blank">Львов, Львов / Центр,<br>г. Львов, ул. Фредра, 7</a>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <a href="https://www.tripadvisor.ru/Attraction_Review-g295377-d10053842-Reviews-Wai_Thai-Lviv_Lviv_Oblast.html"
                       target="_blank">Львов, Львов / Центр,<br>г. Львов, ул. Наливайко, 12</a>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <a href="https://www.tripadvisor.ru/Attraction_Review-g294474-d8593374-Reviews-Wai_Thai_Massage-Kiev.html"
                       target="_blank">Киев, Киев / ст. м. «Левобережная»,<br>м. Киев - ул. Никольско-Слободская,
                        2-Б</a>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <a href="https://www.tripadvisor.ru/Attraction_Review-g294474-d8593317-Reviews-Wai_Thai_Massage-Kiev.html"
                       target="_blank">Киев, Киев / ст. м. «пл. Льва Толстого »,<br>м. Киев - ул. Горького (Антоновича),
                        20</a>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <a href="https://www.tripadvisor.ru/Attraction_Review-g294474-d8614999-Reviews-Wai_Thai_Massage-Kiev.html"
                       target="_blank">Киев, Киев / ст. м. «Золотые ворота»,<br>м. Киев - пер. Георгиевский, 2</a>
                </div>
            </div>
        </div>
    </div>

    <div class="content-block reviews-block gray-block">
        <div class="container">
            @foreach($review as $item)
                <div class="item row">
                    <div class="col-sm-5 left-block">
                        <div class="name">{{ $item->name }}</div>
                        <div class="date">{{ $item->created_at->format('d.m.Y') }}</div>
                    </div>
                    <div class="col-sm-7 right-block">
                        {!! $item->text !!}
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <div class="content-block review-block">
        <div class="container">
            <div class="cms_pagination">
                @if ( $review instanceof \Illuminate\Pagination\LengthAwarePaginator )
                    {{ $review->links() }}
                @endif
            </div>
            <div class="block-title">{{ __('messages.review.title') }}</div>
            <form name="review" method="post" id="review-form" novalidate="novalidate" class="row" action="">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <input type="text" id="review_name" name="review[name]" required="required" maxlength="255"
                                   placeholder="ФИО" aria-required="true">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <input type="text" id="review_email" name="review[email]" required="required"
                                   maxlength="255" placeholder="E-mail" aria-required="true">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12">
                        <div class="form-group">
                            <textarea id="review_text" name="review[text]" required="required" maxlength="5000"
                                      placeholder="Отзыв" aria-required="true"></textarea>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12">
                        <div class="form-group">
                            <button type="submit" id="review_send" name="review[send]" class="button">Отправить отзыв
                            </button>
                        </div>
                    </div>
                </div>
                <input type="hidden" id="review_lang" name="review[lang]" maxlength="2" value="ru"></form>

            <div class="loader"><img src="/images/loader.gif"> Ожидайте, отзыв отправляется</div>
        </div>
    </div>
    @include('components.wait_for_you_block')
@stop