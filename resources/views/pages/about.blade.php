@extends('base')

@section('content')
    @include('components.about_us_block')
    @include('components.advantages_block')

    <div class="content-block text-block">
        <div class="container">
            <div class="block-text page-text">
                @if(isset($pageData))
                    {!! $pageData !!}
                @endif
            </div>
        </div>
    </div>

    @include('components.wait_for_you_block')

@stop