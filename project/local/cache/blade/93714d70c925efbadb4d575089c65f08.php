<div class="<?php echo e($block); ?> wrapper">
    <div class="<?php echo e($block->elem('container')); ?>">
        <div class="<?php echo e($block->elem('top-container')); ?>">
            <div class="<?php echo e($block->elem('left-content')); ?>">
                <img class="<?php echo e($block->elem('logo')); ?>" src="<?php echo e(\TAO::frontendUrl('img/icons/logo.svg')); ?>" alt="">
                <p>Галактический вестник</p>
            </div>
            <div class="<?php echo e($block->elem('right-content')); ?>">
                <?php echo $topMenu; ?>

                <?php if($user->IsAuthorized()): ?>
                    <div class="<?php echo e($block->elem('auth-menu')); ?>">
                        <p class="<?php echo e($block->elem('auth-item')->mod('user-name')); ?>"><?php echo e($user->GetFullName()); ?></p>
                        <a class="<?php echo e($block->elem('auth-item')); ?>" href="/?logout=yes&<?php echo e($sessionId); ?>">Выйти</a>
                    </div>
                <?php endif; ?>
            </div>
        </div>
        <?php echo $leftMenu; ?>

        <hr class="<?php echo e($block->elem('line')); ?>" <?php if((preg_match('#/news/([\D][\S]*)?$#', $routeName))): ?> style="display: none;" <?php endif; ?>>
    </div>
</div>
<div class="b-layout"><?php /**PATH /var/www/workspace/testbitrix2/www/local/templates/main/frontend/src/block/common/header/header.blade.php ENDPATH**/ ?>