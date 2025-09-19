<div class="<?php echo e($block); ?>" id="<?php echo e($itemId); ?>">
    <div class="<?php echo e($block->elem('container')); ?>">
        <p class="<?php echo e($block->elem('date')); ?>"><?php echo e(date('d.m.Y', strtotime($arItem['FIELDS']['TAGS']))); ?></p>
        <h2 class="<?php echo e($block->elem('title')); ?>"><?php echo e($arItem['NAME']); ?></h2>
        <p class="<?php echo e($block->elem('description')); ?>"><?php echo e(strip_tags($arItem['PREVIEW_TEXT'])); ?></p>
        <a class="<?php echo e($block->elem('button-link')); ?>" href="<?php echo e($arItem['DETAIL_PAGE_URL']); ?>">
            <div class="<?php echo e($block->elem('button-container')); ?>">
                <p class="<?php echo e($block->elem('button-text')); ?>">Подробнее</p>
                <img class="<?php echo e($block->elem('button-icon')); ?>" src="<?php echo e(\TAO::frontendUrl('img/icons/Arrow.svg')); ?>" data-active="<?php echo e(\TAO::frontendUrl('img/icons/WhiteArrow.svg')); ?>" alt="">
            </div>
        </a>
    </div>
</div><?php /**PATH /var/www/workspace/testbitrix2/www/local/templates/main/frontend/src/block/common/news-item/news-item.blade.php ENDPATH**/ ?>