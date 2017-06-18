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
	
	require_once( dirname(__FILE__).'/helper.php' );
	
	$FeatureboxData['Image'] = JUri::root().$params->get('Image');
	$FeatureboxData['Title'] = $params->get('Title');
	$FeatureboxData['Text'] = $params->get('Text');
	$FeatureboxData['Anchor'] = $params->get('Anchor');
	$FeatureboxData['Link'] = $params->get('Link');
		
	$FeatureboxData['ImagePosition'] = $params->get('ImagePosition');
	$FeatureboxData['ImageType'] = $params->get('ImageType');
	$FeatureboxData['ImageWidth'] = $params->get('ImageWidth');
	$FeatureboxData['ImageBorder'] = $params->get('ImageBorder');
	$FeatureboxData['ImageBorderWidth'] = $params->get('ImageBorderWidth');
	$FeatureboxData['ImageBorderColor'] = $params->get('ImageBorderColor');
		
	$FeatureboxData['TitleShow'] = $params->get('TitleShow');
	$FeatureboxData['TitleSize'] = $params->get('TitleSize');
	$FeatureboxData['TitleColor'] = $params->get('TitleColor');
	$FeatureboxData['TitleBold'] = $params->get('TitleBold');
	$FeatureboxData['TitleBorder'] = $params->get('TitleBorder');
	$FeatureboxData['TitleBorderWidth'] = $params->get('TitleBorderWidth');
	$FeatureboxData['TitleBorderColor'] = $params->get('TitleBorderColor');
		
	$FeatureboxData['MoreShow'] = $params->get('MoreShow');
	$FeatureboxData['MoreSize']= $params->get('MoreSize');
	$FeatureboxData['MoreColor'] = $params->get('MoreColor');
	$FeatureboxData['MoreColorHover'] = $params->get('MoreColorHover');
	$FeatureboxData['MorePadding'] = $params->get('MorePadding');
	$FeatureboxData['MoreBgColor'] = $params->get('MoreBgColor');
	$FeatureboxData['MoreBgColorHover'] = $params->get('MoreBgColorHover');
	
	$FeatureboxData['ModID'] = $module->id;
	
	$FeaturedBox = new FeaturedBox($FeatureboxData);
	$FeaturedBoxHTML = $FeaturedBox->PrepareFeaturedBox();
	
	
	
	
	
	
	require( JModuleHelper::getLayoutPath( 'mod_tsifeaturedbox' ) );
	
	$document = JFactory::getDocument();
	$pathCSS = "modules/mod_tsifeaturedbox/assest/mod_tsifeaturedbox.css";
	$document->addStyleSheet($pathCSS);
?>