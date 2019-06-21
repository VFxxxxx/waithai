@extends('base')

@section('content')
    <div class="page-text container">
        <p>&nbsp;</p>
        <p>Мы знаем, как порой хочется поделиться положительными эмоциями и незабываемыми&nbsp;впечатлениями&nbsp;с
            самыми близкими для нас людьми. И предлагаем Вам прекрасную возможность разделить магию тайских массажей и
            спа&nbsp;с вашими родными и близкими.&nbsp;Ведь согласитесь всегда приятнее дарить не вещи, а
            впечатления!</p>
        <p>Мы предлагаем Вашему вниманию несколько вариантов Подарочных сертификатов, которые включают в себя
            оптимальную комбинацию наиболее популярных услуг, предоставляемых сетью салонов WaiThai:</p>
        <p>&nbsp;</p>
    </div>

    <div class="content-block gift-block gray-block">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 item-wrap">
                    <div class="item">
                        <div class="image">
                            <img data-toggle="modal" data-target="#gift-modal-1"
                                 src="{{ asset('assets/images/gift/daa6e983c3f4a6356740d35654e8efbd18fdc9f1.png') }}"
                                 alt="Инь-Янь массаж лица │ 40 минут" class="w100">
                        </div>
                        <div class="title">Инь-Янь массаж лица │ 40 минут</div>
                        <div class="price-line">Стоимость сертификата составляет: <span
                                    class="price">800&nbsp;грн</span></div>
                        <button class="button2" data-toggle="modal" data-target="#gift-modal-1">Подробнее</button>

                        <div class="modal fade gift-modal" id="gift-modal-1" tabindex="-1" role="dialog"
                             aria-labelledby="myModalLabel">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">×</span></button>
                                        <div class="modal-title" id="myModalLabel">
                                            Инь-Янь массаж лица │ 40 минут
                                        </div>
                                    </div>
                                    <div class="modal-body">
                                        <div class="image-block">
                                            <img src="{{ asset('assets/images/gift/2680b9442787c7675c313d14c472a401e137c751.jpeg') }}"
                                                 alt="Инь-Янь массаж лица │ 40 минут" class="w100">
                                        </div>
                                        <div class="page-text">
                                            <p>Предъявитель данного сертификата имеет право на единоразовое посещение
                                                основной процедуры&nbsp;«Инь-Янь массаж лица»,&nbsp;продолжительностью
                                                40 минут,</p>
                                            <p><strong>или же одного из сеансов на выбор</strong>:</p>
                                            <ul>
                                                <li><em>Традиционный Тайский Фут-массаж</em><em>, 30 минут</em></li>
                                                <li><em>Антистрессовый Тайский массаж</em><em>, 30 минут</em></li>
                                                <li><em>Тайский массаж лица</em><em>, 20 минут</em></li>
                                                <li><em>Очищение кожи</em><em>, 30 минут</em></li>
                                            </ul>
                                        </div>
                                        <div class="price-line2">Стоимость сертификата составляет: <span class="price">800&nbsp;грн</span>
                                        </div>

                                        <div class="btn-line">
                                            <button type="button" class="button2 order-item" data-toggle="modal"
                                                    data-target="#order-form" data-type="gift" data-item="1">Заказать
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-sm-6 item-wrap">
                    <div class="item">
                        <div class="image">
                            <img data-toggle="modal" data-target="#gift-modal-2"
                                 src="{{ asset('assets/images/gift/dca0a252b7ea4a76de791827bf20f8e7f9d4af4c.png') }}"
                                 alt="Традиционный тайский массаж │ 60 минут" class="w100">
                        </div>
                        <div class="title">Традиционный тайский массаж │ 60 минут</div>
                        <div class="price-line">Стоимость сертификата составляет: <span
                                    class="price">1200&nbsp;грн</span></div>
                        <button class="button2" data-toggle="modal" data-target="#gift-modal-2">Подробнее</button>

                        <div class="modal fade gift-modal" id="gift-modal-2" tabindex="-1" role="dialog"
                             aria-labelledby="myModalLabel">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">×</span></button>
                                        <div class="modal-title" id="myModalLabel">
                                            Традиционный тайский массаж │ 60 минут
                                        </div>
                                    </div>
                                    <div class="modal-body">
                                        <div class="image-block">
                                            <img src="{{ asset('assets/images/gift/f9e11c1e823a368baab98099751632e7d38eb1c9.jpeg') }}"
                                                 alt="Традиционный тайский массаж │ 60 минут" class="w100">
                                        </div>
                                        <div class="page-text">
                                            <p>&nbsp;</p>
                                            <p>Предъявитель данного сертификата имеет право на единоразовое посещение
                                                основной процедуры&nbsp;«Традиционный тайский массаж»,&nbsp;продолжительностью
                                                60 минут,</p>
                                            <p><strong>или же одного из сеансов на выбор</strong>:</p>
                                            <ul>
                                                <li><em>Королевский Инь-Янь массаж лица</em><em>, 60 минут</em></li>
                                                <li><em>Антистрессовый Тайский массаж</em><em>, 60 минут</em></li>
                                                <li><em>Традиционный Тайский Фут-массаж</em><em>, 60 минут</em></li>
                                            </ul>
                                        </div>
                                        <div class="price-line2">Стоимость сертификата составляет: <span class="price">1200&nbsp;грн</span>
                                        </div>

                                        <div class="btn-line">
                                            <button type="button" class="button2 order-item" data-toggle="modal"
                                                    data-target="#order-form" data-type="gift" data-item="2">Заказать
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="clearfix hidden-xs"></div>
                <div class="col-sm-6 item-wrap">
                    <div class="item">
                        <div class="image">
                            <img data-toggle="modal" data-target="#gift-modal-3"
                                 src="{{ asset('assets/images/gift/662aacdcc9e03b1295fc81e20cea60099011ebae.png') }}"
                                 alt="Традиционный тайский массаж │ 120 минут" class="w100">
                        </div>
                        <div class="title">Традиционный тайский массаж │ 120 минут</div>
                        <div class="price-line">Стоимость сертификата составляет: <span
                                    class="price">2000&nbsp;грн</span></div>
                        <button class="button2" data-toggle="modal" data-target="#gift-modal-3">Подробнее</button>

                        <div class="modal fade gift-modal" id="gift-modal-3" tabindex="-1" role="dialog"
                             aria-labelledby="myModalLabel">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">×</span></button>
                                        <div class="modal-title" id="myModalLabel">
                                            Традиционный тайский массаж │ 120 минут
                                        </div>
                                    </div>
                                    <div class="modal-body">
                                        <div class="image-block">
                                            <img src="{{ asset('assets/images/gift/df62219847db049195a7e21ec030ff57d7884751.jpeg') }}"
                                                 alt="Традиционный тайский массаж │ 120 минут" class="w100">
                                        </div>
                                        <div class="page-text">
                                            <p>&nbsp;</p>
                                            <p>Предъявитель данного сертификата имеет право на единоразовое посещение
                                                основной процедуры&nbsp;«Традиционный Тайский Массаж»,&nbsp;продолжительностью
                                                120 минут,</p>
                                            <p><strong>или же одного из сеансов на выбор:</strong></p>
                                            <ul>
                                                <li><em>Стоун терапия</em><em>, 90 минут</em></li>
                                                <li><em>Сабай массаж</em><em>, 90 мин</em></li>
                                                <li><em>Энергетический коктейль</em><em>, 90 минут</em></li>
                                                <li><em>Арома массаж</em><em>, 90 минут</em></li>
                                                <li><em>Арома массаж или&nbsp;Сабай&nbsp;массаж&nbsp;в 4 руки, 60
                                                        минут</em></li>
                                                <li><em>Слим-массаж&nbsp;</em><em>или&nbsp;Слим-Сабай&nbsp;массаж, 60
                                                        минут</em></li>
                                                <li><em>Инь-Янь массаж тела</em><em>, 90 минут</em></li>
                                                <li><em>Массаж тайскими травяными мешочками</em><em>, 90 минут</em></li>
                                            </ul>
                                        </div>
                                        <div class="price-line2">Стоимость сертификата составляет: <span class="price">2000&nbsp;грн</span>
                                        </div>

                                        <div class="btn-line">
                                            <button type="button" class="button2 order-item" data-toggle="modal"
                                                    data-target="#order-form" data-type="gift" data-item="3">Заказать
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-sm-6 item-wrap">
                    <div class="item">
                        <div class="image">
                            <img data-toggle="modal" data-target="#gift-modal-4"
                                 src="{{ asset('assets/images/gift/19859cee50c1015053607418e3e9ff550fdbe476.png') }}"
                                 alt="Комплекс тайских массажей и SPA процедур «Wai Thai» │ 150 минут" class="w100">
                        </div>
                        <div class="title">Комплекс тайских массажей и SPA процедур «Wai Thai» │ 150 минут</div>
                        <div class="price-line">Стоимость сертификата составляет: <span
                                    class="price">4000&nbsp;грн</span></div>
                        <button class="button2" data-toggle="modal" data-target="#gift-modal-4">Подробнее</button>

                        <div class="modal fade gift-modal" id="gift-modal-4" tabindex="-1" role="dialog"
                             aria-labelledby="myModalLabel">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">×</span></button>
                                        <div class="modal-title" id="myModalLabel">
                                            Комплекс тайских массажей и SPA процедур «Wai Thai» │ 150 минут
                                        </div>
                                    </div>
                                    <div class="modal-body">
                                        <div class="image-block">
                                            <img src="{{ asset('assets/images/gift/6a48e1004ca37bf4d829fa7d3f9f9ea8c2ebd366.jpeg') }}"
                                                 alt="Комплекс тайских массажей и SPA процедур «Wai Thai» │ 150 минут"
                                                 class="w100">
                                        </div>
                                        <div class="page-text">
                                            <p>Предъявитель данного сертификата имеет право на единоразовое посещение
                                                основной процедуры&nbsp;«Комплекс тайских массажей и спа-процедур
                                                «Богиня»,&nbsp;продолжительностью 150 минут,&nbsp;</p>
                                            <p><strong>или же одного из сеансов на выбор</strong>:</p>
                                            <ul>
                                                <li><em>Богиня</em><em>&nbsp;120 минут</em></li>
                                                <li><em>Рай на Земле 120 минут</em></li>
                                                <li>Массаж теплой аромасвечей 90 минут</li>
                                                <li><em>Любой массаж, продолжительностью&nbsp;120 минут</em></li>
                                            </ul>
                                        </div>
                                        <div class="price-line2">Стоимость сертификата составляет: <span class="price">4000&nbsp;грн</span>
                                        </div>

                                        <div class="btn-line">
                                            <button type="button" class="button2 order-item" data-toggle="modal"
                                                    data-target="#order-form" data-type="gift" data-item="4">Заказать
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="clearfix hidden-xs"></div>
                <div class="col-sm-6 item-wrap">
                    <div class="item">
                        <div class="image">
                            <img data-toggle="modal" data-target="#gift-modal-6"
                                 src="{{ asset('assets/images/gift/8b96b6d9f2ded86ed9e77a5e29edf49f30be8928.png') }}"
                                 alt="Комплекс массажей «Энергия Таиланда»" class="w100">
                        </div>
                        <div class="title">Комплекс массажей «Энергия Таиланда»</div>
                        <div class="price-line">Стоимость сертификата составляет: <span
                                    class="price">4700&nbsp;грн</span></div>
                        <button class="button2" data-toggle="modal" data-target="#gift-modal-6">Подробнее</button>

                        <div class="modal fade gift-modal" id="gift-modal-6" tabindex="-1" role="dialog"
                             aria-labelledby="myModalLabel">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">×</span></button>
                                        <div class="modal-title" id="myModalLabel">
                                            Комплекс массажей «Энергия Таиланда»
                                        </div>
                                    </div>
                                    <div class="modal-body">
                                        <div class="image-block">
                                            <img src="{{ asset('assets/images/gift/fbe504d15f88f91346ecb13c6ffb8395a3a6806e.jpeg') }}"
                                                 alt="Комплекс массажей «Энергия Таиланда»" class="w100">
                                        </div>
                                        <div class="page-text">
                                            <p>&nbsp;</p>
                                            <p>Предъявитель данного сертификата имеет право на единоразовое посещение
                                                каждого из перечисленных ниже массажей:</p>
                                            <ul>
                                                <li><em>Традиционный Тайский массаж</em><em>, 90 мин</em></li>
                                                <li><em>Тайский Сабай-массаж</em><em>, 90 мин</em></li>
                                                <li><em>Энергетический коктейль</em><em>, 90 мин</em></li>
                                            </ul>
                                        </div>
                                        <div class="price-line2">Стоимость сертификата составляет: <span class="price">4700&nbsp;грн</span>
                                        </div>

                                        <div class="btn-line">
                                            <button type="button" class="button2 order-item" data-toggle="modal"
                                                    data-target="#order-form" data-type="gift" data-item="6">Заказать
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-sm-6 item-wrap">
                    <div class="item">
                        <div class="image">
                            <img data-toggle="modal" data-target="#gift-modal-7"
                                 src="{{ asset('assets/images/gift/02969638e99598cab3fdee8275fe885191f28024.png') }}"
                                 alt="Комплекс тайских массажей и спа-процедур «Рай на Земле для двоих» │ 150 минут"
                                 class="w100">
                        </div>
                        <div class="title">Комплекс тайских массажей и спа-процедур «Рай на Земле для двоих» │ 150
                            минут
                        </div>
                        <div class="price-line">Стоимость сертификата составляет: <span
                                    class="price">5000&nbsp;грн</span></div>
                        <button class="button2" data-toggle="modal" data-target="#gift-modal-7">Подробнее</button>

                        <div class="modal fade gift-modal" id="gift-modal-7" tabindex="-1" role="dialog"
                             aria-labelledby="myModalLabel">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">×</span></button>
                                        <div class="modal-title" id="myModalLabel">
                                            Комплекс тайских массажей и спа-процедур «Рай на Земле для двоих» │ 150
                                            минут
                                        </div>
                                    </div>
                                    <div class="modal-body">
                                        <div class="image-block">
                                            <img src="{{ asset('assets/images/gift/812ef66e391796cdfc301fa2f06d73d87300d814.jpeg') }}"
                                                 alt="Комплекс тайских массажей и спа-процедур «Рай на Земле для двоих» │ 150 минут"
                                                 class="w100">
                                        </div>
                                        <div class="page-text">
                                            <p>&nbsp;</p>
                                            <p>Предъявитель данного сертификата имеет право на единоразовое посещение
                                                основной процедуры&nbsp;«Комплекс тайских массажей и спа-процедур «Рай
                                                на земле для двоих»,&nbsp;продолжительностью 150 минут,</p>
                                            <p><strong>или же</strong>:</p>
                                            <ul>
                                                <li><em>любого массажа для двоих, продолжительностью&nbsp;120 минут</em>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="price-line2">Стоимость сертификата составляет: <span class="price">5000&nbsp;грн</span>
                                        </div>

                                        <div class="btn-line">
                                            <button type="button" class="button2 order-item" data-toggle="modal"
                                                    data-target="#order-form" data-type="gift" data-item="7">Заказать
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="clearfix hidden-xs"></div>
            </div>
        </div>
    </div>
    <div class="white-block"></div>
    @include('components.wait_for_you_block')
@stop