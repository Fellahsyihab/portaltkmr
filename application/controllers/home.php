<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class home extends CI_Controller 
{
    public function index()
    { 

         $data['kbr_tkmr'] = $this->db->get_where('kbr_tkmr')->result_array();
         $data['prdk_tkmr'] = $this->db->get_where('prdk_tkmr')->result_array();
         $data['elrn_tkmr'] = $this->db->get_where('elrn_tkmr')->result_array();
         $data['krywn_tkmr'] = $this->db->get_where('krywn_tkmr')->result_array();
         $data['pstr_tkmr'] = $this->db->get_where('pstr_tkmr')->result_array();
         $data['skls_tkmr'] = $this->db->get_where('skls_tkmr')->result_array();
         $data['banner_image'] = $this->db->get_where('banner_image')->result_array();
         
         
       
         $this->load->view('index', $data);
        

      
        
        
        
    }

    public function about_GCG()
    {
        $this->load->view('about_GCG');
        
        
        
    }

    public function about_manrisk()
    {
        $this->load->view('about_manrisk');
        
        
        
    }

    public function about_berita($slug)
    {

        $data['judul'] = 'about_berita';

        $data['kbr_tkmr'] = $this->db->get_where('kbr_tkmr', ['slug'  => $slug])->row_array();
        

        $this->load->view('about_berita', $data);


        
        
        
        
    }


    




}



