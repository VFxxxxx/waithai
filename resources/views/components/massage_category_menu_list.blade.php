@if(isset($massageCategories))
    <div class="massage-category-list container">
        <div class="row">
            <? $i = 1; ?>
            @foreach($massageCategories as $item)
                <div class="col-lg-3 col-md-6 col-sm-6"><a
                            class="item item-{{ $item->slug }} {{--{{ item.active ? ' active' }}--}}"
                            href="{{ route('massage', $item->slug) }}">
                        {{ $item->title }}
                        <span class="icon {{ $item->slug }}"></span><span class="pointer"></span></a></div>
                @if($i%4 == 0)
                    <div class="clearfix"></div>
                @endif
                <? $i = $i + 1; ?>
            @endforeach
        </div>
    </div>
@endif