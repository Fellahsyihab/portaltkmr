<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller 
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


        //QUERY AMBIL TABLE DATABASE
        
        $data['admin_menu'] = $this->db->get_where('admin_menu')->result_array();
        $data['admin_about'] = $this->db->get_where('admin_about')->result_array();
        $data['admin_manrisk'] = $this->db->get_where('admin_manrisk')->result_array();
        $data['admin_berita'] = $this->db->get_where('admin_berita')->result_array();
        
        
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')]) 
        ->row_array();

        $this->load->view('admin/index', $data);
    }

}