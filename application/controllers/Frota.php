<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Frota extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->library('session');
		$this->load->helper('url');
		$this->load->helper('form');
		$this->load->library('form_validation');
		$this->load->model('users_model');

	}

	public function recibirEmail()
	{
		$this->form_validation->set_rules('name', 'Nome', 'required');
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email');
		$this->form_validation->set_rules('message', 'Ingrese o seu mensagen', 'required');
		
		if ($this->form_validation->run() == TRUE) 
		{
			$data = array(
				'name'   => $this->input->post('name'),
				'email'  => $this->input->post('email'),
				'option' => $this->input->post('category'),
				'radio'  => $this->input->post('priority'),
				'msg'    => $this->input->post('message')
			);

			$this->frota_model->salvarEmail($data);

			$this->load->view('header&footer/header');
			$this->load->view('body/success');
			$this->load->view('header&footer/footer');
		}
		else
		{
			$this->load->view('header&footer/header');
			$this->load->view('body/contacto');
			$this->load->view('header&footer/footer');
			
		}
	}

	public function automoveis()
	{
		$this->load->view('header&footer/header');
		$this->load->view('body/automoveis');
		$this->load->view('header&footer/footer');
	}
}
