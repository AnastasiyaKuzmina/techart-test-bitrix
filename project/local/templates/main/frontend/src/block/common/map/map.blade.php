<div class="{{ $block }}" id="{{ $id }}">
    <div class="{{ $block->elem('container') }}" id="map" data-coordinates="{{ $coordinates }}">
        <div class="{{ $block->elem('marker') }}" id="marker">
            <div class="{{ $block->elem('popup') }} hidden" id="popup">
                <p class="title">{{ $title }}</p>
                <p class="address">{{ $address }}</p>
                <p class="contacts">{{ $contacts }}</p>
            </div>
        </div>
    </div>
    <div class="{{ $block->elem('description') }} wrapper">
        <p class="title">{{ $title }}</p>
        <p class="address">{{ $address }}</p>
        <p class="contacts">{{ $contacts }}</p>
    </div>
</div>