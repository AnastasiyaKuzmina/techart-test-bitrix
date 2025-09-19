<div class="<?php echo e($block); ?>" id="<?php echo e($id); ?>">
    <div class="<?php echo e($block->elem('container')); ?>" id="map" data-coordinates="<?php echo e($coordinates); ?>">
        <div class="<?php echo e($block->elem('marker')); ?>" id="marker">
            <div class="<?php echo e($block->elem('popup')); ?> hidden" id="popup">
                <p class="title"><?php echo e($title); ?></p>
                <p class="address"><?php echo e($address); ?></p>
                <p class="contacts"><?php echo e($contacts); ?></p>
            </div>
        </div>
    </div>
    <div class="<?php echo e($block->elem('description')); ?> wrapper">
        <p class="title"><?php echo e($title); ?></p>
        <p class="address"><?php echo e($address); ?></p>
        <p class="contacts"><?php echo e($contacts); ?></p>
    </div>
</div><?php /**PATH /var/www/workspace/testbitrix2/www/local/templates/main/frontend/src/block/common/map/map.blade.php ENDPATH**/ ?>