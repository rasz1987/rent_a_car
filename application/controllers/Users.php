<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('users_model');

		if (empty($this->session->userdata('email')))
		{
			redirect('login');
		}

	}

	//Function to create users
	public function createUser()
	{	
		if ($this->session->userdata('email') != '') 
		{
			//RULES FOR THE FORM´S VALIDATION
			$this->form_validation->set_rules('username', 'Username', 'required');
			$this->form_validation->set_rules('password','Password', 'required');
			$this->form_validation->set_rules('passconf', 'Password Confirm', 'required|matches[password]');
			$this->form_validation->set_rules('email', 'Email', 'required|valid_email');

			if ($this->form_validation->run() == TRUE) 
			{
				$data = array(
					'username' => $this->input->post('username'),
					'password' => md5($this->input->post('password')),
					'email'    => $this->input->post('email')
				);
				$this->users_model->crearusuario($data);
				//LOAD OF THE SUCCESS PAGE
				$this->load->view('header&footer/header');
				$this->load->view('body/success');
				$this->load->view('header&footer/footer');
			}
			else
			{
				$this->load->view('header&footer/header');
				$this->load->view('body/create_user');
				$this->load->view('header&footer/footer');
			}
	}

	public function login() 
	{
		if ($this->session->userdata('email') != '')
		{
			redirect('home');
		} 
		else
		{
			// set validation rules
			$this->form_validation->set_rules('email', 'Email', 'required|valid_email');
			$this->form_validation->set_rules('password', 'Password', 'required');
			
			if ($this->form_validation->run() == false) {
				
				// validation not ok, send validation errors to the view
				$this->load->view('header&footer/header');
				$this->load->view('body/login');
				$this->load->view('header&footer/footer');
				
			} 
			else 
			{
				$email    = $this->input->post('email');
				$password = md5($this->input->post('password'));
				//model function
				if ($this->users_model->can_login($email, $password)) 
				{
				 	$session_data = array
				 		('email' => $email);
					$this->session->set_userdata($session_data);
					redirect('home');
				}
				else
				{
					$this->session->set_flashdata('error','Invalid username and password');
					redirect('login');
				}
			}
		}
	}

	function logout()
	{
		session_destroy();
		redirect('home');
	}

}

	


