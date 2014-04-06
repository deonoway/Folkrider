<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * CodeIgniter
 *
 * An open source application development framework for PHP 5.1.6 or newer
 *
 * @package		CodeIgniter
 * @author		ExpressionEngine Dev Team
 * @copyright	Copyright (c) 2008 - 2011, EllisLab, Inc.
 * @license		http://codeigniter.com/user_guide/license.html
 * @link		http://codeigniter.com
 * @since		Version 1.0
 * @filesource
 */

// ------------------------------------------------------------------------

/**
 * Image Manipulation class
 *
 * @package		CodeIgniter
 * @subpackage	Libraries
 * @category	Image_lib
 * @author		ExpressionEngine Dev Team
 * @link		http://codeigniter.com/user_guide/libraries/image_lib.html
 */
class MY_Image_lib extends CI_Image_lib {
	
	public function box($img=0, $box, $type = 0){
		$size = getimagesize($img);
		$height=$size[1];
		$width=$size[0];
		
		switch($type){
			case 0:
				$base = ($width>$height) ? $width : $height ;
				break;
			case 1:
				$base = $height;
				break;
			case 2:
				$dase = $height;
				break;
		}
		
		$multip = $box/$base;
		$dim= array('0' => floor($height*$multip), '1' => floor($width*$multip));
		return($dim);
	}
	
	public function height($img=0, $box){
		$size = getimagesize($img);
		$height=$size[1];
		$width=$size[0];
		$multip = $box/$height;
		$dim= array('0' => floor($height*$multip), '1' => floor($width*$multip));
		return($dim);
	}
	
	public function width($img=0, $box){
		$size = getimagesize($img);
		$height=$size[1];
		$width=$size[0];
		$multip = $box/$width;
		$dim= array('0' => floor($height*$multip), '1' => floor($width*$multip));
		return($dim);
	}
}
// END Image_lib Class

/* End of file Image_lib.php */
/* Location: ./system/libraries/Image_lib.php */