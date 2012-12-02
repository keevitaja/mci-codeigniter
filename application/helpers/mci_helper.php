<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Helper functions for Multilingual CI
 *
 * requires url helper
 *
 * by Tanel Tammik - keevitaja@gmail.com - 2012
 *
 * version 1.0
 *
 */

// Adds language segment to anchor uri
// Use instead of anchor in multilingual projects
function lanchor($uri = '', $title = '', $attributes = '') {
  $ci =& get_instance();
  
  $uri = $ci->lang->mci_make_uri($ci->lang->mci_current(), $uri);
  
  return anchor($uri, $title, $attributes);
}

// Returns languge bar html
// Html can be configured in mci_languages.php config file
function langbar() {
  $ci =& get_instance();
  
  return $ci->lang->mci_language_bar();
}

// returns uri(s) for different languages, mixed
function lchange($language = false) {
	$ci =& get_instance();

	return $ci->lang->mci_change($language);
}

/* End of file mci_helper.php */
/* Location: ./application/helpers/mci_helper.php */