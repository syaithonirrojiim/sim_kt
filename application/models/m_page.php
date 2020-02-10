<?php defined('BASEPATH') OR exit('No direct script access allowed');

class M_page extends CI_Model{

	function get_option() {
		return $this->db
					->get_where("info_kt",
								array('status' => 0))->result();
		
	}

	public function get_was_regist(){
		$hasil = $this->db->query('SELECT a.nim, a.id_kt, a.status, c1.nama, c1.nim, c2.id_info_kt, c2.kuliah FROM daftar AS a INNER JOIN data_mhs AS c1 ON a.nim = c1.nim INNER JOIN info_kt AS c2 ON a.id_kt = c2.id_info_kt');
		return $hasil->result();
	}

	public function get_matkul_tamu(){
		$hasil = $this->db->query("SELECT * FROM info_kt order by kuliah ASC");
		return $hasil->result();
	}

	public function get_absen(){
		$hasil = $this->db->query("SELECT data_mhs.nim, data_mhs.nama, daftar.nim, daftar.id_kt, daftar.status, info_kt.kuliah, info_kt.waktu from (data_mhs data_mhs left JOIN daftar daftar on data_mhs.nim = daftar.nim) LEFT JOIN info_kt info_kt on daftar.id_kt = info_kt.id_info_kt where info_kt.id_info_kt = 1");
		return $hasil->result();
	}
	
	function show_admin(){
		return $this->db->get('admin')->result();
	}
	
	function show_member(){
		return $this->db->get('data_mhs')->result();
	}


	public function getAll()
	{
		return $this->db->get('info_kt')->result();
	}


	public function delete($id)
	{
		return $this->db->delete($this->_table, array("id_artikel" => $id));
	}


    function input_data($data,$table){
    	$this->db->insert($table,$data);
    }

	//Fungsi Edit Data
    function edit_data($where,$table){		
    	return $this->db->get_where($table,$where);
    }

    function update_data($where,$data,$table){
    	$this->db->where($where);
    	$this->db->update($table,$data);
    }
	// --- end ---//
    function hapus_data($where,$table){
    	$this->db->where($where);
    	$this->db->delete($table);
    }
}