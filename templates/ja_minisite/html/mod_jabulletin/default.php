<?php
/*
 * ------------------------------------------------------------------------
 * Ja Minisite Template for Joomla 1.7
 * ------------------------------------------------------------------------
 * Copyright (C) 2004-2011 JoomlArt.com. All Rights Reserved.
 * @license - PHP files are GNU/GPL V2. CSS / JS are Copyrighted Commercial,
 * bound by Proprietary License of JoomlArt. For details on licensing, 
 * Please Read Terms of Use at http://www.joomlart.com/terms_of_use.html.
 * Author: JoomlArt.com
 * Websites:  http://www.joomlart.com -  http://www.joomlancers.com
 * Redistribution, Modification or Re-licensing of this file in part of full, 
 * is bound by the License applied. 
 * ------------------------------------------------------------------------
*/ 

defined('_JEXEC') or die('Restricted access'); ?>
<div class="ja-bulletin">
	<ul class="ja-bullettin<?php echo $params->get('moduleclass_sfx'); ?> clearfix">
	<?php if(!empty($list)): ?>
	<?php foreach ($list as $item) : ?>
		<li>
				<?php 
				$padding = ($params->get( 'show_image') && $item->image!='')?"style=\"padding-left:".($params->get('width')+10)."px\"":"";
				if (isset($item->image)) : 
				?>
				<?php if( $item->image ) : ?>
					<a href="<?php echo $item->link; ?>" class="mostread<?php echo $params->get('moduleclass_sfx'); ?>-image">
						<?php echo $item->image; ?>
					</a>
				<?php endif; ?>
				<?php endif; ?>
				<div <?php echo $padding;?>>
				<a href="<?php echo $item->link; ?>" class="mostread<?php echo $params->get('moduleclass_sfx'); ?>"><?php echo $item->text; ?></a>
				<?php if ($showcreater) : ?>
						<br/><span class="createby"><?php echo $item->creater;?></span> 
				<?php endif; ?>
				<?php if (isset($item->date)) : ?>
				 - <span><?php echo JHTML::_('date', $item->date, JText::_('DATE_FORMAT_LC4')); ?></span>
				<?php endif; ?>
				<?php if (isset($item->hits)) : ?>
					<span class="item-hits">
					<?php if($useCustomText):
						 echo JText::_($customText);
					endif;
					?>
					<?php echo $item->hits; ?>
					</span>
				<?php endif; ?>
				<?php if ($showreadmore) : ?>
					<br/><a href="<?php echo $item->link; ?>" class="readon" title="<?php echo JText::sprintf('READ_MORE');?>"><?php echo JText::sprintf('READ_MORE');?></a>
				<?php endif; ?>
				</div>

		</li>
	<?php endforeach; ?>
	<?php endif; ?>
	</ul>
</div>