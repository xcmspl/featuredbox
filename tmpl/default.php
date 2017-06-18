<?php
	/**
	* @title			TSI FEATURED BOX
	* @copyright   		Copyright (C) 2011-2016 Design Studio WWW, All rights reserved.
	* @license   		GNU General Public License version 3 or later.
	* @author url   	http://www.tsi.info.pl
	* @developers   	Design Studio WWW
	*/

	// No direct access
	defined('_JEXEC') or die('Restricted access');
	
	echo $FeaturedBoxHTML;
?>

<script type="text/javascript">
	jQuery(document).ready(function(){
		var FeaturedBoxWidth = jQuery('#FeatBox-<?php echo $module->id; ?>').width();
		<?php if($FeatureboxData['ImagePosition'] == 'top' AND $FeatureboxData['ImageType'] == 'circle'){?>	
			var SmallSize = FeaturedBoxWidth * 60 / 100;
			jQuery('#FeatBox-<?php echo $module->id; ?>').height(SmallSize);
			jQuery('#FeatBox-<?php echo $module->id; ?>').width(SmallSize);			
		<?php }elseif($FeatureboxData['ImagePosition'] == 'top' AND $FeatureboxData['ImageType'] == 'square'){ ?>
			var SmallSize = FeaturedBoxWidth * 50 / 100;
			jQuery('#FeatBox-<?php echo $module->id; ?>').height(SmallSize);
		<?php }else{ ?>
			jQuery('#FeatBox-<?php echo $module->id; ?>').height(FeaturedBoxWidth);	
		<?php } ?>
	});
</script>

