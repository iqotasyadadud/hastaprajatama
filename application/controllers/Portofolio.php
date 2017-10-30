<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Portofolio extends CI_Controller {
	function __construct() {
  		parent::__construct();
  
 	}
	 
	public function index()
	{
		$this->load->view("portofolio_header");
		$this->load->view("portofolio_view");
		$this->load->view("portofolio_footer");
	}
}
