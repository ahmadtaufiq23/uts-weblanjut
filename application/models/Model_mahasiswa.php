<?php
	class Model_mahasiswa extends CI_Model {
		function __construct(){
			parent::__construct();
			$this->load->database();
		}

		public function getAllMhs(){
			$query = $this->db->get('tbl_mahasiswa');
			return $query->result(); 
		}

		public function insertmhs($mhs){
			return $this->db->insert('tbl_mahasiswa', $mhs);
		}

		public function getMhs($id){
			$query = $this->db->get_where('tbl_mahasiswa',array('id'=>$id));
			return $query->row_array();
		}

		public function updatemhs($mhs, $id){
			$this->db->where('tbl_mahasiswa.id', $id);
			return $this->db->update('tbl_mahasiswa', $mhs);
		}

		public function deletemhs($id){
			$this->db->where('tbl_mahasiswa.id', $id);
			return $this->db->delete('tbl_mahasiswa');
		}

	}
?>