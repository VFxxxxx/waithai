<div class="modal fade" id="order-form" tabindex="-1" role="dialog" aria-labelledby="myOrderLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true">×</span></button>
                <div class="modal-title" id="myOrderLabel">
                    ЗАКАЗ И ОПЛАТА
                </div>
            </div>
            <div class="modal-body">
                <form id="order-form-inner" novalidate="novalidate">
                    <div class="row">
                        <div class="col-sm-6 form-group"><label for="order-type">Желаемая услуга</label><select
                                    name="order-type" id="order-type" class="form-control" required=""
                                    aria-required="true">
                                <option value=""></option>
                                <option value="massage">Массаж</option>
                                <option value="gift">Сертификат</option>
                            </select></div>
                        <div class="col-sm-6 form-group massage-field"><label for="order-type-massage">Тип
                                массажа</label><select name="order-type-massage" id="order-type-massage"
                                                       class="form-control">
                                <option value=""></option>
                                <optgroup label="В пижамах">
                                    <option value="7">Традиционный тайский массаж</option>
                                    <option value="9">Традиционный массаж тела в 4 руки</option>
                                    <option value="10">Традиционный тайский фут-массаж</option>
                                    <option value="11">Антистрессовый тайский массаж</option>
                                    <option value="12">«Энергетический коктейль»</option>
                                    <option value="13">Тайский массаж лица</option>
                                </optgroup>
                                <optgroup label="С маслом">
                                    <option value="15">Аромамассаж тела в 4 руки</option>
                                    <option value="16">Слим массаж</option>
                                    <option value="18">Аромамассаж тела</option>
                                    <option value="19">Сабай массаж</option>
                                    <option value="20">Сабай массаж в 4 руки</option>
                                    <option value="21">Слим-сабай массаж</option>
                                </optgroup>
                                <optgroup label="SPA">
                                    <option value="23">Массаж теплой аромасвечой</option>
                                    <option value="24">Инь-янь массаж лица</option>
                                    <option value="25">Королевский инь-янь массаж лица</option>
                                    <option value="26">Инь-янь массаж тела</option>
                                    <option value="27">Массаж тайскими травяными мешочками</option>
                                    <option value="28">Стоун-терапия</option>
                                    <option value="29">«Рай на Земле»</option>
                                    <option value="30">«Богиня»</option>
                                    <option value="31">«Рай на Земле для двоих»</option>
                                    <option value="42">Процедура очищения кожи</option>
                                </optgroup>
                                <optgroup label="Детские">
                                    <option value="32">Бейби массаж травяными мешочками + Aнтистресс</option>
                                    <option value="33">Традиционный тайский + Фут бейби массаж</option>
                                    <option value="34">Сабай + Фут бейби массаж</option>
                                    <option value="35">Бейби массаж травяными мешочками</option>
                                    <option value="36">Арома + Фут бейби массаж</option>
                                    <option value="37">Антистрессовый + Фут бейби массаж</option>
                                    <option value="38">Арома бейби массаж</option>
                                    <option value="39">Антистрессовый тайский бейби массаж</option>
                                    <option value="40">Традиционный тайский бейби массаж</option>
                                    <option value="41">Сабай бейби массаж</option>
                                </optgroup>
                            </select></div>
                        <div class="col-sm-6 form-group gift-field"><label
                                    for="order-type-gift">Сертификат</label><select name="order-type-gift"
                                                                                    id="order-type-gift"
                                                                                    class="form-control">
                                <option value=""></option>
                                <option value="1" data-price="800">Инь-Янь массаж лица │ 40 минут</option>
                                <option value="2" data-price="1200">Традиционный тайский массаж │ 60 минут</option>
                                <option value="3" data-price="2000">Традиционный тайский массаж │ 120 минут</option>
                                <option value="4" data-price="4000">Комплекс тайских массажей и SPA процедур «Wai Thai»
                                    │ 150 минут
                                </option>
                                <option value="6" data-price="4700">Комплекс массажей «Энергия Таиланда»</option>
                                <option value="7" data-price="5000">Комплекс тайских массажей и спа-процедур «Рай на
                                    Земле для двоих» │ 150 минут
                                </option>
                            </select></div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6 form-group massage-salon-field"><label for="order-salon">Выберите салон
                                (Львов)</label><select name="order-salon" id="order-salon" class="form-control">
                                <option value=""></option>
                                <option value="8">г. Львов, ул. Фредра, 7</option>
                                <option value="9">г. Львов, ул. Наливайко, 12</option>
                            </select></div>
                        <div class="col-sm-6 form-group massage-time-field"><label for="order-time">Временная
                                зона</label><select name="order-time" id="order-time" class="form-control">
                                <option value=""></option>
                                <option value="lunch">День</option>
                                <option value="evening">Вечер</option>
                            </select></div>
                    </div>
                    <div class="row massage-time-field">
                        <div class="col-sm-6 form-group"><label for="order-length">Продолжительность</label><select
                                    name="order-length" id="order-length" class="form-control">
                                <option value=""></option>
                            </select><select name="order-length-proto" id="order-length-proto"
                                             class="form-control hidden">
                                <option value=""></option>
                                <option class="massage-7" value="91" data-morning="" data-lunch="1000"
                                        data-evening="1200">60 мин
                                </option>
                                <option class="massage-7" value="92" data-morning="" data-lunch="1400"
                                        data-evening="1800">90 мин
                                </option>
                                <option class="massage-7" value="93" data-morning="" data-lunch="1700"
                                        data-evening="2100">120 мин
                                </option>
                                <option class="massage-9" value="98" data-morning="" data-lunch="1900"
                                        data-evening="2400">60 мин
                                </option>
                                <option class="massage-9" value="99" data-morning="" data-lunch="2600"
                                        data-evening="3200">90 мин
                                </option>
                                <option class="massage-9" value="100" data-morning="" data-lunch="3000"
                                        data-evening="3700">120 мин
                                </option>
                                <option class="massage-10" value="15" data-morning="" data-lunch="600"
                                        data-evening="800">30 мин
                                </option>
                                <option class="massage-10" value="101" data-morning="" data-lunch="800"
                                        data-evening="1000">60 мин
                                </option>
                                <option class="massage-11" value="17" data-morning="" data-lunch="700"
                                        data-evening="900">30 мин
                                </option>
                                <option class="massage-11" value="18" data-morning="" data-lunch="1000"
                                        data-evening="1200">60 мин
                                </option>
                                <option class="massage-12" value="20" data-morning="" data-lunch="1600"
                                        data-evening="2000">90 мин
                                </option>
                                <option class="massage-13" value="12" data-morning="" data-lunch="500"
                                        data-evening="600">20 мин
                                </option>
                                <option class="massage-15" value="27" data-morning="" data-lunch="1899"
                                        data-evening="2400">60 мин
                                </option>
                                <option class="massage-15" value="28" data-morning="" data-lunch="2800"
                                        data-evening="3500">90 мин
                                </option>
                                <option class="massage-15" value="29" data-morning="" data-lunch="3600"
                                        data-evening="4500">120 мин
                                </option>
                                <option class="massage-16" value="33" data-morning="" data-lunch="1000"
                                        data-evening="1300">30 мин
                                </option>
                                <option class="massage-16" value="34" data-morning="" data-lunch="1500"
                                        data-evening="1900">60 мин
                                </option>
                                <option class="massage-18" value="35" data-morning="" data-lunch="1500"
                                        data-evening="1900">60 мин
                                </option>
                                <option class="massage-18" value="36" data-morning="" data-lunch="1900"
                                        data-evening="2400">90 мин
                                </option>
                                <option class="massage-18" value="37" data-morning="" data-lunch="2600"
                                        data-evening="3200">120 мин
                                </option>
                                <option class="massage-19" value="38" data-morning="" data-lunch="1500"
                                        data-evening="1900">60 мин
                                </option>
                                <option class="massage-19" value="39" data-morning="" data-lunch="1900"
                                        data-evening="2400">90 мин
                                </option>
                                <option class="massage-19" value="40" data-morning="" data-lunch="2600"
                                        data-evening="3200">120 мин
                                </option>
                                <option class="massage-20" value="41" data-morning="" data-lunch="1900"
                                        data-evening="2400">60 мин
                                </option>
                                <option class="massage-20" value="42" data-morning="" data-lunch="2800"
                                        data-evening="3500">90 мин
                                </option>
                                <option class="massage-20" value="43" data-morning="" data-lunch="3600"
                                        data-evening="4500">120 мин
                                </option>
                                <option class="massage-21" value="106" data-morning="" data-lunch="1800"
                                        data-evening="2200">60 мин
                                </option>
                                <option class="massage-21" value="107" data-morning="" data-lunch="2500"
                                        data-evening="3100">90 мин
                                </option>
                                <option class="massage-21" value="108" data-morning="" data-lunch="3000"
                                        data-evening="3700">120 мин
                                </option>
                                <option class="massage-23" value="54" data-morning="" data-lunch="2100"
                                        data-evening="2600">60 мин
                                </option>
                                <option class="massage-23" value="55" data-morning="" data-lunch="2800"
                                        data-evening="3500">90 мин
                                </option>
                                <option class="massage-24" value="56" data-morning="" data-lunch="700"
                                        data-evening="900">40 мин
                                </option>
                                <option class="massage-25" value="57" data-morning="" data-lunch="1100"
                                        data-evening="1400">60 мин
                                </option>
                                <option class="massage-26" value="102" data-morning="" data-lunch="1500"
                                        data-evening="1900">60 мин
                                </option>
                                <option class="massage-26" value="103" data-morning="" data-lunch="1800"
                                        data-evening="2300">90 мин
                                </option>
                                <option class="massage-27" value="60" data-morning="" data-lunch="1100"
                                        data-evening="1400">30 мин
                                </option>
                                <option class="massage-27" value="61" data-morning="" data-lunch="1700"
                                        data-evening="2100">60 мин
                                </option>
                                <option class="massage-27" value="62" data-morning="" data-lunch="1900"
                                        data-evening="2400">90 мин
                                </option>
                                <option class="massage-28" value="63" data-morning="" data-lunch="1800"
                                        data-evening="2300">60 мин
                                </option>
                                <option class="massage-28" value="64" data-morning="" data-lunch="2100"
                                        data-evening="2600">90 мин
                                </option>
                                <option class="massage-28" value="65" data-morning="" data-lunch="2600"
                                        data-evening="3200">120 мин
                                </option>
                                <option class="massage-29" value="66" data-morning="" data-lunch="2800"
                                        data-evening="3500">120 мин
                                </option>
                                <option class="massage-30" value="67" data-morning="" data-lunch="3200"
                                        data-evening="4000">150 мин
                                </option>
                                <option class="massage-31" value="68" data-morning="" data-lunch="5000"
                                        data-evening="6200">150 мин
                                </option>
                                <option class="massage-42" value="104" data-morning="" data-lunch="400"
                                        data-evening="600">30 мин
                                </option>
                                <option class="massage-32" value="69" data-morning="" data-lunch="1200"
                                        data-evening="1200">90 мин
                                </option>
                                <option class="massage-32" value="70" data-morning="" data-lunch="1400"
                                        data-evening="1400">120 мин
                                </option>
                                <option class="massage-33" value="71" data-morning="" data-lunch="1000"
                                        data-evening="1000">90 мин
                                </option>
                                <option class="massage-34" value="72" data-morning="" data-lunch="1000"
                                        data-evening="1000">60 мин
                                </option>
                                <option class="massage-34" value="73" data-morning="" data-lunch="1200"
                                        data-evening="1200">90 мин
                                </option>
                                <option class="massage-35" value="74" data-morning="" data-lunch="1000"
                                        data-evening="1000">60 мин
                                </option>
                                <option class="massage-36" value="75" data-morning="" data-lunch="1000"
                                        data-evening="1000">60 мин
                                </option>
                                <option class="massage-37" value="76" data-morning="" data-lunch="700"
                                        data-evening="700">60 мин
                                </option>
                                <option class="massage-38" value="77" data-morning="" data-lunch="600"
                                        data-evening="600">30 мин
                                </option>
                                <option class="massage-38" value="78" data-morning="" data-lunch="800"
                                        data-evening="800">60 мин
                                </option>
                                <option class="massage-39" value="79" data-morning="" data-lunch="400"
                                        data-evening="400">30 мин
                                </option>
                                <option class="massage-39" value="80" data-morning="" data-lunch="700"
                                        data-evening="700">60 мин
                                </option>
                                <option class="massage-40" value="81" data-morning="" data-lunch="500"
                                        data-evening="500">30 мин
                                </option>
                                <option class="massage-40" value="82" data-morning="" data-lunch="700"
                                        data-evening="700">60 мин
                                </option>
                                <option class="massage-41" value="83" data-morning="" data-lunch="600"
                                        data-evening="600">30 мин
                                </option>
                            </select></div>
                    </div>
                    <div class="modal-sep"></div>
                    <label>Пожалуйста, оставьте свою контактную информацию</label>
                    <div class="person-line">
                        <div class="form-group"><input type="text" placeholder="Имя *" name="name" id="order-name"
                                                       required="" aria-required="true"></div>
                        <div class="form-group"><input type="text" placeholder="Телефон *" name="phone" id="order-phone"
                                                       required="" aria-required="true"></div>
                        <div class="form-group"><input type="text" placeholder="E-Mail" name="email" id="order-email">
                        </div>
                    </div>
                    <div class="price-line"><span class="price-title">К оплате:</span><span class="massage-field">К оплате за массаж:</span><span
                                class="gift-field">К оплате за сертификат:</span><span class="price-block"><span
                                    id="order-price" class="price">0</span>&nbsp;грн</span></div>
                    <div class="subprice-line gift-field">
                        Стоимость доставки – 80 грн., оплачивается дополнительно.
                    </div>
                    <div class="btn-line">
                        <button type="submit" id="order-btn" class="button2" disabled="">Перейти к оплате</button>
                        <br class="visible-xs"><img src="{{ asset('assets/images/visa.png') }}" alt="visa" class="pay-icon"><img
                                src="{{ asset('assets/images/mastercard.png') }}" alt="mastercard" class="pay-icon"><img
                                src="{{ asset('assets/images/privat.png') }}" alt="privat" class="pay-icon"></div>
                    <input type="hidden" value="ru" name="language"></form>
                <div class="loader"><img src="{{ asset('assets/images/loader.gif') }}"></div>
            </div>
        </div>
    </div>
</div>