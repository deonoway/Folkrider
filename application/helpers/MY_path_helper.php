<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if ( ! function_exists('pathify'))
{
	function pathify($query = '')
	{
		$val = str_replace(' ', '_', str_replace('.', '', str_replace('\'', '', $query)));
		return $val;
	}
}

/* End of file url_helper.php */
/* Location: ./system/helpers/url_helper.php */