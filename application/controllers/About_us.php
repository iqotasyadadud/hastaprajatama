<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class About_us extends CI_Controller {
	function __construct() {
  		parent::__construct();
  
 	}
	 
	public function index()
	{
		$this->load->view("about_header");
		$this->load->view("about_view");
		$this->load->view("about_footer");
	}
}
