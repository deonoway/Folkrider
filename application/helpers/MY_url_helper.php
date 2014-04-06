<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if ( ! function_exists('pRoot')) {
	function pRoot($uri = ''){
		$root=$_SERVER['DOCUMENT_ROOT'];
		return $root."/".$uri;
	}
}

if ( ! function_exists('asset'))
{
	function asset($uri = '', $stand=NULL)
	{
		$uri="assets/".$uri;
		
		if ($stand != NULL) {
			return pRoot($uri);
		}else{
			$CI =& get_instance();
			return $CI->config->site_url($uri);
		}
	}
}

if ( ! function_exists('mp3Loc'))
{
	function mp3Loc($uri = '', $stand=NULL)
	{
		$uri="assets/mp3/".$uri.".mp3";
		
		if ($stand != NULL) {
			return pRoot($uri);
		}else{
			$CI =& get_instance();
			return $CI->config->site_url($uri);
		}
	}
}

if ( ! function_exists('artLoc'))
{
	function artLoc($uri = '', $stand=NULL)
	{
		$uri="assets/image/artist/".$uri.".png";
		
		if ($stand != NULL) {
			return pRoot($uri);
		}else{
			$CI =& get_instance();
			return $CI->config->site_url($uri);
		}
	}
}

if ( ! function_exists('albLoc'))
{
	function albLoc($uri = '', $stand=NULL)
	{
		$uri="assets/image/album/".$uri.".png";
		
		if ($stand != NULL) {
			return pRoot($uri);
		}else{
			$CI =& get_instance();
			return $CI->config->site_url($uri);
		}
	}
}

/* End of file url_helper.php */
/* Location: ./system/helpers/url_helper.php */