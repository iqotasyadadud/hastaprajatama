<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog extends CI_Controller {
	function __construct() {
  		parent::__construct();
  
 	}
	 
	public function index()
	{
		$this->load->view("blog_header");
		$this->load->view("blog_view");
		$this->load->view("blog_footer");
	}
}