@extends('base')

@section('content')
    <div class="gray-block main-text">
        <div class="page-text container">
            @if(isset($pageData))
                {!! $pageData !!}
            @endif
        </div>
    </div>
    @include('components.wait_for_you_block')
@stop