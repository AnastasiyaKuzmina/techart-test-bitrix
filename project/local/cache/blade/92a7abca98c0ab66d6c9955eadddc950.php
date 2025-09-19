<div class="<?php echo e($block); ?>">
    <div class="<?php echo e($block->elem('block')); ?>" style="background-image:url('<?php echo e($arResult['ITEMS'][0]['DETAIL_PICTURE']['SRC']); ?>');">
        <div class="<?php echo e($block->elem('text')); ?>">
            <h2 class="<?php echo e($block->elem('header')); ?>"><?php echo e($arResult['ITEMS'][0]['NAME']); ?></h2>
            <p class="<?php echo e($block->elem('announce')); ?>"><?php echo e(strip_tags($arResult['ITEMS'][0]['PREVIEW_TEXT'])); ?></p>
        </div>
    </div>
</div>
<?php /**PATH /var/www/workspace/testbitrix2/www/local/templates/main/frontend/src/block/common/news-banner/news-banner.blade.php ENDPATH**/ ?>