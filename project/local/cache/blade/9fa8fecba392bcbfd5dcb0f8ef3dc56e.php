<div class="<?php echo e($block); ?>">
    <div class="<?php echo e($block->elem('container')); ?>">
        <div class="<?php echo e($block->elem('text')); ?>">
            <?php echo e(GetMessage("MFT_" . $name)); ?><?php if($isRequired): ?><span class="<?php echo e($block->elem('required')); ?>">*</span><?php endif; ?>
        </div>
        <input class="<?php if($isRequired): ?>required <?php endif; ?><?php echo e($block->elem('field')); ?> <?php echo e($group); ?>" type="<?php echo e($type); ?>" name="<?php echo e($name); ?>" value="<?php echo e($arResult['AUTHOR_' . $name]); ?>">
    </div>
</div><?php /**PATH /var/www/workspace/testbitrix2/www/local/templates/main/frontend/src/block/forms/forms-fill-input/forms-fill-input.blade.php ENDPATH**/ ?>