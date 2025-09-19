<div class="<?php echo e($block); ?>">
    <div class="<?php echo e($block->elem('buttons')); ?> wrapper">
        <?php $__currentLoopData = $offices; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="<?php echo e($block->elem('button')); ?> office-button" id="button-<?php echo e($key); ?>" data-map-id="map-<?php echo e($key); ?>">
                <p class="<?php echo e($block->elem('button-text')); ?>"><?php echo e($value[0]); ?></p>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
    <div class="<?php echo e($block->elem('maps-container')); ?>" id='maps-container'>
        <?php $__currentLoopData = $offices; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="<?php echo e($block->elem('map')); ?> office-map" id="map-<?php echo e($key); ?>" style="display: none;">
                <?php echo $renderer->renderBlock('common/map', [
                    'id' => $key,
                    'title' => $value[0], 
                    'address' => $value[1], 
                    'contact' => $value[2], 
                    'coordinates' => $value[3]
                    ]); ?>

            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
</div><?php /**PATH /var/www/workspace/testbitrix2/www/local/templates/main/frontend/src/block/common/offices/offices.blade.php ENDPATH**/ ?>