<div class="{{ $block }}">
    <div class="{{ $block->elem('buttons') }} wrapper">
        @foreach ($offices as $key => $value)
            <div class="{{ $block->elem('button') }} office-button" id="button-{{ $key }}" data-map-id="map-{{ $key }}">
                <p class="{{ $block->elem('button-text') }}">{{ $value[0] }}</p>
            </div>
        @endforeach
    </div>
    <div class="{{ $block->elem('maps-container') }}" id='maps-container'>
        @foreach ($offices as $key => $value)
            <div class="{{ $block->elem('map') }} office-map" id="map-{{ $key }}" style="display: none;">
                {!! $renderer->renderBlock('common/map', [
                    'id' => $key,
                    'title' => $value[0], 
                    'address' => $value[1], 
                    'contact' => $value[2], 
                    'coordinates' => $value[3]
                    ]) !!}
            </div>
        @endforeach
    </div>
</div>