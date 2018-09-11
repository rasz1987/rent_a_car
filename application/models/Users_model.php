<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users_model extends CI_Model {

	function __construct(){
		parent::__construct();
		$this->load->database();		
	}

	public function crearUsuario($data)
	{
		$this->db->insert('usuarios', array(
			'username'  => $data['username'],
			'password'  => $data['password'],
			'email'     => $data['email']));
	}

	public function can_login($email, $password) 
	{
		$this->db->where('email', $email);
		$this->db->where('password', $password);
		$query = $this->db->get('usuarios');

		//Select * from usuarios where ...

		if ($query->num_rows() > 0 ) 
		{
			return TRUE;
		}
		else
		{
			return FALSE;
		}
		
	}


	/*
	public function get_user_id_from_email($email) 
	{	
		$this->db->select('id');
		$this->db->from('usuarios');
		$this->db->where('email', $email);
		return $this->db->get()->row('id');
	}
	
	public function get_user($user_id) 
	{	
		$this->db->from('usuario');
		$this->db->where('id', $user_id);
		return $this->db->get()->row();
	}*/
	




}