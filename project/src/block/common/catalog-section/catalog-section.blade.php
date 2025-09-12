<div class="{{ $block }} wrapper">
    <div class="{{ $block->elem('container') }}" data-entity="{{ $containerName }}">
        @foreach ($arResult['ITEM_ROWS'] as $rowData)
            <div class="{{ $block->elem('row') }}" data-entity="items-row">
                @switch($rowData['VARIANT'])
                    @case(3)
                        @foreach (array_splice($items, 0, $rowData['COUNT']) as $item)
                            <div class="{{ $block->elem('item') }}">
                                {!! $item !!}
                            </div>
                        @endforeach
                        @break
                @endswitch
            </div>
        @endforeach
    </div>
</div>