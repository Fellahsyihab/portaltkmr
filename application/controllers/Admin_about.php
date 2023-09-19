<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_about extends CI_Controller 
{


    public function __construct()
    {
        parent::__construct();
        if (!$this->session->userdata('as_id') == 1) {
            redirect('auth');
        } elseif ($this->session->userdata('as_id') == 2) {
            redirect('user');
        }
    }
    

    public function index()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')]) 
        ->row_array();

        //QUERY AMBIL TABLE DATABASE
        $data['admin_menu'] = $this->db->get_where('admin_menu')->result_array();
        $data['admin_about'] = $this->db->get_where('admin_about')->result_array();
        $data['admin_manrisk'] = $this->db->get_where('admin_manrisk')->result_array();
        $data['admin_berita'] = $this->db->get_where('admin_berita')->result_array();
        

        //SET RULES
        $this->form_validation->set_rules('nama', 'Nama Menu', 'required|trim');
        $this->form_validation->set_rules('icon', 'Icon', 'required|trim');
        $this->form_validation->set_rules('url', 'URL', 'required|trim');
        
        if ($this->form_validation->run() == false) {

         $this->load->view('admin_about/index', $data);

        } else {

            $data = [
                'nama' =>$this->input->post('nama'),
                'icon' =>$this->input->post('icon'),
                'url' =>$this->input->post('url'),
            ];
            // INSERT KE TABEL ADMIN ABOUT
            $this->db->insert('admin_about', $data);
            $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">
            Selamat, Data menu anda sudah ditambahkan! </div>');
            redirect('admin_about');
        
        }
       
    }

    public function edit()
    

    {
      

       

        //SET RULES UNTUK EDIT MENU
        $this->form_validation->set_rules('nama', 'Nama Menu', 'required|trim');
        $this->form_validation->set_rules('icon', 'Icon', 'required|trim');
        $this->form_validation->set_rules('url', 'URL', 'required|trim');

        if ($this->form_validation->run() == false) {
            $this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">
            Gagal mengupdate, data yang di masukan kosong.! </div>');
            redirect('admin_about');
            
   
           } else {
   
               $nama = $this->input->post('nama', true);
               $icon = $this->input->post('icon', true);
               $url  = $this->input->post('url', true);

               //SET DATA YANG MAU DI UPDATE
               $this->db->set('nama', $nama);
               $this->db->set('icon', $icon);
               $this->db->set('url', $url);
               $this->db->where('id', $this->input->post('id'));

               // UPDATE KE TABEL ADMIN MENU
               $this->db->update('admin_about', $data);
               $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">
               Selamat, Data menu anda sudah di update! </div>');
               redirect('admin_about');
           
           }
        

    }
    
    public function hapus()
    

    {
      
    
       
    
        //SET RULES UNTUK HAPUS MENU
        $this->form_validation->set_rules('nama', 'Nama Menu', 'required|trim');
        $this->form_validation->set_rules('icon', 'Icon', 'required|trim');
        $this->form_validation->set_rules('url', 'URL', 'required|trim');
    
       
            
    
           
    
               //SET DATA YANG MAU DI HAPUS
               $this->db->set('nama', $nama);
               $this->db->set('icon', $icon);
               $this->db->set('url', $url);
               $this->db->where('id', $this->input->post('id'));
    
               // HAPUS KE TABEL ADMIN MENU
               $this->db->delete('admin_about');
               $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">
               Selamat, Data menu anda sudah di hapus! </div>');
               redirect('admin_about');
    
           }
    
    }




