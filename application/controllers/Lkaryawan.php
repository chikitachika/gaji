<?php 

class Lkaryawan extends CI_Controller{

	function __construct(){
		parent::__construct();		
		$this->load->model('m_data');
		$this->load->helper('url');

	}

	function index(){
		$data['karyawan'] = $this->m_data->tampil_data()->result();
		$this->load->view('v_karyawan',$data);
	}
//fungsi untuk ke view v_input
	function tambah(){
		$this->load->view('v_input');
	}
//fungsi tambah data
	function tambah_aksi(){
        $nik = $this->input->post('nik');
		$nama = $this->input->post('nama');
        $alamat = $this->input->post('alamat');
        $jenis_kelamin = $this->input->post('jenis_kelamin');
        $pekerjaan = $this->input->post('pekerjaan');
        $gaji = $this->input->post('gaji');
        $status = $this->input->post('status');

		$data = array(
            'nik' => $nik,
			'nama' => $nama,
            'alamat' => $alamat,
            'jenis_kelamin' => $jenis_kelamin,
            'pekerjaan' => $pekerjaan,
            'gaji' => $gaji,
            'status' => $status
			);
		$this->m_data->input_data($data,'karyawan');
        redirect('lkaryawan/index');

	}

    public function hapus($id)
   {
       $this->db->delete('karyawan', array('id' => $id));
       redirect('lkaryawan/index');
   }
  
//fungsi edit
   function editt($id){
       $id = $this->input->post('id');
       $nik = $this->input->post('nik');
       $nama = $this->input->post('nama');
       $alamat = $this->input->post('alamat');
       $jenis_kelamin = $this->input->post('jenis_kelamin');
       $pekerjaan = $this->input->post('pekerjaan');
       $gaji = $this->input->post('gaji');
       $status = $this->input->post('status');

       $where = array('id'=>$id);
       $data = array(
        'nik' => $nik,
        'nama' => $nama,
        'alamat' => $alamat,
        'jenis_kelamin' => $jenis_kelamin,
        'pekerjaan' => $pekerjaan,
        'gaji' => $gaji,
        'status' => $status
        );
       $this->m_data->update_data($where,$data,'karyawan');
       redirect('lkaryawan/index');
   }


  //fungsi update data  

function update(){
    $id = $this->input->post('id');
    $nik = $this->input->post('nik');
    $nama = $this->input->post('nama');
    $alamat = $this->input->post('alamat');
    $jenis_kelamin = $this->input->post('jenis_kelamin');
    $pekerjaan = $this->input->post('pekerjaan');
    $gaji = $this->input->post('gaji');
    $status = $this->input->post('status');

    $data = array(
        'nik' => $nik,
        'nama' => $nama,
        'alamat' => $alamat,
        'jenis_kelamin' => $jenis_kelamin,
        'pekerjaan' => $pekerjaan,
        'gaji' => $gaji,
        'status' => $status
    );

    
    $where = array(
		'id' => $id
	);
 
	$this->m_data->update_data($where,$data,'karyawan');
	redirect('lkaryawan/index');
   
}




}


