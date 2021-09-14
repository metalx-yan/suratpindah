<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct()
  {
    parent::__construct();
    $this->load->model('Admin_Model');
  }

	public function dashboard()
	{
     if ($this->session->role_id  == '1') {
    $data['title'] = 'Sisfo Kependudukan';
    $data['isi_pengajuan'] = $this->Admin_Model->getJumlah('tb_mutasi','id_mutasi');
    $data['isi_penduduks'] = $this->Admin_Model->getJumlah('tb_penduduk','nik');
    $data['laki'] = $this->Admin_Model->getTotalGender('tb_penduduk','jenis_kelamin','Laki-Laki');
    $data['perempuan'] = $this->Admin_Model->getTotalGender('tb_penduduk','jenis_kelamin','Perempuan');
		$data['pindah'] = $this->Admin_Model->getTotalPindah('tb_mutasi','status_mutasi','2');
		$data['masuk'] = $this->Admin_Model->getTotalPindah('tb_mutasi','status_mutasi','1');
		$this->load->view('section/header',$data);
		$this->load->view('dashboard',$data);
		$this->load->view('section/footer',$data);
     }else{
        $this->session->set_flashdata('msg', '<div class="alert bg-danger" role="alert"><em class="fa fa-lg fa-warning"></em> <a style="color:white;"> Username dan Password Tidak Valid</a>
            <a href="#" class="pull-right"><i class="fa fa-lg fa-close"></i></a></div>');
          redirect('Login');
      }
	}

  public function penduduk()
  {
     if ($this->session->role_id  == '1') {
    $data['title'] = 'Sisfo Bitung Jaya';
    $data['isi'] = $this->Admin_Model->read('tb_penduduk');
    $this->load->view('section/header',$data);
    $this->load->view('penduduk',$data);
    $this->load->view('section/footer',$data);


     }else{
        $this->session->set_flashdata('msg', '<div class="alert bg-danger" role="alert"><em class="fa fa-lg fa-warning"></em> <a style="color:white;"> Anda tidak berhak mengakses halaman ini</a>
            <a href="#" class="pull-right"><i class="fa fa-lg fa-close"></i></a></div>');
          redirect('Login');
      }
  }

  public function proses_add_penduduk()
  {
    $data = array(
      'nik' => $this->input->post('nik',TRUE),
      'kk' => $this->input->post('kk',TRUE),
      'nama_lengkap' => $this->input->post('nama',TRUE),
      'jenis_kelamin' => $this->input->post('jenis_kelamin',TRUE),
      'status_perkawinan' => $this->input->post('status_perkawinan',TRUE),
      'alamat' => $this->input->post('alamat',TRUE),
      'tempat_lahir' => $this->input->post('tempat_lahir',TRUE),
      'tanggal_lahir' => $this->input->post('tanggal_lahir',TRUE),
      'pekerjaan' => $this->input->post('pekerjaan',TRUE),
      'nomor_telepon' => $this->input->post('nohp',TRUE),
      'status' => '1',
        );

        $result = $this->Admin_Model->insert($data,'tb_penduduk');

      if ($result) {
      $this->session->set_flashdata('msg', '<div class="alert alert-success"><strong>Berhasil! </strong>Data berhasil disimpan!</div>');
      } else {
      $this->session->set_flashdata('msg', '<div class="alert alert-danger"><strong>Gagal! </strong>Data gagal disimpan!</div>');
      }
        redirect('Admin/penduduk','refresh');
  }

	public function proses_update_user($id_penduduk)
  {
    $data = array(
      'nik' => $this->input->post('nik',TRUE),
      'kk' => $this->input->post('kk',TRUE),
      'nama_lengkap' => $this->input->post('nama',TRUE),
      'jenis_kelamin' => $this->input->post('jenis_kelamin',TRUE),
      'status_perkawinan' => $this->input->post('status_perkawinan',TRUE),
      'alamat' => $this->input->post('alamat',TRUE),
      'tempat_lahir' => $this->input->post('tempat_lahir',TRUE),
      'tanggal_lahir' => $this->input->post('tanggal_lahir',TRUE),
      'pekerjaan' => $this->input->post('pekerjaan',TRUE),
      'nomor_telepon' => $this->input->post('nohp',TRUE),
      'status' => '1',
        );

        $result = $this->Admin_Model->update($id_penduduk,$data,'tb_penduduk');

      if ($result) {
      $this->session->set_flashdata('msg', '<div class="alert alert-success"><strong>Berhasil! </strong>Data berhasil disimpan!</div>');
      } else {
      $this->session->set_flashdata('msg', '<div class="alert alert-danger"><strong>Gagal! </strong>Data gagal disimpan!</div>');
      }
        redirect('Admin/penduduk','refresh');
  }

	public function proses_update_mutasi($id_mutasi,$status_mutasi)
  {
		if ($status_mutasi == 1) {
			$status = '1';
		}else{
			$status = '2';
		}
    $data = array(
      'nik' => $this->input->post('nik',TRUE),
      'tanggal_mutasi' => $this->input->post('tanggal_mutasi',TRUE),
      'alamat_mutasi' => $this->input->post('alamat_mutasi',TRUE),
      'keterangan' => $this->input->post('keterangan',TRUE),
      'status_mutasi' => $status,
      'status_permintaan' => '1',
        );

        $result = $this->Admin_Model->updateMutasi($id_mutasi,$data,'tb_mutasi');

      if ($result) {
      $this->session->set_flashdata('msg', '<div class="alert alert-success"><strong>Berhasil! </strong>Data berhasil disimpan!</div>');
      } else {
      $this->session->set_flashdata('msg', '<div class="alert alert-danger"><strong>Gagal! </strong>Data gagal disimpan!</div>');
      }
        redirect('Admin/mutasi','refresh');
  }

  public function proses_hapus_penduduk($id_penduduk){
    $where = array('id_penduduk' => $id_penduduk);

    $this->Admin_Model->delete('tb_penduduk',$where);
    $this->session->set_flashdata('msg', '<div class="alert alert-success"><strong>Berhasil! </strong>Data berhasil dihapus!</div>');
     redirect('Admin/penduduk','refresh');
	} 

	public function proses_hapus_mutasi($id_mutasi){
    $where = array('id_mutasi' => $id_mutasi);

    $this->Admin_Model->delete('tb_mutasi',$where);
    $this->session->set_flashdata('msg', '<div class="alert alert-success"><strong>Berhasil! </strong>Data berhasil dihapus!</div>');
     redirect('Admin/mutasi','refresh');
	} 

  public function mutasi()
  {
     if ($this->session->role_id  == '1') {
    $data['title'] = 'Sisfo Bitung Jaya';
    $data['isi'] = $this->Admin_Model->getPermintaanMutasi('tb_mutasi','tb_penduduk');
    $data['mutasiMasuk'] = $this->Admin_Model->getMutasiMasuk('tb_mutasi','tb_penduduk');
    $data['mutasiKeluar'] = $this->Admin_Model->getMutasiKeluar('tb_mutasi','tb_penduduk');
    $data['getPenduduk'] = $this->Admin_Model->read('tb_penduduk');
    $data['del'] = $this->Admin_Model->read('tb_mutasi');
    $this->load->view('section/header',$data);
    $this->load->view('mutasi',$data);
    $this->load->view('section/footer',$data);


     }else{
        $this->session->set_flashdata('msg', '<div class="alert bg-danger" role="alert"><em class="fa fa-lg fa-warning"></em> <a style="color:white;"> Anda tidak berhak mengakses halaman ini</a>
            <a href="#" class="pull-right"><i class="fa fa-lg fa-close"></i></a></div>');
          redirect('Login');
      }
  }

  public function proses_add_mutasi_masuk()
  {
   
    $data = array(
      'nik' => $this->input->post('nik',TRUE),
      'tanggal_mutasi' => $this->input->post('tanggal_mutasi',TRUE),
      'alamat_mutasi' => $this->input->post('alamat_mutasi',TRUE),
      'keterangan' => $this->input->post('keterangan',TRUE),
      'status_mutasi' => '1',
      'status_permintaan' => '1',
        );

        $result = $this->Admin_Model->insert($data,'tb_mutasi');

      if ($result) {
      $this->session->set_flashdata('msg', '<div class="alert alert-success"><strong>Berhasil! </strong>Data berhasil disimpan!</div>');
      } else {
      $this->session->set_flashdata('msg', '<div class="alert alert-danger"><strong>Gagal! </strong>Data gagal disimpan!</div>');
      }
        redirect('Admin/mutasi');
  }

  public function proses_add_mutasi_keluar()
  {
   
    $data = array(
      'nik' => $this->input->post('nik',TRUE),
      'tanggal_mutasi' => $this->input->post('tanggal_mutasi',TRUE),
      'alamat_mutasi' => $this->input->post('alamat_mutasi',TRUE),
      'keterangan' => $this->input->post('keterangan',TRUE),
      'status_mutasi' => '2',
      'status_permintaan' => '1',
        );

        $result = $this->Admin_Model->insert($data,'tb_mutasi');

      if ($result) {
      $this->session->set_flashdata('msg', '<div class="alert alert-success"><strong>Berhasil! </strong>Data berhasil disimpan!</div>');
      } else {
      $this->session->set_flashdata('msg', '<div class="alert alert-danger"><strong>Gagal! </strong>Data gagal disimpan!</div>');
      }
        redirect('Admin/mutasi','refresh');
  }

    public function meninggal()
  {
     if ($this->session->role_id  == '1') {
    $data['title'] = 'Sisfo Bitung Jaya';
    $data['isi'] = $this->Admin_Model->getDatabyJoin('tb_meninggal','tb_penduduk');
    $data['getPenduduk'] = $this->Admin_Model->read('tb_penduduk');
    $this->load->view('section/header',$data);
    $this->load->view('meninggal',$data);
    $this->load->view('section/footer',$data);


     }else{
        $this->session->set_flashdata('msg', '<div class="alert bg-danger" role="alert"><em class="fa fa-lg fa-warning"></em> <a style="color:white;"> Anda tidak berhak mengakses halaman ini</a>
            <a href="#" class="pull-right"><i class="fa fa-lg fa-close"></i></a></div>');
          redirect('Login');
      }
  }

  public function proses_add_meninggal()
  {
   
    $data = array(
      'nik' => $this->input->post('nik',TRUE),
      'tanggal_meninggal' => $this->input->post('tanggal_meninggal',TRUE),
      'penyebab' => $this->input->post('penyebab',TRUE),
        );

        $result = $this->Admin_Model->insert($data,'tb_meninggal');

      if ($result) {
      $this->session->set_flashdata('msg', '<div class="alert alert-success"><strong>Berhasil! </strong>Data berhasil disimpan!</div>');
      } else {
      $this->session->set_flashdata('msg', '<div class="alert alert-danger"><strong>Gagal! </strong>Data gagal disimpan!</div>');
      }
        redirect('Admin/meninggal','refresh');
  }



    public function logout(){
    $this->session->sess_destroy();
    redirect('Login');
    }


}
