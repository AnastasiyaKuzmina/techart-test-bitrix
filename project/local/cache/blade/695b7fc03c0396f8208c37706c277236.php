<div class="<?php echo e($block); ?>">
    <div class="product-item">
        <a class="<?php echo e($block->elem('link')); ?> product-item-image-wrapper" href="<?php echo $item['DETAIL_PAGE_URL']; ?>" title="<?php echo e($imgTitle); ?>" data-entity="image-wrapper">
            <img class="<?php echo e($block->elem('image')); ?> product-item-image-original" src="<?php echo e($item['PREVIEW_PICTURE']['SRC']); ?>" alt="" id="<?php echo e($itemIds['PICT']); ?>">
            <img class="<?php echo e($block->elem('image')); ?> product-item-image-alternative" src="<?php echo e($item['PREVIEW_PICTURE']['SRC']); ?>" alt="" id="<?php echo e($itemIds['SECOND_PICT']); ?>">
        </a>
        <p class="<?php echo e($block->elem('title')); ?> product-item-title"><?php echo e($item['NAME']); ?></p>
        <?php if(!empty($arParams['PRODUCT_BLOCKS_ORDER'])): ?>
            <?php $__currentLoopData = $arParams['PRODUCT_BLOCKS_ORDER']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $blockName): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php switch($blockName):
                    case ('props'): ?>
                        <?php if(!empty($item['DISPLAY_PROPERTIES'])): ?>
                            <div class="<?php echo e($block->elem('properties')); ?>">
                                <?php $__currentLoopData = $item['DISPLAY_PROPERTIES']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $code => $displayProperty): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <div class="<?php echo e($block->elem('property')); ?>">
                                        <p class="<?php echo e($block->elem('property-name')); ?>"><?php echo e($displayProperty['NAME']); ?></p>
                                        <p class="<?php echo e($block->elem('property-values')); ?>">
                                            <?php echo (is_array($displayProperty['DISPLAY_VALUE'])
                                                ? implode(' / ', $displayProperty['DISPLAY_VALUE'])
                                                : $displayProperty['DISPLAY_VALUE']); ?>

                                        </p>
                                    </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>
                        <?php endif; ?>
                        <?php break; ?>
                    <?php case ('price'): ?>
                        <?php if(!empty($price)): ?>
                            <div class="<?php echo e($block->elem('price')); ?>" id="<?php echo e($itemIds['PRICE']); ?>">
                                <p class="<?php echo e($block->elem('price-value')); ?>"><?php echo $price['PRINT_RATIO_PRICE']; ?></p>
                            </div>
                        <?php endif; ?>
                        <?php break; ?>
                    <?php case ('buttons'): ?>
                        <div class="<?php echo e($block->elem('buttons')); ?> product-item-info-container product-item-hidden" data-entity="buttons-block">
                            <?php if($actualItem['CAN_BUY']): ?>
                                <div class="<?php echo e($block->elem('button-container')->mod('basket')); ?> product-item-button-container" id="<?php echo e($itemIds['BASKET_ACTIONS']); ?>">
                                    <a class="<?php echo e($block->elem('button-link')->mod('basket')); ?> btn btn-default <?php echo e($buttonSizeClass); ?>" id="<?php echo e($itemIds['BUY_LINK']); ?>" href="javascript:void(0)" rel="nofollow">
                                        <?php echo e(($arParams['ADD_TO_BASKET_ACTION'] === 'BUY' ? $arParams['MESS_BTN_BUY'] : $arParams['MESS_BTN_ADD_TO_BASKET'])); ?>

                                    </a>
                                </div>
                            <?php endif; ?>
                        </div>
                        <?php break; ?>
                <?php endswitch; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php endif; ?>
    </div>
</div>
 <?php /**PATH /var/www/workspace/testbitrix2/www/local/templates/main/frontend/src/block/common/catalog-item/catalog-item.blade.php ENDPATH**/ ?>