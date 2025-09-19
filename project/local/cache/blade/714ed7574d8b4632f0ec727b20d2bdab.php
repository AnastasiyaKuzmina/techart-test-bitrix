<div class="<?php echo e($block); ?>">
    <div class="<?php echo e($block->elem('container')); ?>">
        <input type="hidden" name="PARAMS_HASH" value="<?php echo e($arResult['PARAMS_HASH']); ?>">
        <input class="<?php echo e($block->elem('field')); ?>" type="submit" name="<?php echo e(strtolower($name)); ?>" value="<?php echo e(GetMessage('MFT_' . $name)); ?>">
    </div>
</div><?php /**PATH /var/www/workspace/testbitrix2/www/local/templates/main/frontend/src/block/forms/forms-fill-button/forms-fill-button.blade.php ENDPATH**/ ?>