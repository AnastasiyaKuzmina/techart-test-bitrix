<?php if(!empty($arResult)): ?>
<nav class="<?php echo e($block); ?>">
    <hr class="<?php echo e($block->elem('line')); ?>" >
    <div class="<?php echo e($block->elem('container')); ?>">
        <?php $__currentLoopData = $arResult; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $arItem): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php if($arItem['DEPTH_LEVEL'] === 1): ?>
                <?php if($arItem["SELECTED"]): ?>
                    <a href="<?php echo e($arItem['LINK']); ?>" class="<?php echo e($block->elem('menu-item')->mod('selected')); ?>"><?php echo e($arItem['TEXT']); ?></a>
                <?php else: ?>
                    <a href="<?php echo e($arItem['LINK']); ?>" class="<?php echo e($block->elem('menu-item')); ?>"><?php echo e($arItem['TEXT']); ?></a>
                <?php endif; ?>
            <?php endif; ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
</nav>
<?php endif; ?><?php /**PATH /var/www/workspace/testbitrix2/www/local/templates/main/frontend/src/block/common/left-menu/left-menu.blade.php ENDPATH**/ ?>