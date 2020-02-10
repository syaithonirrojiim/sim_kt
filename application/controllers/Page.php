<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Page extends CI_Controller{

	function __construct(){
		parent::__construct();
		//validasi jika user belum login
		$this->load->model('m_page');
		$this->load->helper('url');
		$this->load->helper(array('form', 'url'));
		$this->load->library('form_validation');

	}



	//EXPORT//
	public function export(){
		include APPPATH.'third_party/PHPExcel/PHPExcel.php';

		$excel = new PHPExcel();

		$excel->getProperties()->setCreator('My Notes Code')
		->setLastModifiedBy('My Notes Code')
		->setTitle("Data Kuliah Tamu")
		->setSubject("Kuliah TAMU")
		->setDescription("Data Kuliah Tamu")
		->setKeywords("Data Kuliah Tamu");
		$style_col = array(
			'font' => array('bold' => true),
			'alignment' => array(
				'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_CENTER,
				'vertical' => PHPExcel_Style_Alignment::VERTICAL_CENTER
			),
			'borders' => array(
				'top' => array('style'  => PHPExcel_Style_Border::BORDER_THIN),
				'right' => array('style'  => PHPExcel_Style_Border::BORDER_THIN),
				'bottom' => array('style'  => PHPExcel_Style_Border::BORDER_THIN),
				'left' => array('style'  => PHPExcel_Style_Border::BORDER_THIN)
			)
		);

		$style_row = array(
			'alignment' => array(
				'vertical' => PHPExcel_Style_Alignment::VERTICAL_CENTER
			),
			'borders' => array(
				'top' => array('style'  => PHPExcel_Style_Border::BORDER_THIN),
				'right' => array('style'  => PHPExcel_Style_Border::BORDER_THIN),
				'bottom' => array('style'  => PHPExcel_Style_Border::BORDER_THIN),
				'left' => array('style'  => PHPExcel_Style_Border::BORDER_THIN)
			)
		);
		$excel->setActiveSheetIndex(0)->setCellValue('A1', "DATA Kuliah Tamu");
		$excel->getActiveSheet()->mergeCells('A1:E1');
		$excel->getActiveSheet()->getStyle('A1')->getFont()->setBold(TRUE);
		$excel->getActiveSheet()->getStyle('A1')->getFont()->setSize(15);
		$excel->getActiveSheet()->getStyle('A1')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);

		$excel->setActiveSheetIndex(0)->setCellValue('A3', "No");
		$excel->setActiveSheetIndex(0)->setCellValue('B3', "NIM");
		$excel->setActiveSheetIndex(0)->setCellValue('C3', "Nama");
		$excel->setActiveSheetIndex(0)->setCellValue('D3', "Tema Kuliah Tamu");
		$excel->setActiveSheetIndex(0)->setCellValue('E3', "Kehadiran");

		$excel->getActiveSheet()->getStyle('A3')->applyFromArray($style_col);
		$excel->getActiveSheet()->getStyle('B3')->applyFromArray($style_col);
		$excel->getActiveSheet()->getStyle('C3')->applyFromArray($style_col);
		$excel->getActiveSheet()->getStyle('D3')->applyFromArray($style_col);
		$excel->getActiveSheet()->getStyle('E3')->applyFromArray($style_col);

		$absen = $this->m_page->get_absen();
		$no = 1;
		$numrow = 4;
		foreach($absen as $data){
			$excel->setActiveSheetIndex(0)->setCellValue('A'.$numrow, $no);
			$excel->setActiveSheetIndex(0)->setCellValue('B'.$numrow, $data->nim);
			$excel->setActiveSheetIndex(0)->setCellValue('C'.$numrow, $data->nama);
			$excel->setActiveSheetIndex(0)->setCellValue('D'.$numrow, $data->kuliah);


			$excel->getActiveSheet()->getStyle('A'.$numrow)->applyFromArray($style_row);
			$excel->getActiveSheet()->getStyle('B'.$numrow)->applyFromArray($style_row);
			$excel->getActiveSheet()->getStyle('C'.$numrow)->applyFromArray($style_row);
			$excel->getActiveSheet()->getStyle('D'.$numrow)->applyFromArray($style_row);
			$excel->getActiveSheet()->getStyle('E'.$numrow)->applyFromArray($style_row);

			$no++;
			$numrow++;
		}

		$excel->getActiveSheet()->getColumnDimension('A')->setWidth(5);
		$excel->getActiveSheet()->getColumnDimension('B')->setWidth(15);
		$excel->getActiveSheet()->getColumnDimension('C')->setWidth(25);
		$excel->getActiveSheet()->getColumnDimension('D')->setWidth(20);
		$excel->getActiveSheet()->getColumnDimension('E')->setWidth(15);


		$excel->getActiveSheet()->getDefaultRowDimension()->setRowHeight(-1);

		$excel->getActiveSheet()->getPageSetup()->setOrientation(PHPExcel_Worksheet_PageSetup::ORIENTATION_LANDSCAPE);

		$excel->getActiveSheet(0)->setTitle("Data Kuliah Tamu");
		$excel->setActiveSheetIndex(0);

		header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
		header('Content-Disposition: attachment; filename="Data Kuliah Tamu.xlsx"');
		header('Cache-Control: max-age=0');
		$write = PHPExcel_IOFactory::createWriter($excel, 'Excel2007');
		$write->save('php://output');
	}
	//
	//
	//
	//
	//
	//

	function kosong($id_info_kt){
		$data = array(
			'status' => '0'
		);

		$where = array(
			'id_info_kt' => $id_info_kt
		);
		$this->m_page->update_data($where,$data,'info_kt');
		redirect('page/info_kt');
	}

	function isi($id_info_kt){
		$data = array(
			'status' => '1'
		);
		$where = array(
			'id_info_kt' => $id_info_kt
		);
		$this->m_page->update_data($where,$data,'info_kt');
		redirect('page/info_kt');
	}

	function hadir($nim){
		$data = array(
			'status' => '1'
		);
		$where = array(
			'nim' => $nim
		);
		$this->m_page->update_data($where,$data,'daftar');
		redirect('page/live_kt');
	}
	function bolos($nim){
		$data = array(
			'status' => '0'
		);

		$where = array(
			'nim' => $nim
		);
		$this->m_page->update_data($where,$data,'daftar');
		redirect('page/live_kt');
	}


	function view_kt()
	{
		$this->load->helper(array('form', 'url'));
		$data["info_kt"] = $this->m_page->getAll();
		$this->load->view("home", $data);
	}

	public function absen(){
		//$this->load->helper(array('form', 'url'));
		//$data["daftar"] = $this->m_page->get_was_regist();
		//$this->load->view("absen", $data);
		$data["matkul"] = $this->m_page->get_matkul_tamu();
		$this->load->view("pilih_matkul", $data);
	}

	public function live_kt(){
		$id_kt = $this->input->post('id_kt');
		$this->load->helper(array('form', 'url'));
		$where = array(
			'id_info_kt' => $id_kt
		);
		$this->m_page->get_absen($where);
		$data["daftar"] = $this->m_page->get_absen($id_kt);
		$this->load->view("absen", $data);
	}



	public function info_kt()
	{
		$this->load->helper(array('form', 'url'));
		$data["info_kt"] = $this->m_page->getAll();
		$this->load->view("info_kt", $data);
	}

	public function daftar(){
		$data=array('info_kt'=> $this->m_page->get_option());  
		$this->load->view('daftar_kt', $data);
	}
	function daftar_xecute(){
		//save the inputer
		$nim = $this->input->post('nim');
		$id_kt = $this->input->post('id_kt');
		$status = '0';
		//execution
		$data = array(
			'nim' => $nim,
			'id_kt' => $id_kt,
			'status' => $status			
		);
		$this->m_page->input_data($data,'daftar');
		redirect('page/view_kt');
	}

	public function admin(){
		$data["admin"] = $this->m_page->show_admin();
		$this->load->view("admin", $data);
	}

	public function mahasiswa(){
		$data["data_mhs"] = $this->m_page->show_member();
		$this->load->view("mahasiswa", $data);
	}

	///KULIAH TAMU
	///
	///
	function add_kt(){
		$this->load->view('inputkt');
	}
	function kt_xecution(){
		//save the inputer
		$kuliah = $this->input->post('kuliah');
		$waktu = $this->input->post('waktu');
		$tempat = $this->input->post('tempat');
		$status = '0';
		//execution
		$data = array(
			'kuliah' => $kuliah,
			'waktu' => $waktu,
			'tempat' => $tempat,
			'status' => $status
		);
		$this->m_page->input_data($data,'info_kt');
		redirect('page/info_kt');
	}
	//----End of Add----//
	//UBAH
	//
	//----EDIT KULIAH TAMU----//
	function ubah_kt($id_info_kt){
		$where = array('id_info_kt' => $id_info_kt);
		$data['info_kt'] = $this->m_page->edit_data($where,'info_kt')->result();
		$this->load->view('edit_kt',$data);
	}
	function update_kt(){
		$id_info_kt = $this->input->post('id_info_kt');
		$kuliah = $this->input->post('kuliah');
		$waktu = $this->input->post('waktu');
		$tempat = $this->input->post('tempat');
		//execution
		$data = array(
			'kuliah' => $kuliah,
			'waktu' => $waktu,
			'tempat' => $tempat

		);

		$where = array(
			'id_info_kt' => $id_info_kt
		);

		$this->m_page->update_data($where,$data,'info_kt');
		redirect('page/info_kt');
	}
	//----End Of Edit----//

	function hapus_kt($id_info_kt){
		$where = array('id_info_kt' => $id_info_kt);
		$this->m_page->hapus_data($where,'info_kt');
		redirect('page/info_kt');
	}
	//

    ////ADMIN
    ///
    //----ADD Admin/Co----//
	function add_admin(){
		$this->load->view('inputadmin');
	}
	function admin_xecution(){
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
	function edit_min($id_user){
		$where = array('id_user' => $id_user);
		$data['admin'] = $this->m_page->edit_data($where,'admin')->result();
		$this->load->view('edit_data',$data);
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

	function delete_min($id_user){
		$where = array('id_user' => $id_user);
		$this->m_page->hapus_data($where,'admin');
		redirect('page/admin');
	}
    ///
    ///
    ///
    ///
    ///
    //----ADD MHS----//
	function add_mahasiswa(){
		$this->load->view('inputmhs');
	}
	function add_xecution_mhs(){
		//save the inputer
		$nim = $this->input->post('nim');
		$nim = $this->input->post('nim');
		$nama = $this->input->post('nama');
		//execution
		$data = array(
			'nim' => $nim,
			'nama' => $nama
		);
		$this->m_page->input_data($data,'data_mhs');
		redirect('page/mahasiswa');
	}
	//----End of Add----//
	//
	//
	//----EDIT ADMIN/CO----//
	function edit_mhs($nim){
		$where = array('nim' => $nim);
		$data['data_mhs'] = $this->m_page->edit_data($where,'data_mhs')->result();
		$this->load->view('edit_mhs',$data);
	}
	function update_mhs(){
		$nim = $this->input->post('nim');
		$nim_lama = $this->input->post('nim_lama');
		$nama = $this->input->post('nama');
		//execution
		$data = array(
			'nim' => $nim,
			'nama' => $nama,
		);

		$where = array(
			'nim' => $nim_lama
		);

		$this->m_page->update_data($where,$data,'data_mhs');
		redirect('page/mahasiswa');
	}
	//----End Of Edit----//

	function delete_mhs($nim){
		$where = array('nim' => $nim);
		$this->m_page->hapus_data($where,'data_mhs');
		redirect('page/mahasiswa');
	}




}