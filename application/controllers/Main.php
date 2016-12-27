<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

	public function index()
	{
		// $this->load->view('main');
		$this->load->database();
		$this->load->model('topic_model');
		$data = $this->topic_model->gets();
		$this->load->template('main');
	}

	function _head(){
		// var_dump($this->session->all_userdata());
		// $this->session->set_userdata('session_test', 'jisang');
	}

}
?>
