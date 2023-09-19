<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_menu extends CI_Controller 
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
        $data['kbr_tkmr'] = $this->db->get_where('kbr_tkmr')->result_array();
        $data['prdk_tkmr'] = $this->db->get_where('prdk_tkmr')->result_array();
        $data['elrn_tkmr'] = $this->db->get_where('elrn_tkmr')->result_array();
        $data['krywn_tkmr'] = $this->db->get_where('krywn_tkmr')->result_array();
        $data['pstr_tkmr'] = $this->db->get_where('pstr_tkmr')->result_array();
        $data['phrg_tkmr'] = $this->db->get_where('phrg_tkmr')->result_array();
        $data['skls_tkmr'] = $this->db->get_where('skls_tkmr')->result_array();
        $data['banner_image'] = $this->db->get_where('banner_image')->result_array();
        $data['admin_berita'] = $this->db->get_where('admin_berita')->result_array();
        $data['admin_manrisk'] = $this->db->get_where('admin_manrisk')->result_array();
        $data['admin_about'] = $this->db->get_where('admin_about')->result_array();
        $data['admin_menu'] = $this->db->get_where('admin_menu')->result_array();
        
        
        

        //SET RULES
        $this->form_validation->set_rules('nama', 'Nama Menu', 'required|trim');
        $this->form_validation->set_rules('icon', 'Icon', 'required|trim');
        $this->form_validation->set_rules('url', 'URL', 'required|trim');
        
        if ($this->form_validation->run() == false) {

         $this->load->view('admin_menu/index', $data);
         
         

        } else {

            $data = [
                'nama' =>$this->input->post('nama'),
                'icon' =>$this->input->post('icon'),
                'url' =>$this->input->post('url'),
            ];
            // INSERT KE TABEL ADMIN MENU
            $this->db->insert('admin_menu', $data);
            $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">
            Selamat, Data menu anda sudah ditambahkan! </div>');
            redirect('admin_menu');
        
        }
       
    } 
    

  public function banner_image()
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
        if ($this->form_validation->run()== false) {
            $this->load->view('admin_menu/banner_image', $data);


        } else {


           $config['upload_path'] = './front-end/assets/img/Header_Beranda';
           $config['allowed_types'] = 'png|jpg|jpeg|gif';
           $config['max_size'] = 2048;

           $this->load->library('upload', $config);

          
           if (!$this->upload->do_upload('image')) {
            $this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">
            Gagal Upload Banner ! </div>');
            redirect('admin_menu/banner_image');
           } else {
               $gambar = $this->upload->data();
               $gambar = $gambar['file_name'];
               $text   = $this->input->post('text', true);
               
               
           }



            $data = [
                'text' => $text,
                'gambar' => $gambar
               
               
               
               
                
               
                
                
                
            ];
            // INSERT KE TABEL ADMIN MENU
            $this->db->insert('banner_image', $data);
            $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">
            Selamat, Data banner anda sudah ditambahkan! </div>');
            redirect('admin_menu/banner_image');
        
        }
       
    } 
    public function skls_tkmr()
    {
        $data['judul'] = 'skls_tkmr';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')]) 
        ->row_array();

        //QUERY AMBIL TABLE DATABASE
        $data['skls_tkmr'] = $this->db->get_where('phrg_tkmr')->result_array();
        $data['skls_tkmr'] = $this->db->get_where('skls_tkmr')->result_array();
        $data['banner_image'] = $this->db->get_where('banner_image')->result_array();
        $data['admin_berita'] = $this->db->get_where('admin_berita')->result_array();
        $data['admin_manrisk'] = $this->db->get_where('admin_manrisk')->result_array();
        $data['admin_about'] = $this->db->get_where('admin_about')->result_array();
        $data['admin_menu'] = $this->db->get_where('admin_menu')->result_array();

    
      //SET RULES
      $this->form_validation->set_rules('judul', 'Judul', 'required|trim');
      $this->form_validation->set_rules('bio', 'bio', 'required|trim');
      $this->form_validation->set_rules('text', 'Text', 'required|trim');
      $this->form_validation->set_rules('next', 'next', 'required|trim');
      $this->form_validation->set_rules('nama', 'Nama', 'required|trim');
      $this->form_validation->set_rules('jbt', 'Jbt', 'required|trim');
      if ($this->form_validation->run()== false) {
        
        

        $this->load->view('admin_menu/skls_tkmr', $data);


    } else {


        $config['upload_path'] = './front-end/assets/img/Header_Beranda';
        $config['allowed_types'] = 'png|jpg|jpeg|gif';
        $config['max_size'] = 2048;

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('image')) {
            $this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">
            Gagal Upload Banner ! </div>');
            redirect('admin_menu/skls_tkmr');
           } else {
               $gambar = $this->upload->data();
               $gambar = $gambar['file_name'];
               $judul = $this->input->post('judul', true);
               $bio = $this->input->post('bio', true);
               $text   = $this->input->post('text', true);
               $next   = $this->input->post('next', true);
               $nama   = $this->input->post('nama', true);
               $jbt   = $this->input->post('jbt', true);
               
               
           }

           $data = [
            'judul' => $judul,
            'bio' => $bio,
            'text' => $text,
            'next' => $next,
            'nama' => $nama,
            'jbt' => $jbt,

            'gambar' => $gambar
           
           
           
           
            
           
            
            
            
        ];
        // INSERT KE TABEL ADMIN MENU
        $this->db->insert('skls_tkmr', $data);
        $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">
        Selamat, Data banner anda sudah ditambahkan! </div>');
        redirect('admin_menu/skls_tkmr');

        }
    }

    

    public function edit_skls($id)
   {

    $data['judul'] = 'edit_skls';
    $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')]) 
    ->row_array();

    //QUERY AMBIL TABLE DATABASE
    $data['skls_tkmr'] = $this->db->get_where('skls_tkmr', ['id' => $id])->row_array();
    $data['kbr_tkmr'] = $this->db->get_where('kbr_tkmr')->result_array();
    $data['prdk_tkmr'] = $this->db->get_where('prdk_tkmr')->result_array();
    $data['elrn_tkmr'] = $this->db->get_where('elrn_tkmr')->result_array();
    $data['pstr_tkmr'] = $this->db->get_where('pstr_tkmr')->result_array();
    $data['phrg_tkmr'] = $this->db->get_where('phrg_tkmr')->result_array();
    $data['banner_image'] = $this->db->get_where('banner_image')->result_array();
    $data['admin_berita'] = $this->db->get_where('admin_berita')->result_array();
    $data['admin_manrisk'] = $this->db->get_where('admin_manrisk')->result_array();
    $data['admin_about'] = $this->db->get_where('admin_about')->result_array();
    $data['admin_menu'] = $this->db->get_where('admin_menu')->result_array();

  
  //SET RULES
  $this->form_validation->set_rules('judul', 'Judul', 'required|trim');
  $this->form_validation->set_rules('bio', 'bio', 'required|trim');
  $this->form_validation->set_rules('text', 'Text', 'required|trim');
  $this->form_validation->set_rules('next', 'next', 'required|trim');
  $this->form_validation->set_rules('nama', 'Nama', 'required|trim');
  $this->form_validation->set_rules('jbt', 'Jbt', 'required|trim');

  if ($this->form_validation->run() == false) {
    $this->load->view('admin_menu/edit_skls', $data);
  } else {
     $judul = $this->input->post('judul', true);
     $bio = $this->input->post('bio', true);
     $text = $this->input->post('text', true);
     $next = $this->input->post('next', true);
     $nama = $this->input->post('nama', true);
     $jbt = $this->input->post('jbt', true);

     // cek gambar yg di ganti
     $upload = $_FILES['image']['name'];

     if($upload) {
        $config['upload_path'] = './front-end/assets/img/Header_Beranda';
        $config['allowed_types'] = 'png|jpg|jpeg|gif';
        $config['max_size'] = 2048; 

        $this->load->library('upload', $config);

        if($this->upload->do_upload('image')) {
            $gambar_lama = $data['krywn_tkmr'] ['gambar'];
            unlink(FCPATH . '/front-end/assets/img/Header_Beranda' . $gambar_lama );
        }

        //upload gambar baru
        $gambar_baru = $this->upload->data('file_name');
        $this->db->set('gambar', $gambar_baru);
     } else{
    
     }

        //SET DATA YANG MAU DI UPDATE
        $this->db->set('judul', $judul);
        $this->db->set('bio', $bio);
        $this->db->set('text', $text);
        $this->db->set('next', $next);
        $this->db->set('nama', $nama);
        $this->db->set('jbt', $jbt);
        $this->db->where('id', $this->input->post('id'));

        // UPDATE KE TABEL ADMIN MENU
        $this->db->update('skls_tkmr');
        $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">
        Selamat, Data anda sudah di update! </div>');
        redirect('admin_menu/skls_tkmr');

   }

}












    public function pstr_tkmr()
    {
        $data['judul'] = 'pstr_tkmr';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')]) 
        ->row_array();

         //QUERY AMBIL TABLE DATABASE
         $data['pstr_tkmr'] = $this->db->get_where('pstr_tkmr')->result_array();
         $data['phrg_tkmr'] = $this->db->get_where('phrg_tkmr')->result_array();
         $data['skls_tkmr'] = $this->db->get_where('skls_tkmr')->result_array();
         $data['banner_image'] = $this->db->get_where('banner_image')->result_array();
         $data['admin_berita'] = $this->db->get_where('admin_berita')->result_array();
         $data['admin_manrisk'] = $this->db->get_where('admin_manrisk')->result_array();
         $data['admin_about'] = $this->db->get_where('admin_about')->result_array();
         $data['admin_menu'] = $this->db->get_where('admin_menu')->result_array();

         $this->form_validation->set_rules('text', 'text', 'required|trim');
        
        
         if ($this->form_validation->run()== false) {
            
            $this->load->view('admin_menu/pstr_tkmr', $data);
    
           
    } else {


        $config['upload_path'] = './front-end/assets/img/poster';
        $config['allowed_types'] = 'png|jpg|jpeg|gif';
        $config['max_size'] = 2048;

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('image')) {
        
           } else {
               $image = $this->upload->data();
               $image = $image['file_name'];
               $text = $this->input->post('text', true);

           }


           $data = [
           'image' => $image ,
           'text' => $text
            
           
      
        ];
        // INSERT KE TABEL ADMIN MENU
        $this->db->insert('pstr_tkmr', $data);
        $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">
        Selamat, Data banner anda sudah ditambahkan! </div>');
        redirect('admin_menu/pstr_tkmr');

        }
    }



    public function krywn_tkmr()
    {
        $data['judul'] = 'krywn_tkmr';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')]) 
        ->row_array();

        //QUERY AMBIL TABLE DATABASE
        $data['krywn_tkmr'] = $this->db->get_where('krywn_tkmr')->result_array();
        $data['skls_tkmr'] = $this->db->get_where('phrg_tkmr')->result_array();
        $data['skls_tkmr'] = $this->db->get_where('skls_tkmr')->result_array();
        $data['banner_image'] = $this->db->get_where('banner_image')->result_array();
        $data['admin_berita'] = $this->db->get_where('admin_berita')->result_array();
        $data['admin_manrisk'] = $this->db->get_where('admin_manrisk')->result_array();
        $data['admin_about'] = $this->db->get_where('admin_about')->result_array();
        $data['admin_menu'] = $this->db->get_where('admin_menu')->result_array();

    
      //SET RULES
      $this->form_validation->set_rules('nama', 'nama', 'required|trim');
      $this->form_validation->set_rules('jabatan', 'jabatan', 'required|trim');
      if ($this->form_validation->run()== false) {
        
        

        $this->load->view('admin_menu/krywn_tkmr', $data);


    } else {


        $config['upload_path'] = './front-end/assets/img/karyawan';
        $config['allowed_types'] = 'png|jpg|jpeg|gif';
        $config['max_size'] = 2048;

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('image')) {
            $this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">
            Gagal Upload Banner ! </div>');
            redirect('admin_menu/krywn_tkmr');
           } else {
               $gambar = $this->upload->data();
               $gambar = $gambar['file_name'];
               $nama = $this->input->post('nama', true);
               $jabatan = $this->input->post('jabatan', true);   
           }

           $data = [
            'nama' => $nama,
            'jabatan' => $jabatan,

            'gambar' => $gambar
           
            
        ];
        // INSERT KE TABEL ADMIN MENU
        $this->db->insert('krywn_tkmr', $data);
        $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">
        Selamat, Data karyawan/karyawati anda sudah ditambahkan! </div>');
        redirect('admin_menu/krywn_tkmr');

        }
    }


    
   public function edit_krywn($id)
   {

    $data['judul'] = 'edit_krywn';
    $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')]) 
    ->row_array();

    //QUERY AMBIL TABLE DATABASE
    $data['krywn_tkmr'] = $this->db->get_where('krywn_tkmr', ['id' => $id])->row_array();
    $data['kbr_tkmr'] = $this->db->get_where('kbr_tkmr')->result_array();
    $data['prdk_tkmr'] = $this->db->get_where('prdk_tkmr')->result_array();
    $data['elrn_tkmr'] = $this->db->get_where('elrn_tkmr')->result_array();
    $data['pstr_tkmr'] = $this->db->get_where('pstr_tkmr')->result_array();
    $data['phrg_tkmr'] = $this->db->get_where('phrg_tkmr')->result_array();
    $data['skls_tkmr'] = $this->db->get_where('skls_tkmr')->result_array();
    $data['banner_image'] = $this->db->get_where('banner_image')->result_array();
    $data['admin_berita'] = $this->db->get_where('admin_berita')->result_array();
    $data['admin_manrisk'] = $this->db->get_where('admin_manrisk')->result_array();
    $data['admin_about'] = $this->db->get_where('admin_about')->result_array();
    $data['admin_menu'] = $this->db->get_where('admin_menu')->result_array();

  
  //SET RULES
  $this->form_validation->set_rules('nama', 'nama', 'required|trim');
  $this->form_validation->set_rules('jabatan', 'jabatan', 'required|trim');

  if ($this->form_validation->run() == false) {
    $this->load->view('admin_menu/edit_krywn', $data);
  } else {
     $nama = $this->input->post('nama', true);
     $jabatan = $this->input->post('jabatan', true);

     // cek gambar yg di ganti
     $upload = $_FILES['image']['name'];

     if($upload) {
        $config['upload_path'] = './front-end/assets/img/karyawan';
        $config['allowed_types'] = 'png|jpg|jpeg|gif';
        $config['max_size'] = 2048; 

        $this->load->library('upload', $config);

        if($this->upload->do_upload('image')) {
            $gambar_lama = $data['krywn_tkmr'] ['image'];
            unlink(FCPATH . '/front-end/assets/img/karyawan' . $gambar_lama );
        }

        //upload gambar baru
        $gambar_baru = $this->upload->data('file_name');
        $this->db->set('image', $gambar_baru);
     } else{
    
     }

        //SET DATA YANG MAU DI UPDATE
        $this->db->set('nama', $nama);
        $this->db->set('jabatan', $jabatan);
        $this->db->where('id', $this->input->post('id'));

        // UPDATE KE TABEL ADMIN MENU
        $this->db->update('krywn_tkmr');
        $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">
        Selamat, Data karyawan anda sudah di update! </div>');
        redirect('admin_menu/krywn_tkmr');

   }

}







    public function elrn_tkmr()
    {
        $data['judul'] = 'elrn_tkmr';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')]) 
        ->row_array();

        //QUERY AMBIL TABLE DATABASE
        $data['elrn_tkmr'] = $this->db->get_where('elrn_tkmr')->result_array();
        $data['krywn_tkmr'] = $this->db->get_where('krywn_tkmr')->result_array();
        $data['skls_tkmr'] = $this->db->get_where('phrg_tkmr')->result_array();
        $data['skls_tkmr'] = $this->db->get_where('skls_tkmr')->result_array();
        $data['banner_image'] = $this->db->get_where('banner_image')->result_array();
        $data['admin_berita'] = $this->db->get_where('admin_berita')->result_array();
        $data['admin_manrisk'] = $this->db->get_where('admin_manrisk')->result_array();
        $data['admin_about'] = $this->db->get_where('admin_about')->result_array();
        $data['admin_menu'] = $this->db->get_where('admin_menu')->result_array();

    
      //SET RULES
      $this->form_validation->set_rules('judul', 'judul', 'required|trim');
      $this->form_validation->set_rules('link', 'link', 'required|trim');
      if ($this->form_validation->run()== false) {
        
        

        $this->load->view('admin_menu/elrn_tkmr', $data);


    } else {


        $config['upload_path'] = './front-end/assets/img/elearning';
        $config['allowed_types'] = 'png|jpg|jpeg|gif';
        $config['max_size'] = 2048;

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('image')) {
            $this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">
            Gagal Upload Materi E-Learning ! </div>');
            redirect('admin_menu/elrn_tkmr');
           } else {
               $gambar = $this->upload->data();
               $gambar = $gambar['file_name'];
               $judul = $this->input->post('judul', true);
               $link = $this->input->post('link', true);   
           }

           $data = [
            'judul' => $judul,
            'link' => $link,

            'image' => $gambar
           
            
        ];
        // INSERT KE TABEL ADMIN MENU
        $this->db->insert('elrn_tkmr', $data);
        $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">
        Selamat, Poster Materi E-Learning anda sudah ditambahkan! </div>');
        redirect('admin_menu/elrn_tkmr');

        }
    }


    
public function edit_elrn($id)
{

 $data['judul'] = 'edit_elrn';
 $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')]) 
 ->row_array();

 //QUERY AMBIL TABLE DATABASE
 $data['elrn_tkmr'] = $this->db->get_where('elrn_tkmr', ['id' => $id])->row_array();
 $data['kbr_tkmr'] = $this->db->get_where('kbr_tkmr')->result_array();
 $data['prdk_tkmr'] = $this->db->get_where('prdk_tkmr')->result_array();
 $data['krywn_tkmr'] = $this->db->get_where('krywn_tkmr')->result_array();
 $data['pstr_tkmr'] = $this->db->get_where('pstr_tkmr')->result_array();
 $data['phrg_tkmr'] = $this->db->get_where('phrg_tkmr')->result_array();
 $data['skls_tkmr'] = $this->db->get_where('skls_tkmr')->result_array();
 $data['banner_image'] = $this->db->get_where('banner_image')->result_array();
 $data['admin_berita'] = $this->db->get_where('admin_berita')->result_array();
 $data['admin_manrisk'] = $this->db->get_where('admin_manrisk')->result_array();
 $data['admin_about'] = $this->db->get_where('admin_about')->result_array();
 $data['admin_menu'] = $this->db->get_where('admin_menu')->result_array();

//SET RULES
$this->form_validation->set_rules('judul', 'judul', 'required|trim');
$this->form_validation->set_rules('link', 'link', 'required|trim');

if ($this->form_validation->run() == false) {
 $this->load->view('admin_menu/edit_elrn', $data);
} else {
  $judul = $this->input->post('judul', true);
  $link = $this->input->post('link', true);

  // cek gambar yg di ganti
  $upload = $_FILES['image']['name'];

  if($upload) {
     $config['upload_path'] = './front-end/assets/img/elearning';
     $config['allowed_types'] = 'png|jpg|jpeg|gif';
     $config['max_size'] = 2048; 

     $this->load->library('upload', $config);

     if($this->upload->do_upload('image')) {
         $gambar_lama = $data['elrn_tkmr'] ['image'];
         unlink(FCPATH . '/front-end/assets/img/elearning' . $gambar_lama );
     }

     //upload gambar baru
     $gambar_baru = $this->upload->data('file_name');
     $this->db->set('image', $gambar_baru);
  } else{
 
  }

     //SET DATA YANG MAU DI UPDATE
     $this->db->set('judul', $judul);
     $this->db->set('link', $link);
     $this->db->where('id', $this->input->post('id'));

     // UPDATE KE TABEL ADMIN MENU
     $this->db->update('elrn_tkmr');
     $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">
     Selamat, Data E-Learning anda sudah di update! </div>');
     redirect('admin_menu/elrn_tkmr');
   }  

  }  



  
    public function prdk_tkmr()
    {
        $data['judul'] = 'prdk_tkmr';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')]) 
        ->row_array();

        //QUERY AMBIL TABLE DATABASE
        $data['prdk_tkmr'] = $this->db->get_where('prdk_tkmr')->result_array();
        $data['elrn_tkmr'] = $this->db->get_where('elrn_tkmr')->result_array();
        $data['krywn_tkmr'] = $this->db->get_where('krywn_tkmr')->result_array();
        $data['skls_tkmr'] = $this->db->get_where('phrg_tkmr')->result_array();
        $data['skls_tkmr'] = $this->db->get_where('skls_tkmr')->result_array();
        $data['banner_image'] = $this->db->get_where('banner_image')->result_array();
        $data['admin_berita'] = $this->db->get_where('admin_berita')->result_array();
        $data['admin_manrisk'] = $this->db->get_where('admin_manrisk')->result_array();
        $data['admin_about'] = $this->db->get_where('admin_about')->result_array();
        $data['admin_menu'] = $this->db->get_where('admin_menu')->result_array();

    
      //SET RULES
      $this->form_validation->set_rules('judul', 'judul', 'required|trim');
      if ($this->form_validation->run()== false) {
        
        

        $this->load->view('admin_menu/prdk_tkmr', $data);


    } else {


        $config['upload_path'] = './front-end/assets/img/produk';
        $config['allowed_types'] = 'png|jpg|jpeg|gif';
        $config['max_size'] = 2048;

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('image')) {
            $this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">
            Gagal Upload Produk.! </div>');
            redirect('admin_menu/prdk_tkmr');
           } else {
               $gambar = $this->upload->data();
               $gambar = $gambar['file_name'];
               $judul = $this->input->post('judul', true);
           }

           $data = [
            'judul' => $judul,

            'image' => $gambar
           
            
        ];
        // INSERT KE TABEL ADMIN MENU
        $this->db->insert('prdk_tkmr', $data);
        $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">
        Selamat, Produk PUSRI sudah ditambahkan! </div>');
        redirect('admin_menu/prdk_tkmr');

        }
    }


    



    public function edit_prdk($id)
    {
    
     $data['judul'] = 'edit_prdk';
     $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')]) 
     ->row_array();
    
     //QUERY AMBIL TABLE DATABASE
     $data['prdk_tkmr'] = $this->db->get_where('prdk_tkmr', ['id' => $id])->row_array();
     $data['kbr_tkmr'] = $this->db->get_where('kbr_tkmr')->result_array();
     $data['elrn_tkmr'] = $this->db->get_where('elrn_tkmr')->result_array();
     $data['krywn_tkmr'] = $this->db->get_where('krywn_tkmr')->result_array();
     $data['pstr_tkmr'] = $this->db->get_where('pstr_tkmr')->result_array();
     $data['phrg_tkmr'] = $this->db->get_where('phrg_tkmr')->result_array();
     $data['skls_tkmr'] = $this->db->get_where('skls_tkmr')->result_array();
     $data['banner_image'] = $this->db->get_where('banner_image')->result_array();
     $data['admin_berita'] = $this->db->get_where('admin_berita')->result_array();
     $data['admin_manrisk'] = $this->db->get_where('admin_manrisk')->result_array();
     $data['admin_about'] = $this->db->get_where('admin_about')->result_array();
     $data['admin_menu'] = $this->db->get_where('admin_menu')->result_array();
    
    //SET RULES
    $this->form_validation->set_rules('judul', 'judul', 'required|trim');

    
    if ($this->form_validation->run() == false) {
     $this->load->view('admin_menu/edit_prdk', $data);
    } else {
      $judul = $this->input->post('judul', true);
  
    
      // cek gambar yg di ganti
      $upload = $_FILES['image']['name'];
    
      if($upload) {
         $config['upload_path'] = './front-end/assets/img/produk';
         $config['allowed_types'] = 'png|jpg|jpeg|gif';
         $config['max_size'] = 2048; 
    
         $this->load->library('upload', $config);
    
         if($this->upload->do_upload('image')) {
             $gambar_lama = $data['elrn_tkmr'] ['image'];
             unlink(FCPATH . '/front-end/assets/img/produk' . $gambar_lama );
         }
    
         //upload gambar baru
         $gambar_baru = $this->upload->data('file_name');
         $this->db->set('image', $gambar_baru);
      } else{
     
      }
    
         //SET DATA YANG MAU DI UPDATE
         $this->db->set('judul', $judul);
         $this->db->where('id', $this->input->post('id'));
    
         // UPDATE KE TABEL ADMIN MENU
         $this->db->update('prdk_tkmr');
         $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">
         Selamat, Data E-Learning anda sudah di update! </div>');
         redirect('admin_menu/prdk_tkmr');
       }  
    
      }  
    
    
  
  













    public function kbr_tkmr()
    {
        $data['judul'] = 'kbr_tkmr';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')]) 
        ->row_array();

        //QUERY AMBIL TABLE DATABASE
        $data['kbr_tkmr'] = $this->db->get_where('kbr_tkmr')->result_array();
        $data['krywn_tkmr'] = $this->db->get_where('krywn_tkmr')->result_array();
        $data['skls_tkmr'] = $this->db->get_where('phrg_tkmr')->result_array();
        $data['skls_tkmr'] = $this->db->get_where('skls_tkmr')->result_array();
        $data['banner_image'] = $this->db->get_where('banner_image')->result_array();
        $data['admin_berita'] = $this->db->get_where('admin_berita')->result_array();
        $data['admin_manrisk'] = $this->db->get_where('admin_manrisk')->result_array();
        $data['admin_about'] = $this->db->get_where('admin_about')->result_array();
        $data['admin_menu'] = $this->db->get_where('admin_menu')->result_array();

    
      //SET RULES
      $this->form_validation->set_rules('judul', 'judul', 'required|trim');
      $this->form_validation->set_rules('slug', 'slug', 'required|trim');
      $this->form_validation->set_rules('isi', 'isi', 'required|trim');
      $this->form_validation->set_rules('pembuat', 'pembuat', 'required|trim');
      if ($this->form_validation->run()== false) {
        
        

        $this->load->view('admin_menu/kbr_tkmr', $data);


    } else {


        $config['upload_path'] = './front-end/assets/img/berita';
        $config['allowed_types'] = 'png|jpg|jpeg|gif';
        $config['max_size'] = 2048;

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('image')) {
            $this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">
            Gagal Upload Foto Berita ! </div>');
            redirect('admin_menu/kbr_tkmr');
           } else {
               $gambar = $this->upload->data();
               $gambar = $gambar['file_name'];
               $judul = $this->input->post('judul', true);
               $slug = $this->input->post('slug', true);   
               $isi = $this->input->post('isi', true);   
               $pembuat = $this->input->post('pembuat', true);   
           }

           $data = [
            'judul' => $judul,
            'slug' => $slug,
            'isi' => $isi,
            'pembuat' => $pembuat,
            'waktu' => time(),
           
            'gambar' => $gambar
        ];
        // INSERT KE TABEL ADMIN MENU
        $this->db->insert('kbr_tkmr', $data);
        $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">
        Selamat, Data menu anda sudah di Tambahkan.! </div>');
        redirect('admin_menu/kbr_tkmr');

        }
    }


   public function edit_kbr($id)
   {

    $data['judul'] = 'edit_kbr';
    $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')]) 
    ->row_array();

    //QUERY AMBIL TABLE DATABASE
     $data['kbr_tkmr'] = $this->db->get_where('kbr_tkmr', ['id' => $id])->row_array();
        $data['prdk_tkmr'] = $this->db->get_where('prdk_tkmr')->result_array();
        $data['elrn_tkmr'] = $this->db->get_where('elrn_tkmr')->result_array();
        $data['krywn_tkmr'] = $this->db->get_where('krywn_tkmr')->result_array();
        $data['pstr_tkmr'] = $this->db->get_where('pstr_tkmr')->result_array();
        $data['phrg_tkmr'] = $this->db->get_where('phrg_tkmr')->result_array();
        $data['skls_tkmr'] = $this->db->get_where('skls_tkmr')->result_array();
        $data['banner_image'] = $this->db->get_where('banner_image')->result_array();
        $data['admin_berita'] = $this->db->get_where('admin_berita')->result_array();
        $data['admin_manrisk'] = $this->db->get_where('admin_manrisk')->result_array();
        $data['admin_about'] = $this->db->get_where('admin_about')->result_array();
        $data['admin_menu'] = $this->db->get_where('admin_menu')->result_array();


  //SET RULES
  $this->form_validation->set_rules('judul', 'judul', 'required|trim');
  $this->form_validation->set_rules('slug', 'slug', 'required|trim');
  $this->form_validation->set_rules('isi', 'isi', 'required|trim');
  $this->form_validation->set_rules('pembuat', 'pembuat', 'required|trim');

  if ($this->form_validation->run() == false) {
    $this->load->view('admin_menu/edit_kbr', $data);
  } else {
     $judul = $this->input->post('judul', true);
     $slug = $this->input->post('slug', true);
     $isi = $this->input->post('isi', true);
     $pembuat = $this->input->post('pembuat', true);

     // cek gambar yg di ganti
     $upload = $_FILES['image']['name'];

     if($upload) {
        $config['upload_path'] = './front-end/assets/img/berita';
        $config['allowed_types'] = 'png|jpg|jpeg|gif';
        $config['max_size'] = 2048; 

        $this->load->library('upload', $config);

        if($this->upload->do_upload('image')) {
            $gambar_lama = $data['kbr_tkmr'] ['gambar'];
            unlink(FCPATH . '/front-end/assets/img/berita' . $gambar_lama );
        }

        //upload gambar baru
        $gambar_baru = $this->upload->data('file_name');
        $this->db->set('gambar', $gambar_baru);
     } else{
    
     }

        //SET DATA YANG MAU DI UPDATE
        $this->db->set('judul', $judul);
        $this->db->set('slug', $slug);
        $this->db->set('isi', $isi);
        $this->db->set('pembuat', $pembuat);
        $this->db->where('id', $this->input->post('id'));

        // UPDATE KE TABEL ADMIN MENU
        $this->db->update('kbr_tkmr');
        $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">
        Selamat, Data Berita anda sudah di update.! </div>');
        redirect('admin_menu/kbr_tkmr');

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
            redirect('admin_menu');
            
   
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
               $this->db->update('admin_menu', $data);
               $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">
               Selamat, Data menu anda sudah di update! </div>');
               redirect('admin_menu');
           
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
                $this->db->delete('admin_menu');
                $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">
                Selamat, Data menu anda sudah di hapus! </div>');
                redirect('admin_menu');
     
            }
          }

     


       