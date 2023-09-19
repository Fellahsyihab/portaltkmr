<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Banner extends CI_Controller 
{

    function banner_image()
    {

        $data['judul'] = 'Banner Image';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')]) 
        ->row_array();

        //QUERY AMBIL TABLE DATABASE
         $data['banner_image'] = $this->db->get_where('banner_image')->result_array();
        $data['admin_berita'] = $this->db->get_where('admin_berita')->result_array();
        $data['admin_manrisk'] = $this->db->get_where('admin_manrisk')->result_array();
        $data['admin_about'] = $this->db->get_where('admin_about')->result_array();
        $data['admin_menu'] = $this->db->get_where('admin_menu')->result_array();
       
        
        

        //SET RULES
        $this->form_validation->set_rules('text', 'Text', 'required|trim');
        $this->form_validation->set_rules('judul', 'Judul', 'required|trim');
        
        
        if ($this->form_validation->run() == false) {

         $this->load->view('admin_menu/banner_image', $data);
         
         

        } else {


           $config['upload_path'] = './front-end/assets/img/Header_Beranda';
           $config['allowed_types'] = 'png|jpg|jpeg|gif';
           $config['max_size'] = 2048;

           $this->load->library('upload', $config);

           if (!$this->upload->do_upload('image')) {
            $this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">
            Gambar pada banner belum di upload! </div>' );
            redirect('admin_menu/banner_image');
           } else {
               $gambar = $this->upload->data();
               $gambar = $gambar['file_name'];
               $text   = $this->input->post('text', true);
               
           }



            $data = [
                'text' =>$text
                
                
            ];
            // INSERT KE TABEL ADMIN MENU
            $this->db->insert('admin_menu/banner_image', $data);
            $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">
            Selamat, Data banner anda sudah ditambahkan! </div>');
            redirect('admin_menu/banner_image');
        
        }
       
    
    } 
} 


