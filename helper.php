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
	
	class FeaturedBox{
		
		public $TitleHTML = '';
		public $ImageHTML = '';
		public $TextHTML = '';
		public $ButtonHTML = '';
		public $FeaturedBoxHTML = '';
		public $TitleStyle = '';
		public $ImageStyle = '';
		
		public $ModID = 0;
		
		public $Image = '';
		public $Title = '';
		public $Text = '';
		public $Anchor = '';
		public $Link = '';
		
		public $ImagePosition = '';
		public $ImageType = '';
		public $ImageWidth = 0;
		public $ImageBorder = 0;
		public $ImageBorderWidth = 0;
		public $ImageBorderColor = '';
		
		public $TitleShow = 0;
		public $TitleSize = 0;
		public $TitleColor = '';
		public $TitleBold = 0;
		public $TitleBorder = 0;
		public $TitleBorderWidth = 0;
		public $TitleBorderColor = '';
		
		public $MoreShow = 0;
		public $MoreSize = 0;
		public $MoreColor = '';
		public $MoreColorHover = '';
		public $MorePadding = 0;
		public $MoreBgColor = '';
		public $MoreBgColorHover = '';
		
		public function __construct($data){
			$this->ModID = $data['ModID'];
			
			$this->Image = $data['Image'];
			$this->Title = $data['Title'];
			$this->Text = $data['Text'];
			$this->Anchor = $data['Anchor'];
			$this->Link = $data['Link'];
		
			$this->ImagePosition = $data['ImagePosition'];
			$this->ImageType = $data['ImageType'];
			$this->ImageWidth = $data['ImageWidth'];
			$this->ImageBorder = $data['ImageBorder'];
			$this->ImageBorderWidth = $data['ImageBorderWidth'];
			$this->ImageBorderColor = $data['ImageBorderColor'];
		
			$this->TitleShow = $data['TitleShow'];
			$this->TitleSize = $data['TitleSize'];
			$this->TitleColor = $data['TitleColor'];
			$this->TitleBold = $data['TitleBold'];
			$this->TitleBorder = $data['TitleBorder'];
			$this->TitleBorderWidth = $data['TitleBorderWidth'];
			$this->TitleBorderColor = $data['TitleBorderColor'];
		
			$this->MoreShow = $data['MoreShow'];
			$this->MoreSize = $data['MoreSize'];
			$this->MoreColor = $data['MoreColor'];
			$this->MoreColorHover = $data['MoreColorHover'];
			$this->MorePadding = $data['MorePadding'];
			$this->MoreBgColor = $data['MoreBgColor'];
			$this->MoreBgColorHover = $data['MoreBgColorHover'];	
		}
		
		public function PrepareImage(){
			$this->ImageHTML = '<style>';
			$this->ImageHTML .= '#FeatBox-'.$this->ModID.'{';
			$this->ImageHTML .= 'background: url("'.$this->Image.'") no-repeat center center; ';
			$this->ImageHTML .= '-webkit-background-size: cover;';
			$this->ImageHTML .= '-moz-background-size: cover;';
			$this->ImageHTML .= '-o-background-size: cover;';
			$this->ImageHTML .= 'background-size: cover;';
			$this->ImageHTML .= 'filter: progid:DXImageTransform.Microsoft.AlphaImageLoader(src="'.$this->Image.'", sizingMethod="scale");';
			$this->ImageHTML .= '-ms-filter: "progid:DXImageTransform.Microsoft.AlphaImageLoader(src="'.$this->Image.'", sizingMethod="scale")";';
			if($this->ImageBorder == 1){
				$this->ImageStyle = 'border:'.$this->ImageBorderWidth.'px '.$this->ImageBorderColor.' solid;';
			}else{
				$this->ImageStyle = '';	
			}
			$this->ImageHTML .= '}';
			$this->ImageHTML .= '</style>';
			$this->ImageHTML .= '<div id="FeatBox-'.$this->ModID.'" class="FeatBoxImage '.$this->ImageType.'" style="'.$this->ImageStyle.'">';
			$this->ImageHTML .= '</div>';
			
			return $this->ImageHTML; 
		}

		public function PrepareTitle(){
			$this->TitleStyle = 'font-size:'.$this->TitleSize.'px;';	
			$this->TitleStyle .= 'color:'.$this->TitleColor.';';
			if($this->TitleBold == 1){
				$this->TitleStyle .= 'font-weight:bold;';	
			}
			switch($this->TitleBorder){
				case 'Top':
					$this->TitleStyle .= 'border-top:'.$this->TitleBorderWidth.'px '.$this->TitleBorderColor.' solid;';
					break;
				case 'Bottom':
					$this->TitleStyle .= 'border-bottom:'.$this->TitleBorderWidth.'px '.$this->TitleBorderColor.' solid;';
					break;
				case 'TopAndBottom':
					$this->TitleStyle .= 'border-top:'.$this->TitleBorderWidth.'px '.$this->TitleBorderColor.' solid;';
					$this->TitleStyle .= 'border-bottom:'.$this->TitleBorderWidth.'px '.$this->TitleBorderColor.' solid;';
					break;
			}
			
			$this->TitleHTML = '<h3 style="'.$this->TitleStyle.'">'.$this->Title.'</h3>';
			
			return $this->TitleHTML;
		}
		
		public function PrepareText(){
			$this->TextHTML = '<div class="FeatBoxtext">';
			$this->TextHTML .= $this->Text; 
			$this->TextHTML .= '</div>';
			
			return $this->TextHTML; 
		}
		
		public function PrepareButton(){
			$this->ButtonHTML = '<style>';
			$this->ButtonHTML .= 'a#FeatBoxMoreBtn-'.$this->ModID.'{';
			$this->ButtonHTML .= 'font-size:'.$this->MoreSize.'px;';
			$this->ButtonHTML .= 'color:'.$this->MoreColor.';';
			$this->ButtonHTML .= 'padding:'.$this->MorePadding.'px;';
			$this->ButtonHTML .= 'background:'.$this->MoreBgColor.';';
			$this->ButtonHTML .= '}';
			$this->ButtonHTML .= 'a#FeatBoxMoreBtn-'.$this->ModID.':hover{';
			$this->ButtonHTML .= 'color:'.$this->MoreColorHover.';';
			$this->ButtonHTML .= 'background:'.$this->MoreBgColorHover.';';
			$this->ButtonHTML .= '}';
			$this->ButtonHTML .= '</style>';	
			$this->ButtonHTML .= '<div class="FeatBoxMore">';
			$this->ButtonHTML .= '<a id="FeatBoxMoreBtn-'.$this->ModID.'" class="FeatBoxMoreBtn" href="'.$this->Link.'" title="'.$this->Title.'">'.$this->Anchor.'</a>';
			$this->ButtonHTML .= '</div>';
			
			return $this->ButtonHTML;
		}
		
		public function PrepareFeaturedBox(){
			$this->FeaturedBoxHTML = '<div id="FeaturedBox-'.$this->ModID.'" class="FeaturedBox">';	
			switch($this->ImagePosition){
				case 'none':
					$this->FeaturedBoxHTML .= '<div class="FBFullWidth">';
					if($this->TitleShow == 1){
						$this->FeaturedBoxHTML .= $this->PrepareTitle();
					}
					$this->FeaturedBoxHTML .= $this->PrepareText();
					if($this->MoreShow == 1){
						$this->FeaturedBoxHTML .= $this->PrepareButton();
					}
					$this->FeaturedBoxHTML .= '</div>';	
				break;
				
				case 'top':
					$this->FeaturedBoxHTML .= '<div class="FBFullWidth">';
					$this->FeaturedBoxHTML .= $this->PrepareImage();
					if($this->TitleShow == 1){
						$this->FeaturedBoxHTML .= $this->PrepareTitle();
					}
					$this->FeaturedBoxHTML .= $this->PrepareText();
					if($this->MoreShow == 1){
						$this->FeaturedBoxHTML .= $this->PrepareButton();
					}
					$this->FeaturedBoxHTML .= '</div>';						
				break;
				
				case 'left':
					$this->FeaturedBoxHTML .= '<div class="FBLeftImage">';
					$this->FeaturedBoxHTML .= $this->PrepareImage();
					$this->FeaturedBoxHTML .= '</div>';
					$this->FeaturedBoxHTML .= '<div class="FBRight">';
					if($this->TitleShow == 1){
						$this->FeaturedBoxHTML .= $this->PrepareTitle();
					}
					$this->FeaturedBoxHTML .= $this->PrepareText();
					if($this->MoreShow == 1){
						$this->FeaturedBoxHTML .= '<div class="FBFullWidth BtnRight">';
						$this->FeaturedBoxHTML .= $this->PrepareButton();
						$this->FeaturedBoxHTML .= '</div>';
					}
					$this->FeaturedBoxHTML .= '</div>';
					
				break;
				
				case 'right':
					$this->FeaturedBoxHTML .= '<div class="FBLeft">';
					if($this->TitleShow == 1){
						$this->FeaturedBoxHTML .= $this->PrepareTitle();
					}
					$this->FeaturedBoxHTML .= $this->PrepareText();
					if($this->MoreShow == 1){
						$this->FeaturedBoxHTML .= '<div class="FBFullWidth BtnLeft">';
						$this->FeaturedBoxHTML .= $this->PrepareButton();
						$this->FeaturedBoxHTML .= '</div>';
					}
					$this->FeaturedBoxHTML .= '</div>';
					$this->FeaturedBoxHTML .= '<div class="FBRightImage">';
					$this->FeaturedBoxHTML .= $this->PrepareImage();
					$this->FeaturedBoxHTML .= '</div>';
					
				break;
			}
			$this->FeaturedBoxHTML .= '</div>';
			
			return $this->FeaturedBoxHTML;
		}
		
	}
	
	
?>