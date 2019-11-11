<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mahasiswa extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('model_mahasiswa');
	}

	public function index(){
		$data['mahasiswa'] = $this->model_mahasiswa->getAllMhs();
		$this->load->view('list_mahasiswa.php', $data);
	}

	public function tambah(){
		$this->load->view('tambah_mahasiswa.php');
	}

	public function insert(){
		$uts['nim'] = $this->input->post('nim');
		$uts['nama_mahasiswa'] = $this->input->post('nama_mahasiswa');
		$uts['jenis_kelamin'] = $this->input->post('jenis_kelamin');
		$uts['alamat_lengkap'] = $this->input->post('alamat_lengkap');
		$uts['nomer_hp'] = $this->input->post('nomer_hp');
		
		$query = $this->model_mahasiswa->insertmhs($uts);

		if($query){
			header('location:'.base_url().$this->index());
		}

	}

	public function edit($id){
		$data['mhs'] = $this->model_mahasiswa->getMhs($id);
		$this->load->view('edit_mahasiswa', $data);
	}

	public function update($id){
		$uts['nim'] = $this->input->post('nim');
		$uts['nama_mahasiswa'] = $this->input->post('nama_mahasiswa');
		$uts['jenis_kelamin'] = $this->input->post('jenis_kelamin');
		$uts['alamat_lengkap'] = $this->input->post('alamat_lengkap');
		$uts['nomer_hp'] = $this->input->post('nomer_hp');

		$query = $this->model_mahasiswa->updatemhs($uts, $id);

		if($query){
			header('location:'.base_url().$this->index());
		}
	}

	public function delete($id){
		$query = $this->model_mahasiswa->deletemhs($id);

		if($query){
			header('location:'.base_url().$this->index());
		}
	}
}


?>