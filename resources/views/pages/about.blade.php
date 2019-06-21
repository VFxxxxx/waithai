@extends('base')

@section('content')
    @include('components.about_us_block')
    @include('components.advantages_block')

    <div class="content-block text-block">
        <div class="container">
            <div class="block-text page-text">
                <p style="text-align: center;">Cеть массажных салонов Wai Thai является лидером в сфере предоставления услуг традиционного тайского массажа на протяжении вот уже более 11 лет! В сети массажных салонов Wai Thai предоставляются такие услуги: традиционный массаж, SPA-процедуры, тайский массаж для детей, антицеллюлитный массаж, ойл-массаж, лимфодренажный массаж и многие другие процедуры, которые базируются на традициях и многолетнем опыте тайской народной медицины.</p>
            </div>
        </div>
    </div>

    @include('components.wait_for_you_block')

@stop