<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	function __construct() {
		parent::__construct();
	}

	function login(){
		$this->load->view('header');
		$this->load->view('login');
	}

	function logout(){
		$this->session->sess_destroy();
		$this->load->helper('url');
		redirect('/');
	}

	function register(){
		$this->load->view('header');
		$this->load->view('register');
	}

	function authentication(){
		echo "인증";
	}
}
?>
