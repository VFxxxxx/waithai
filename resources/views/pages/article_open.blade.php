@extends('base')

@section('content')
    <div class="gray-block article-open">

        @if(!isset($video))
            @include('components.article_category_menu_list')
        @endif

        <div class="container">
            <div class="date">{{ $article->created_at->format('d.m.Y') }}</div>
            <h1 class="page-title">{{ $article->title }}</h1>
            <div class="page-text">{!! $article->text !!}</div>
        </div>
    </div>

    @include('components.wait_for_you_block')
@stop