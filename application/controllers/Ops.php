<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Ops extends CI_Controller{

	function __construct(){
		parent::__construct();
		//validasi jika user belum login
		if($this->session->userdata('masuk') != TRUE){
			$url=base_url();
			redirect($url);
		}	
		$this->load->model('m_page');
		$this->load->helper('url');
		$this->load->helper(array('form', 'url'));
		$this->load->library('form_validation');

	}

	public function index(){
		$this->load->helper(array('form', 'url'));
		$data["daftar"] = $this->m_page->get_was_regist();
		$this->load->view("index", $data);
	}

	public function admin(){
		$data["admin"] = $this->m_page->show_admin();
		$this->load->view("admin", $data);
	}
	public function member(){
		$data["member"] = $this->m_page->show_member();
		$this->load->view("member", $data);
	}

	public function add()
	{
		$artikel = $this->m_page;
		$validation = $this->form_validation;
		$validation->set_rules($artikel->rules());

		if ($validation->run()) {
			$artikel->save();
			$this->session->set_flashdata('success', 'Berhasil disimpan');
		}

		$this->load->view("new_form");
	}

	public function edit($id = null)
	{
		if (!isset($id)) redirect('artikel');

		$artikel = $this->m_page;
		$validation = $this->form_validation;
		$validation->set_rules($artikel->rules());

		if ($validation->run()) {
			$artikel->update();
			$this->session->set_flashdata('success', 'Berhasil disimpan');
		}

		$data["artikel"] = $artikel->getById($id);
		if (!$data["artikel"]) show_404();

		$this->load->view("edit_form", $data);
	}

	public function delete($id=null)
	{
		if (!isset($id)) show_404();

		if ($this->m_page->delete($id)) {
			redirect(site_url('page/'));
		}
	}


	public function search()
	{
		$keyword = $this->input->post('keyword');
		$this->db->like('judul',$keyword);
		$this->db->or_like('penulis',$keyword);
		$this->db->or_like('tema',$keyword);
		$this->db->or_like('edisi',$keyword);
		$query['artikel'] = $this->db->get('artikel')->result();
		$this->load->view('home',$query);
	}

	public function search_front()
	{
		$keyword = $this->input->post('keyword');
		$this->db->like('judul',$keyword);
		$this->db->or_like('penulis',$keyword);
		$this->db->or_like('tema',$keyword);
		$this->db->or_like('edisi',$keyword);
		$query['artikel'] = $this->db->get('artikel')->result();
		$this->load->view('dashboard',$query);
	}

	public function search_admin()
	{
		$keyword = $this->input->post('keyword');
		$this->db->like('nama',$keyword);
		$this->db->or_like('username',$keyword);
		$this->db->or_like('hp',$keyword);
		$query['admin'] = $this->db->get('admin')->result();
		$this->load->view('admin',$query);
	}

	public function search_member()
	{
		$keyword = $this->input->post('keyword');
		$this->db->like('nama',$keyword);
		$this->db->or_like('username',$keyword);
		$this->db->or_like('hp',$keyword);
		$this->db->or_like('alamat',$keyword);
		$query['member'] = $this->db->get('member')->result();
		$this->load->view('member',$query);
	}
    ////ADMIN
    ///
    //----ADD Admin/Co----//
	function add_admin(){
		$this->load->view('inputadmin');
	}
	function add_xecution(){
		//save the inputer
		$nama = $this->input->post('nama');
		$id_user = $this->input->post('username');
		$username = $this->input->post('username');
		$hp = $this->input->post('hp');
		$password = $this->input->post('password');
		$level = $this->input->post('level');
		//execution
		$data = array(
			'id_user' => $id_user,
			'nama' => $nama,
			'username' => $username,
			'password' => md5($this->input->post('password')),
			'hp' => $hp,
			'level' => $level
		);
		$this->m_page->input_data($data,'admin');
		redirect('page/admin');
	}
	//----End of Add----//
	//
	//
	//----EDIT ADMIN/CO----//
	function edit_admin($id_user){
		$where = array('id_user' => $id_user);
		$data['admin'] = $this->m_page->edit_data($where,'admin')->result();
		$this->load->view('editadmin',$data);
	}
	function update(){
		$id_user = $this->input->post('id_user');
		$username = $this->input->post('username');
		$nama = $this->input->post('nama');
		$hp = $this->input->post('hp');
		$level = $this->input->post('level');

		$data = array(
			'nama' => $nama,
			'username' => $username,
			'hp' => $hp,
			'level' => $level
		);

		$where = array(
			'id_user' => $id_user
		);

		$this->m_page->update_data($where,$data,'admin');
		redirect('page/admin');
	}
	//----End Of Edit----//

	function delete_admin($id_user){
		$where = array('id_user' => $id_user);
		$this->m_page->hapus_data($where,'admin');
		redirect('page/admin');
	}
    ///
    ///
    ///
    ///
    ///
    //----ADD Member----//
	function add_member(){
		$this->load->view('inputmember');
	}
	function add_xecution_member(){
		//save the inputer
		$id_member = $this->input->post('id_member');
		$nama = $this->input->post('nama');
		$username = $this->input->post('id_member');
		$password = $this->input->post('password');
		$hp = $this->input->post('hp');
		$alamat = $this->input->post('alamat');
		//execution
		$data = array(
			'id_member' => $id_member,
			'nama' => $nama,
			'username' => $username,
			'password' => md5($this->input->post('password')),
			'hp' => $hp,
			'alamat' => $alamat,
		);
		$this->m_page->input_data($data,'member');
		redirect('page/member');
	}
	//----End of Add----//
	//
	//
	//----EDIT ADMIN/CO----//
	function edit_member($id_member){
		$where = array('id_member' => $id_member);
		$data['member'] = $this->m_page->edit_data($where,'member')->result();
		$this->load->view('editmember',$data);
	}
	function update_member(){
		$id_member = $this->input->post('id_member');
		$username = $this->input->post('username');
		$nama = $this->input->post('nama');
		$hp = $this->input->post('hp');
		$alamat = $this->input->post('alamat');
		//execution
		$data = array(
			'nama' => $nama,
			'username' => $username,
			'hp' => $hp,
			'alamat' => $alamat
		);

		$where = array(
			'id_member' => $id_member
		);

		$this->m_page->update_data($where,$data,'member');
		redirect('page/member');
	}
	//----End Of Edit----//

	function delete_member($id_member){
		$where = array('id_member' => $id_member);
		$this->m_page->hapus_data($where,'member');
		redirect('page/member');
	}

	


}