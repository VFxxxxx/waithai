@extends('base')

@section('content')

    <div class="partner-block gray-block">
        <div class="container">
            @if($data)
                <div class="row stock-list">
                    <?php $i = 1; ?>
                    @foreach($data as $item)
                        <div class="col-sm-6 col-md-3">
                            <div class="item">
                                @if($item->image)
                                    <div class="image">
                                        <img src="{{ Storage::url($item->image) }}" alt="{{ $item->title }}"
                                             class="w100">
                                    </div>
                                @endif
                                <div class="title">{{ $item->title }}</div>
                            </div>
                        </div>
                        @if($i%4 == 0)
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

    <div class="content-block">
        <div class="block-title">{{ __('messages.contact.partners.title') }}</div>
        @include('components.contact_for_partners_block')
    </div>

    @include('components.wait_for_you_block')
@stop