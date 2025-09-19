<div class="<?php echo e($block); ?>">
    <div class="<?php echo e($block->elem('container')); ?>">
        <div class="<?php echo e($block->elem('text')); ?>">
            <?php echo e(GetMessage("MFT_" . $name)); ?><?php if($isRequired): ?><span class="<?php echo e($block->elem('required')); ?>">*</span><?php endif; ?>
        </div>
        <textarea class="<?php if($isRequired): ?>required <?php endif; ?><?php echo e($block->elem('field')); ?>" name="<?php echo e($name); ?>"><?php echo e(($arResult[$name] ?? '')); ?></textarea>
    </div>
</div><?php /**PATH /var/www/workspace/testbitrix2/www/local/templates/main/frontend/src/block/forms/forms-fill-textarea/forms-fill-textarea.blade.php ENDPATH**/ ?>