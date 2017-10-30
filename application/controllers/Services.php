<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Services extends CI_Controller {
	function __construct() {
  		parent::__construct();
  
 	}
	 
	public function index()
	{
		$this->load->view("service_header");
		$this->load->view("service_view");
		$this->load->view("service_footer");
	}
}
