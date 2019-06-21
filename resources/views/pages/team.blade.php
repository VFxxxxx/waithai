@extends('base')

@section('content')

    <div class="staff-block">
        <div class="container">
            @if($masters)
                <div class="row staff-list">
                    <?php $i = 1; ?>
                    @foreach($masters as $item)
                        <div class="col-sm-6 col-md-4">
                            <div class="item">
                                @if($item->image)
                                    <div class="image">
                                        <img src="{{ Storage::url($item->image) }}" alt="{{ $item->name }}"
                                             class="img-responsive">
                                    </div>
                                @endif
                                <div class="title">{{ $item->name }}</div>
                                <div class="text">
                                    {!! $item->text  !!}
                                </div>
                                <div class="cert-block">
                                    @if($item->certificate1)
                                        <a href="{{ Storage::url($item->certificate1) }}"
                                           data-fancybox="gallary-{{ $item->id }}">
                                            <img src="{{ Storage::url($item->certificate1) }}" alt="{{ $item->name }}"/>
                                        </a>
                                    @endif
                                    @if($item->certificate2)
                                        <a href="{{ Storage::url($item->certificate2) }}"
                                           data-fancybox="gallary-{{ $item->id }}">
                                            <img src="{{ Storage::url($item->certificate2) }}" alt="{{ $item->name }}"/>
                                        </a>
                                    @endif
                                    @if($item->certificate3)
                                        <a href="{{ Storage::url($item->certificate3) }}"
                                           data-fancybox="gallary-{{ $item->id }}">
                                            <img src="{{ Storage::url($item->certificate3) }}" alt="{{ $item->name }}"/>
                                        </a>
                                    @endif
                                </div>
                            </div>
                        </div>
                        @if($i%3 == 0)
                            <div class="clearfix visible-md visible-lg"></div>
                        @endif
                        @if($i%2 == 0)
                            <div class="clearfix visible-sm"></div>
                        @endif
                        <?php $i = $i + 1; ?>
                    @endforeach
                </div>
            @endif
        </div>
    </div>

    @include('components.wait_for_you_block')
    <script src="//code.jquery.com/jquery-3.3.1.min.js"></script>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.6/dist/jquery.fancybox.min.css"/>
    <script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.6/dist/jquery.fancybox.min.js"></script>
    <style>
        .cert-block {
            font-size: 0;
        }

        .cert-block a {
            display: inline-block;
            vertical-align: top;
            width: 48%;
            margin-right: 4%;
            height: 110px;
            overflow: hidden;
            box-shadow: 0 0 20px 2px rgba(0, 0, 0, .1);
            position: relative;
            margin-top: 14px;
        }

        .cert-block a:nth-child(even) {
            margin-right: 0;
        }

        .cert-block a img {
            width: 100%;
        }

        .cert-block a:before {
            content: '';
            background: #752b3c;
            opacity: 0;
            position: absolute;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            z-index: 2;
            transition: .2s;
        }

        .cert-block a:hover:before {
            opacity: .3;
        }


    </style>
@stop