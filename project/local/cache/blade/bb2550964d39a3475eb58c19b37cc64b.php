<div class="<?php echo e($block); ?> wrapper">
    <div class="<?php echo e($block->elem('container')); ?>">
        <?php if(!empty($arResult)): ?>
            <?php $__currentLoopData = $arResult; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $arItem): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="<?php echo e($block->elem('item')); ?>">
                    <?php echo $renderer->renderBlock('common/news-item', ['arItem' => $arItem, 'itemId' => $itemId]); ?>

                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php endif; ?>
    </div>
</div><?php /**PATH /var/www/workspace/testbitrix2/www/local/templates/main/frontend/src/block/common/news-list/news-list.blade.php ENDPATH**/ ?>