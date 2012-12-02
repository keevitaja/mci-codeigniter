<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Example controller for Multilingual CI
 *
 * requires language helper
 *
 * by Tanel Tammik - keevitaja@gmail.com - 2012
 *
 */

class Example extends CI_Controller {
	function __construct() {
		parent::__construct();
		
		$this->load->language('mci');
	}
	
	function index() {
		$data['i18n'] = $this->lang->mci_current();
		$data['content'] = 'mci_example_1';
		$data['uri'] = 'example/test';
		
		$this->load->view('example', $data);
	}

	function test() {
		$data['i18n'] = $this->lang->mci_current();
		$data['content'] = 'mci_example_2';
		$data['uri'] = 'example';

		$this->load->view('example', $data);
	}
}

/* End of file example.php */
/* Location: ./application/controllers/example.php */