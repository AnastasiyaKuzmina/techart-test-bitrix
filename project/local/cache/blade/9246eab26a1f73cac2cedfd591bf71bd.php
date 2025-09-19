<div class="<?php echo e($block); ?> wrapper">
    <div class="<?php echo e($block->elem('container')); ?>">
        <?php while($arResult["nStartPage"] <= $arResult["nEndPage"]): ?>
            <a class="<?php echo e($block->elem('link')); ?>" href="/news<?php echo e($arResult['theme']); ?>/page-<?php echo e($arResult['nStartPage']); ?>/">
                <div class="<?php echo e($block->elem('figure')); ?>" class="news__page" <?php if($arResult['nStartPage'] == $arResult['NavPageNomer']): ?> style="background-color: #841844;" <?php endif; ?>>
                    <p class="<?php echo e($block->elem('number')); ?>" <?php if($arResult['nStartPage'] == $arResult['NavPageNomer']): ?> style="color: white;" <?php endif; ?>><?php echo e($arResult["nStartPage"]++); ?></p>
                </div>
            </a>
        <?php endwhile; ?>
        <a class="<?php echo e($block->elem('link')); ?>" href="/news<?= $arResult["theme"] ?>/page-<?=$arResult['NavPageNomer'] + 1?>/">
            <div class="<?php echo e($block->elem('figure')->mod('arrow')); ?>" <?php if($arResult['NavPageNomer'] == $arResult['NavPageCount']): ?> style="display: none;" <?php endif; ?>>
                <img class="<?php echo e($block->elem('arrow')); ?>" src="<?php echo e(\TAO::frontendUrl('img/icons/PageArrow.svg')); ?>" alt="">
            </div>
        </a>
    </div>
</div><?php /**PATH /var/www/workspace/testbitrix2/www/local/templates/main/frontend/src/block/common/news-pagination/news-pagination.blade.php ENDPATH**/ ?>