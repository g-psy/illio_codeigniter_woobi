<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

	public function index()
	{
		// $this->load->view('main');
		// $this->load->database();
		$this->load->view('main');
	}

	function _head(){
		// var_dump($this->session->all_userdata());
		// $this->session->set_userdata('session_test', 'jisang');
	}
	function admin(){
		//로그인 필요
		//로그인이 되어 있지 않다면 로그인 페이지로 리다이렉션

		if(true){
			$this->load->helper('url');
			redirect('auth/login');
		}
	}

}
?>
