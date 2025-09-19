<div class="<?php echo e($block); ?> wrapper">
    <div class="<?php echo e($block->elem('container')); ?>">
        <div class="<?php echo e($block->elem('error-messages')); ?>" id="error-messages"></div>
        <p class="<?php echo e($block->elem('ok-message')); ?>" id="ok-message"></p>

        <form class="<?php echo e($block->elem('form')); ?>" action="<?php echo e(POST_FORM_ACTION_URI); ?>" method="POST" id="feedbackForm">
            <?php echo bitrix_sessid_post(); ?>


            <?php $__currentLoopData = $renders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $render): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php echo $render; ?>

            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        </form>
    </div>
</div>
<?php /**PATH /var/www/workspace/testbitrix2/www/local/templates/main/frontend/src/block/forms/forms-form/forms-form.blade.php ENDPATH**/ ?>