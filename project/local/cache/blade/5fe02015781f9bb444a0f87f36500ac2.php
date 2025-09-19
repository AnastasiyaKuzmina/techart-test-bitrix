<div class="<?php echo e($block); ?> wrapper">

    <div class="<?php echo e($block->elem('container')); ?> bx-catalog-element" id="<?php echo e($itemIds['ID']); ?>">
        <div class="<?php echo e($block->elem('left-side')); ?>">
            <div class="product-item-detail-slider-container" id="<?php echo e($itemIds['BIG_SLIDER_ID']); ?>">
                <span class="product-item-detail-slider-close" data-entity="close-popup"></span>
                <div class="product-item-detail-slider-block" data-entity="images-slider-block">
                    <div class="product-item-detail-slider-images-container" data-entity="images-container">
                        <div class="<?php echo e($block->elem('slider')); ?> product-item-detail-slider-image active" data-entity="image" data-id="0">
                            <img src="<?php echo e($arResult['DETAIL_PICTURE']['SRC']); ?>" alt="" itemprop="image" title="book_img">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="<?php echo e($block->elem('right-side')); ?>">
            <div class="<?php echo e($block->elem('right-side-container')); ?>">
                <p class="<?php echo e($block->elem('details')); ?>"><?php echo $arResult['DETAIL_TEXT']; ?></p>
                <?php $__currentLoopData = $arParams['PRODUCT_INFO_BLOCK_ORDER']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $blockName): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php switch($blockName):
                        case ('props'): ?>
                            <?php if(!empty($arResult['DISPLAY_PROPERTIES']) || $arResult['SHOW_OFFERS_PROPS']): ?>
                                <?php if(!empty($arResult['DISPLAY_PROPERTIES'])): ?>
                                    <?php $__currentLoopData = $arResult['DISPLAY_PROPERTIES']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $property): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <div class="<?php echo e($block->elem('property')); ?>">
                                            <p class="<?php echo e($block->elem('property-name')); ?>"><?php echo e($property['NAME']); ?></p>
                                            <p class="<?php echo e($block->elem('property-values')); ?>">
                                                <?php echo (is_array($property['DISPLAY_VALUE'])
                                                    ? implode(' / ', $property['DISPLAY_VALUE'])
                                                    : $property['DISPLAY_VALUE']); ?>

                                            </p>
                                        </div>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                <?php endif; ?>
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
            </div>
        </div>
    </div>
</div><?php /**PATH /var/www/workspace/testbitrix2/www/local/templates/main/frontend/src/block/common/catalog-element/catalog-element.blade.php ENDPATH**/ ?>