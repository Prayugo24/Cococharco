<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ContactUsController extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->helper('url');
		$this->load->helper('form');
		
	}
	public function index()
	{
		$this->load->view('template_1/nav/header');
		$this->load->view('template_1/contactus');
		$this->load->view('template_1/nav/footer');
	}
}
