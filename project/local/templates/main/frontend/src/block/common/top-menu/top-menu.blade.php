@if (!empty($arResult))
<nav class="{{ $block }}">
    <div class="{{ $block->elem('container') }}">
        @foreach ($arResult as $arItem)
            @if ($arItem['DEPTH_LEVEL'] === 1)
                @if($arItem["SELECTED"])
                    <a href="{{ $arItem['LINK'] }}" class="{{ $block->elem('menu-item')->mod('selected') }}">{{ $arItem['TEXT'] }}</a>
                @else
                    <a href="{{ $arItem['LINK'] }}" class="{{ $block->elem('menu-item') }}">{{ $arItem['TEXT'] }}</a>
                @endif
            @endif
        @endforeach
    </div>
</nav>
@endif