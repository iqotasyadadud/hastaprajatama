<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends CI_Controller {
	function __construct() {
  		parent::__construct();
  
 	}
	 
	public function index()
	{
		$this->load->view("contact_header");
		$this->load->view("contact_view");
		$this->load->view("contact_footer");
	}
}