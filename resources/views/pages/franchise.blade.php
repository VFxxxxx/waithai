@extends('base')

@section('content')
    <div class="content-block text-block franchise-block">
        <div class="container">
            <div class="page-text">
                <p>Если Вы зашли на эту страницу, значит, Вы заинтересованы в открытии прибыльного и успешного бизнеса в
                    индустрии здоровья и красоты.</p>
                <p>Нам по пути, так как мы, в свою очередь, заинтересованы в надежных и целеустремленных партнерах.</p>
                <p><strong>Пакет услуг поддержки бизнеса партнера от Wai</strong>&nbsp;<strong>Thai:</strong></p>
                <ul>
                    <li>дизайн интерьеров помещения массажного салона;</li>
                    <li>наличие подготовленных и квалифицированных тайских массажистов;</li>
                    <li>консультации по запуску, поддержка периода «start-up»;</li>
                    <li>описание бизнес-процесса, набор необходимых правил, процедур и инструкций для персонала;</li>
                    <li>стажировка и обучение украинского персонала салона.</li>
                </ul>
                <p><strong>По отдельному запросу оказываем помощь:</strong></p>
                <ul>
                    <li>в создании макетов рекламы, а также предоставляем маркетинговые рекомендации по продвижению
                        услуг;
                    </li>
                    <li>в предоставлении контактов поставщиков оборудования и расходных материалов.</li>
                </ul>
                <p><strong>Наши массажисты</strong>&nbsp;– это высококвалифицированные дипломированные специалисты с
                    опытом работы в мировых SPA.</p>
                <p><strong>Работа с нашими специалистами</strong> – это абсолютное отсутствие каких-либо рисков для
                    партнера, так как:</p>
                <ul>
                    <li>мы контролируем процесс оформления документов и получения визы для приезда тайского персонала в
                        Украину;
                    </li>
                    <li>мы занимаемся получением всех необходимых разрешительных документов для легального пребывания
                        тайцев в Украине (разрешение на трудоустройство, легализированный Посольством контракт,
                        временный вид на жительство);
                    </li>
                    <li>мы гарантируем наличие всех медицинских справок согласно требованиям МОЗ Украины.</li>
                </ul>
                <p><strong>Мы гарантируем:</strong></p>
                <ul>
                    <li>содействие в выведении бизнеса на надлежащий уровень;</li>
                    <li>постоянное пребывание массажиста в салоне партнера на протяжении действия контракта;</li>
                    <li>замену массажиста при необходимости;</li>
                    <li>постоянную поддержку менеджера по работе с иностранным персоналом в вопросах расходных
                        материалов и мастеров.
                    </li>
                </ul>
            </div>

            <div class="block-title-red">{{ __('messages.contact.partners.title') }}</div>
            @include('components.contact_for_partners_block')
        </div>
    </div>

    @include('components.wait_for_you_block')
@stop