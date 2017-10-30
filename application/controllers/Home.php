<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	function __construct() {
  		parent::__construct();
  
 	}
	 
	public function index()
	{
		$this->load->view("home_header");
		$this->load->view("nav_bar");
		$this->load->view("home_slider");
		$this->load->view("home_view");
		$this->load->view("home_footer");
	}
}
