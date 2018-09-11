<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Publico extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->library('session');
		$this->load->helper('url');
		$this->load->helper('form');
		$this->load->library('form_validation');
		$this->load->model('users_model');
		
	}

	public function index()
	{
		$this->load->view('header&footer/header');
		$this->load->view('body/home');
		$this->load->view('header&footer/footer');
	}

	public function sobre()
	{
		$this->load->view('header&footer/header');
		$this->load->view('body/sobre');
		$this->load->view('header&footer/footer');
	}

	public function contacto()
	{
		$this->load->view('header&footer/header');
		$this->load->view('body/contacto');
		$this->load->view('header&footer/footer');
	}
}
