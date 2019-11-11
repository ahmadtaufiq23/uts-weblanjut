<?php
	class Model_log extends CI_Model {
		function __construct(){
			parent::__construct();
			$this->load->database();
		}

		public function getAllLog(){
			$query = $this->db->get('log');
			return $query->result(); 
		}
	}