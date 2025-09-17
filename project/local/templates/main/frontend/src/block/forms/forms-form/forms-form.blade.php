<div class="{{ $block }} wrapper">
    <div class="{{ $block->elem('container') }}">
        <div class="{{ $block->elem('error-messages') }}" id="error-messages"></div>
        <p class="{{ $block->elem('ok-message') }}" id="ok-message"></p>

        <form class="{{ $block->elem('form') }}" action="{{ POST_FORM_ACTION_URI }}" method="POST" id="feedbackForm">
            {!! bitrix_sessid_post() !!}

            @foreach($renders as $render)
                {!! $render !!}
            @endforeach

        </form>
    </div>
</div>
