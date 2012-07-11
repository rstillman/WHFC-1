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
<?php
//detect view on mobile - show switch to mobile tools
$layout_switcher = $this->loadBlock('usertools/layout-switcher');
if ($layout_switcher) {
	$layout_switcher = '<li class="layout-switcher">'.$layout_switcher.'</li>';
}
?>
<ul class="ja-links">
	<?php echo $layout_switcher ?>
	<li class="top"><a href="<?php echo $this->getCurrentURL();?>#Top" title="Back to Top"><?php echo JText::_('TOP') ?></a></li>
</ul>