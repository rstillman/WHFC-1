<?php 
/*
  # ------------------------------------------------------------------------
# This is raw license
# ------------------------------------------------------------------------
# Copyright (C) 2004-20010 J.O.O.M Solutions Co., Ltd. All Rights Reserved.
# @license - GNU/GPL, http://www.gnu.org/licenses/gpl.html
# Author: J.O.O.M Solutions Co., Ltd
# Websites: http://www.joomlart.com - http://www.joomlancers.com
# ------------------------------------------------------------------------
*/
// no direct access
defined('_JEXEC') or die('Restricted access');
?>
<div class="ja-sidenews-list clearfix">
	<?php $count=1; ?>
	<?php foreach( $list as $item ) : 
		
		if( $showdate) {
			$item->date =  strtotime ( $item->modified ) ? $item->created : $item->modified;
		}
		if(isset($item->text)){
			$item->text = $item->introtext . $item->text;
		}else{
			$item->text = $item->introtext;	
		}
		
	?>
		<div class="ja-slidenews-item">	
        	<div class="ja-slidenews-inner">
		<table>
			<tr>
				<td>
					<?php if( $showimage ):  ?>
					<?php echo $helper->renderImage ($item, $params, $descMaxChars, $iwidth, $iheight ); ?>
					<?php endif; ?>
				</td>
				<td>
					<h3 class="ja-title"><a href="<?php echo  $item->link; ?>"><?php echo  $helper->trimString( $item->title, $titleMaxChars );?></a></h3>
					<?php if (isset($item->date)) : ?>
					      <span class="ja-createdate <?php if($count%2==0) : echo " ja-createdate2 "; endif; ?>">
						  <span class="day"><?php echo JHTML::_('date', $item->date, JText::_('d')); ?>  </span>
						  <span class="month"><?php echo JHTML::_('date', $item->date, JText::_('M')); ?>  </span>
					      </span>                
					<?php endif; ?>
					  
					<?php echo $helper->trimString( strip_tags($item->introtext), $descMaxChars); ?>
					<?php if( $showMoredetail ) : ?>
						<a class="readon" href="<?php echo  $item->link; ?>"> <?php echo JTEXT::_("more >>"); ?></a>
					<?php endif;?>
				</td>
			</tr>
		</table>
		</div>
		</div>
  <?php 
	$count++;
	endforeach; ?>
</div>