@extends('base')

@section('content')
    <div class="gray-block">
        @if(!isset($video))
            @include('components.article_category_menu_list')
        @endif

        <div class="page-text container">
            @if(isset($pageData))
            {!! $pageData !!}
            @endif
        </div>


        <div class="container">
            <div class="articles-list">

                @foreach($articles as $item)
                    <a href="{{ url(App\Http\Middleware\LocaleMiddleware::getLocale().'/article/'.$item->slug) }}"
                       class="item">
                        <div class="row">
                            <div class="col-sm-3">
                                <div class="image">
                                    <img src="{{ Storage::url($item->image) }}" alt="{{ $item->title }}"
                                         class="w100">
                                </div>
                            </div>
                            <div class="col-sm-9">
                                <div class="date">{{ $item->created_at->format('d.m.Y') }}</div>
                                <div class="title">{{ $item->title }}</div>
                                <div class="text"><?php echo mb_strimwidth($item->text, 0, 160, "...");?></div>
                            </div>
                        </div>
                    </a>
                @endforeach

            </div>
        </div>

    </div>

    <div class="content-block">
        <div class="container">
            @if ( $articles instanceof \Illuminate\Pagination\LengthAwarePaginator )
                {{ $articles->links() }}
            @endif
        </div>
    </div>

    @include('components.wait_for_you_block')
@stop