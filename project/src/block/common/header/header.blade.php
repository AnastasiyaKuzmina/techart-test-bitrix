<div class="{{ $block }} wrapper">
    <div class="{{ $block->elem('container') }}">
        <div class="{{ $block->elem('top-container') }}">
            <div class="{{ $block->elem('left-content') }}">
                <img class="{{ $block->elem('logo') }}" src="{{ \TAO::frontendUrl('img/icons/logo.svg') }}" alt="">
                <p>Галактический вестник</p>
            </div>
            <div class="{{ $block->elem('right-content') }}">
                {!! $topMenu !!}
                @if ($user->IsAuthorized())
                    <div class="{{ $block->elem('auth-menu') }}">
                        <p class="{{ $block->elem('auth-item')->mod('user-name') }}">{{ $user->GetFullName() }}</p>
                        <a class="{{ $block->elem('auth-item') }}" href="/?logout=yes&{{ $sessionId }}">Выйти</a>
                    </div>
                @endif
            </div>
        </div>
        {!! $leftMenu !!}
        <hr class="{{ $block->elem('line') }}" @if((preg_match('#/news/([\D][\S]*)?$#', $routeName))) style="display: none;" @endif>
    </div>
</div>