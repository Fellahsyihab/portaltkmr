<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }


	public function index()
	{
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'required|trim');

        if ($this->form_validation->run() == false) {
           
            $this->load->view('Auth/login');  
        } else {

           $email = $this->input->post('email');
           $password = $this->input->post('password');

           $user = $this->db->get_where('user', ['email' => $email])->row_array();

           

           if ($user) {
               if (password_verify($password, $user['password'])) {
                $data = [
                    'email' => $user ['email'], 
                    'as_id' => $user ['as_id']
                ];
                $this->session->set_userdata($data);
                
                if($user['as_id'] == 1) {
                   redirect('admin');
                } else {
                    redirect('user');
                }

            } else {
              $this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">
              Password anda salah! </div>');
              redirect('auth');
            }
        } else {
            $this->session->set_flashdata('pesan', '<div class="alert alert-warning" role="alert">
            Email anda salah, Anda belum mendaftar </div>');
            redirect('auth');
        }

        }
		
	}


    public function registrasi()
	{
        $this->form_validation->set_rules('nama', 'Nama', 'required|trim');
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email');
        $this->form_validation->set_rules('password1', 'Password1', 'required|trim|max_length[20]|matches[password2]');
        $this->form_validation->set_rules('password2', 'Password2', 'required|trim|matches[password1]');
        
        if ($this->form_validation->run() == false) {
            
            $this->load->view('Auth/registrasi');
        } 
           else {
             
            $data = [
                'nama'             => $this->input->post('nama'),
                'email'            => $this->input->post('email'),
                'password'         => password_hash($this->input->post('password1'),
                                     PASSWORD_DEFAULT),
                'as_id'            => 2,
                'gambar'           => 'user.png',
                'date_created'     => time(),
                
            ];

            $this->db->insert('user', $data);
            $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">
            Selamat, Anda Sudah Terdaftar! Silahkan Login! </div>');
            redirect('auth');
        }
	}


    public function keluar()
    {
        $this->session->unset_userdata('email');
        $this->session->unset_userdata('as_id');
        $this->session->set_flashdata('pesan', '<div class="alert alert-primary" role="alert">
        Anda sudah keluar! </div>');
        redirect('auth');
    }
}

