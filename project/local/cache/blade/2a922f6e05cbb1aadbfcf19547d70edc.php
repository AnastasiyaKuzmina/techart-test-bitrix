<div class="<?php echo e($block); ?> wrapper">
    <div class="<?php echo e($block->elem('container')); ?>" data-entity="<?php echo e($containerName); ?>">
        <?php $__currentLoopData = $arResult['ITEM_ROWS']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rowData): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="<?php echo e($block->elem('row')); ?>" data-entity="items-row">
                <?php switch($rowData['VARIANT']):
                    case (3): ?>
                        <?php $__currentLoopData = array_splice($items, 0, $rowData['COUNT']); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="<?php echo e($block->elem('item')); ?>">
                                <?php echo $item; ?>

                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <?php break; ?>
                <?php endswitch; ?>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
</div><?php /**PATH /var/www/workspace/testbitrix2/www/local/templates/main/frontend/src/block/common/catalog-section/catalog-section.blade.php ENDPATH**/ ?>