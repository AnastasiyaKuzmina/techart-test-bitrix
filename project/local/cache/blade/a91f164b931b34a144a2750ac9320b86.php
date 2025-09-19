<div class="<?php echo e($block); ?>">
    <div class="<?php echo e($block->elem('container')); ?>">
        <div class="<?php echo e($block->elem('text')); ?>">
            <?php echo e(GetMessage("MFT_" . $name)); ?><?php if($isRequired): ?><span class="<?php echo e($block->elem('required')); ?>">*</span><?php endif; ?>
        </div>
        <select class="<?php if($isRequired): ?>required <?php endif; ?><?php echo e($block->elem('field')); ?>" name="<?php echo e($name); ?>" id="<?php echo e(strtolower($name)); ?>">
            <option selected disabled value="">Выберите вариант</option>
			<?php $__currentLoopData = $arResult["THEMES"]; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $theme): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
				<option value="<?php echo e($theme['NAME']); ?>"><?php echo e($theme["NAME"]); ?></option>
			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
		</select>
    </div>
</div><?php /**PATH /var/www/workspace/testbitrix2/www/local/templates/main/frontend/src/block/forms/forms-fill-select/forms-fill-select.blade.php ENDPATH**/ ?>