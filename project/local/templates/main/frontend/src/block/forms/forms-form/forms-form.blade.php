<div class="{{ $block }} wrapper">
    <div class="{{ $block->elem('container') }}">
        @if(!empty($arResult["ERROR_MESSAGE"]))
            @foreach($arResult["ERROR_MESSAGE"] as $v)
                <div class="{{ $block->elem('error-message') }}">
                    {{ ShowError($v) }}
                </div>
            @endforeach
        @endif
        @if(!empty($arResult["OK_MESSAGE"]))
            <div class="{{ $block->elem('ok-message') }}">
                {{$arResult["OK_MESSAGE"]}}
            </div>
        @endif

        <form class="{{ $block->elem('form') }}" action="{{ POST_FORM_ACTION_URI }}" method="POST">
            {!! bitrix_sessid_post() !!}

            @foreach($renders as $render)
                {!! $render !!}
            @endforeach

        </form>
    </div>
</div>
