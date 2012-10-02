<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * CORE Lang.php extension for Multilingual CI
 *
 * requires url helper
 *
 * by Tanel Tammik - keevitaja@gmail.com - 2012
 *
 * version 1.0
 *
 */

class MY_Lang extends CI_Lang {
  private $mci_languages;
  private $mci_hide_default;
  private $mci_segment;
  private $mci_default_language;
  
  function __construct() {
    global $URI, $CFG;
    
    parent::__construct();
    
    $CFG->load('mci_languages');
    
    $this->mci_languages = $CFG->item('mci_languages');
    $this->mci_hide_default = $CFG->item('mci_hide_default');
    $this->mci_segment = $URI->segment(1, 0);
    $this->mci_default_language = array_search($CFG->item('language'), $this->mci_languages);
    
    if(array_key_exists($this->mci_segment, $this->mci_languages)) {
      $CFG->set_item('language', $this->mci_languages[$this->mci_segment]);
    }
  }
  
  // returns current language segment
  function mci_current() {    
    return ((array_key_exists($this->mci_segment, $this->mci_languages)) ? $this->mci_segment : $this->mci_default_language);
  }
  
  // returns current uri without language segment
  function mci_clean_uri() {
    $ci =& get_instance();
    
    $segments = $ci->uri->segment_array();
    
    if(empty($segments)) {
      return;
    }
    
    if(array_key_exists($segments[1], $this->mci_languages)) {
      array_shift($segments);
    }
    
    return implode('/', $segments);
  }
  
  // returns uri string with language segment
  function mci_make_uri($language_segment, $uri = FALSE) {
    $uri = ($uri === FALSE) ? $this->mci_clean_uri() : trim($uri, '/');
    
    if(!array_key_exists($language_segment, $this->mci_languages)) {
      return $uri;
    }
    
    if($language_segment == $this->mci_default_language AND $this->mci_hide_default === TRUE) {
      return $uri;
    }
    
    $uri = $language_segment.'/'.$uri;
    
    return $uri;
  }
  
  // returns html language bar
  function mci_language_bar() {
    $ci =& get_instance();
    
    $display = $ci->config->item('mci_display');
    
    $html = '';
    
    foreach($this->mci_languages as $segment => $name) {
      $uri = $this->mci_make_uri($segment);
      
      $row = ($segment != $this->mci_current()) ? anchor($uri, $display[$segment]['name'], 'title="'.$display[$segment]['title'].'"') : $display[$segment]['name'];
      
      $html .= sprintf($ci->config->item('mci_wrapper_language'), $row);
    }
    
    return sprintf($ci->config->item('mci_wrapper_section'), $html);
  }
}

/* End of file MY_Lang.php */
/* Location: ./application/core/MY_lang.php */