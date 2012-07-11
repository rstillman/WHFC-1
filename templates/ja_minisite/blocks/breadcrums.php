<?php
/*
# ------------------------------------------------------------------------
# T3V2 Framework
# ------------------------------------------------------------------------
# Copyright (C) 2004-20010 J.O.O.M Solutions Co., Ltd. All Rights Reserved.
# @license - GNU/GPL, http://www.gnu.org/licenses/gpl.html
# Author: J.O.O.M Solutions Co., Ltd
# Websites: http://www.joomlart.com - http://www.joomlancers.com
# ------------------------------------------------------------------------
*/
?>
<div class="ja-breadcrums">
	<!--strong><?php echo JText::_('You are here')?></strong--> <jdoc:include type="module" name="breadcrumbs" />
</div>

<p class="ja-day">
	  <?php
		echo '<span class="day">'.JHTML::_('date', 'now', 'l').'</span>'.
		'<span class="date">'.JHTML::_('date', 'now', 'd ').'</span>'.
		'<span class="month">'.JHTML::_('date', 'now', 'F ').'</span>'.
		'<span class="year">'.JHTML::_('date', 'now', 'Y').'</span>';
		?>
	</p>

<ul class="no-display">
	<li><a href="<?php echo $this->getCurrentURL();?>#ja-content" title="<?php echo JText::_("Skip to content");?>"><?php echo JText::_("Skip to content");?></a></li>
</ul>
