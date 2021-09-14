<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

public function __construct()
    {
        parent::__construct();
        $this->load->model('Login_Model');
        // $this->load->helper('form', 'url');
        // $this->load->library('form_validation');
         $this->load->library('session');
    }
	public function index()
	{
        $data['title'] = 'Bitung Jaya';
		$this->load->view('login',$data);
	}

    public function forgotPassword()
	{
        $data['title'] = 'Bitung Jaya';
		$this->load->view('forgot_password',$data);
	}

	public function signIn(){
		$email = $this->input->post('email');
        $password = $this->input->post('password');
       
        $login = $this->Login_Model->cek_user($email,$password);
       
            if (empty($login)) {
                $this->session->set_flashdata('msg', '<div class="alert bg-danger" role="alert"><em class="fa fa-lg fa-warning"></em> <a style="color:white;">Maaf Email atau Password yang anda masukan tidak sesuai</a>
            <a href="#" class="pull-right"><i class="fa fa-lg fa-close"></i></a></div>');
                redirect('Login');
            } else {

                if ($login) {
                    $this->session->set_userdata(
                    array(
                'id_user' => $login[0]->id_user,
                'nama_user' => $login[0]->nama_user,
                'email'      => $login[0]->email,
                'password'      => $login[0]->password,
                'role_id'      => $login[0]->role_id)
                );
      				redirect('Admin/dashboard');
                   
                }
                    $this->session->set_flashdata('msg', '<div class="alert alert-success"><strong>Mohon Maaaf! </strong> Akun anda belum aktif silahkan menunggu email dari kami!</div>');
                    redirect('Login');
            }
        
    }

}
