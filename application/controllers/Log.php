<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Log extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('model_log');
	}

	public function index(){
		$data['logg'] = $this->model_log->getAllLog();
		$this->load->view('list_log.php', $data);
	}
}