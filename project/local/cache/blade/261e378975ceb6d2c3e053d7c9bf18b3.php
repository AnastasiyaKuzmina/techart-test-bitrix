<div class="<?php echo e($block); ?> wrapper">
	<div class="<?php echo e($block->elem('container')); ?> bx-filter <?php echo e($templateData['TEMPLATE_CLASS']); ?> <?php if($arParams['FILTER_VIEW_MODE'] == 'HORIZONTAL'): ?> bx-filter-horizontal <?php endif; ?>">
			<form class="<?php echo e($block->elem('form')); ?>" name="<?php echo e($arResult['FILTER_NAME']); ?>_form" action="<?php echo e($arResult['FORM_ACTION']); ?>" method="get" class="smartfilter">
				<div class="<?php echo e($block->elem('fields-container')); ?> row">
					<?php $__currentLoopData = $arResult['ITEMS']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$arItem): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						<?php if(isset($arItem['PRICE'])): ?>
							<div class="<?php echo e($block->elem('price-container')); ?> bx-filter-parameters-box bx-active">
								<div class="<?php echo e($block->elem('price-title')); ?> bx-filter-parameters-box-title" onclick="smartFilter.hideFilterProps(this)"><span><?php echo e($arItem['NAME']); ?> <i data-role="prop_angle" class="fa fa-angle-<?php echo e(isset($arItem['DISPLAY_EXPANDED']) ? 'up' : 'down'); ?>"></i></span></div>
								<div class="<?php echo e($block->elem('price-block')); ?> bx-filter-block" data-role="bx_filter_block">
									<div class="<?php echo e($block->elem('price-fields')); ?>">
										<div class="<?php echo e($block->elem('price-from')); ?> bx-filter-parameters-box-container-block bx-left">
											<i class="<?php echo e($block->elem('price-label')); ?> bx-ft-sub"><?php echo e(GetMessage("CT_BCSF_FILTER_FROM")); ?></i>
											<div class="<?php echo e($block->elem('price-field')); ?> bx-filter-input-container">
												<input
													class="min-price"
													type="text"
													name="<?php echo e($arItem['VALUES']['MIN']['CONTROL_NAME']); ?>"
													id="<?php echo e($arItem['VALUES']['MIN']['CONTROL_ID']); ?>"
													value="<?php echo e($arItem['VALUES']['MIN']['HTML_VALUE']); ?>"
													size="5"
													onkeyup="smartFilter.keyup(this)"
												/>
											</div>
										</div>
										<div class="<?php echo e($block->elem('price-to')); ?> bx-filter-parameters-box-container-block bx-right">
											<i class="<?php echo e($block->elem('price-label')); ?> bx-ft-sub"><?php echo e(GetMessage("CT_BCSF_FILTER_TO")); ?></i>
											<div class="<?php echo e($block->elem('price-field')); ?> bx-filter-input-container">
												<input
													class="max-price"
													type="text"
													name="<?php echo e($arItem['VALUES']['MAX']['CONTROL_NAME']); ?>"
													id="<?php echo e($arItem['VALUES']['MAX']['CONTROL_ID']); ?>"
													value="<?php echo e($arItem['VALUES']['MAX']['HTML_VALUE']); ?>"
													size="5"
													onkeyup="smartFilter.keyup(this)"
												/>
											</div>
										</div>
									</div>

									<div class="<?php echo e($block->elem('price-slider')); ?> bx-ui-slider-track-container">
										<div class="bx-ui-slider-track" id="drag_track_<?php echo e($arItem['ENCODED_ID']); ?>">
											<?php for($i = 0; $i <= $step_num; $i++): ?>
												<div class="bx-ui-slider-part p<?php echo e($i+1); ?>"><span><?php echo e($pricesValue[$arItem['ENCODED_ID']][$i]); ?></span></div>
											<?php endfor; ?>

											<div class="bx-ui-slider-pricebar-vd" style="left: 0;right: 0;" id="colorUnavailableActive_<?php echo e($arItem['ENCODED_ID']); ?>"></div>
											<div class="bx-ui-slider-pricebar-vn" style="left: 0;right: 0;" id="colorAvailableInactive_<?php echo e($arItem['ENCODED_ID']); ?>"></div>
											<div class="bx-ui-slider-pricebar-v"  style="left: 0;right: 0;" id="colorAvailableActive_<?php echo e($arItem['ENCODED_ID']); ?>"></div>
											<div class="bx-ui-slider-range" id="drag_tracker_<?php echo e($arItem['ENCODED_ID']); ?>"  style="left: 0%; right: 0%;">
												<a class="bx-ui-slider-handle left"  style="left:0;" href="javascript:void(0)" id="left_slider_<?php echo e($arItem['ENCODED_ID']); ?>"></a>
												<a class="bx-ui-slider-handle right" style="right:0;" href="javascript:void(0)" id="right_slider_<?php echo e($arItem['ENCODED_ID']); ?>"></a>
											</div>
										</div>
									</div>
								</div>
							</div>
						<?php endif; ?>
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

					<?php $__currentLoopData = $arResult["ITEMS"]; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$arItem): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						<?php if(empty($arItem["VALUES"]) || isset($arItem["PRICE"])): ?> <?php continue; ?> <?php endif; ?>
						<?php if(
							$arItem["DISPLAY_TYPE"] === $numbersWithSlider
							&& ($arItem["VALUES"]["MAX"]["VALUE"] - $arItem["VALUES"]["MIN"]["VALUE"] <= 0)
						): ?>
							<?php continue; ?>
						<?php endif; ?>
						<div class="<?php echo e($block->elem('parameters-container')); ?> bx-filter-parameters-box <?php if($arItem['DISPLAY_EXPANDED']== 'Y'): ?>bx-active <?php endif; ?>">
							<div class="<?php echo e($block->elem('parameter-title')); ?> bx-filter-parameters-box-title" onclick="smartFilter.hideFilterProps(this)">
								<span class="bx-filter-parameters-box-hint"><?php echo e($arItem['NAME']); ?>

									<?php if($arItem['FILTER_HINT'] <> ""): ?>
										<i id="item_title_hint_<?php echo e($arItem['ID']); ?>" class="fa fa-question-circle"></i>
										<script>
											new top.BX.CHint({
												parent: top.BX("item_title_hint_<?php echo e($arItem['ID']); ?>"),
												show_timeout: 10,
												hide_timeout: 200,
												dx: 2,
												preventHide: true,
												min_width: 250,
												hint: '<?php echo e(CUtil::JSEscape($arItem['FILTER_HINT'])); ?>'
											});
										</script>
									<?php endif; ?>
									<i data-role="prop_angle" class="fa fa-angle-<?php echo e($arItem['DISPLAY_EXPANDED']== 'Y' ? 'up' : 'down'); ?>"></i>
								</span>
							</div>

							<div class="<?php echo e($block->elem('parameter-block')); ?> bx-filter-block" data-role="bx_filter_block">
								<div class="row bx-filter-parameters-box-container">
									<?php $__currentLoopData = $arItem["VALUES"]; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $val => $ar): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
									<div class="checkbox">
										<label data-role="label_<?php echo e($ar['CONTROL_ID']); ?>" class="bx-filter-param-label <?php echo e($ar['DISABLED'] ? 'disabled': ''); ?>" for="<?php echo e($ar['CONTROL_ID']); ?>">
											<span class="bx-filter-input-checkbox">
												<input
													type="checkbox"
													value="<?php echo e($ar['HTML_VALUE']); ?>"
													name="<?php echo e($ar['CONTROL_NAME']); ?>"
													id="<?php echo e($ar['CONTROL_ID']); ?>"
													<?php if($ar['CHECKED']): ?>checked="checked" <?php endif; ?>
													onclick="smartFilter.click(this)"
												/>
												<span class="bx-filter-param-text" title="<?php echo e($ar['VALUE']); ?>"><?php echo e($ar["VALUE"]); ?>

												<?php if($arParams["DISPLAY_ELEMENT_COUNT"] !== "N" && isset($ar["ELEMENT_COUNT"])): ?>
												&nbsp;<span data-role="count_<?php echo e($ar['CONTROL_ID']); ?>"><?php echo e($ar["ELEMENT_COUNT"]); ?></span>
												<?php endif; ?>
												</span>
											</span>
										</label>
									</div>
									<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
								</div>
								<div style="clear: both"></div>
							</div>
						</div>
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
				</div>
				<div class="row">
					<div class="<?php echo e($block->elem('buttons')); ?> bx-filter-button-box">
						<div class="bx-filter-block">
							<div class="<?php echo e($block->elem('buttons-container')); ?> bx-filter-parameters-box-container">
								<input
									class="btn btn-themes"
									type="submit"
									id="set_filter"
									name="set_filter"
									value="<?php echo e(GetMessage('CT_BCSF_SET_FILTER')); ?>"
								/>
								<input
									class="btn btn-link"
									type="submit"
									id="del_filter"
									name="del_filter"
									value="<?php echo e(GetMessage('CT_BCSF_DEL_FILTER')); ?>"
								/>
								<div class="bx-filter-popup-result <?php if($arParams['FILTER_VIEW_MODE'] == 'VERTICAL'): ?>$arParams['POPUP_POSITION'] <?php endif; ?>" id="modef" <?php if(!isset($arResult['ELEMENT_COUNT'])): ?> style="display:none" <?php endif; ?> style="display: inline-block;">
									<?php echo e(GetMessage("CT_BCSF_FILTER_COUNT", array("#ELEMENT_COUNT#" => '<span id="modef_num">'.(int)($arResult["ELEMENT_COUNT"] ?? 0).'</span>'))); ?>

									<span class="arrow"></span>
									<br/>
									<a href="<?php echo e($arResult['FILTER_URL']); ?>" target=""><?php echo e(GetMessage("CT_BCSF_FILTER_SHOW")); ?></a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="clb"></div>
			</form>
		</div>
	</div>
</div><?php /**PATH /var/www/workspace/testbitrix2/www/local/templates/main/frontend/src/block/common/smart-filter/smart-filter.blade.php ENDPATH**/ ?>