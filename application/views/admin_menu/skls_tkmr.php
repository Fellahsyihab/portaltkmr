<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

   <!-- Favicons -->
   <link href="<?= base_url('front-end/'); ?>assets/img/clients/darisk.png" rel="icon">
  <link href="<?= base_url('front-end/'); ?>assets/img/clients/darisk.png" rel="apple-touch-icon">


  <title>Menu Managememnt Beranda</title>

  <!-- Custom fonts for this template-->
  <link href="<?= base_url('back-end/'); ?>vendor/icon/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="<?= base_url('back-end/'); ?>https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
  

  <!-- Custom styles for this template-->
  <link href="<?= base_url('back-end/'); ?>css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon rotate-n-0">
        <img src="<?= base_url('back-end/img/whitee.png'); ?>" width="38px">
        </div>
        <div class="sidebar-brand-text mx-3"> <sup></sup></div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Administrator
      </div>

      <!-- Nav Item - Dashboard -->
      
      <li class="nav-item">
        <a class="nav-link" href="<?= base_url('admin'); ?>">
        <i class="fas fa-envelopes-bulk"></i>
          <span>Dashboard</span></a>
          
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?= base_url('admin_menu/index'); ?>">
        <i class="fas fa-envelopes-bulk"></i>
          <span>Menu Beranda</span></a>
          
      </li>
       

      <li class="nav-item">
        <a class="nav-link" href="<?= base_url('admin_about/index'); ?>">
        <i class="fas fa-envelopes-bulk"></i>
          <span>Menu About GCG</span></a>
          
      </li>

      <li class="nav-item">
        <a class="nav-link" href="<?= base_url('admin_manrisk/index'); ?>">
        <i class="fas fa-envelopes-bulk"></i>
          <span>Menu About Manrisk</span></a>
          
      </li>

      <li class="nav-item">
        <a class="nav-link" href="<?= base_url('admin_berita/index'); ?>">
        <i class="fas fa-envelopes-bulk"></i>
          <span>Menu About Berita</span></a>
          
      </li>
       
      

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Menu Management
      </div>

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
          <i class="fas fa-fw fa-cog"></i>
          <span>Beranda</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-secondary py-2 collapse-inner rounded">
            <h6 class="collapse-header">MENU BERANDA</h6>
            <?php foreach ($admin_menu as $am) : ?>
            <a class="collapse-item" href="<?= $am['url']; ?>">
              <i class="<?= $am['icon']; ?>"></i>
              <span><?= $am['nama']; ?></span></a>
              <?php endforeach; ?>
          </div>
        </div>
      </li>

      <hr class="sidebar-divider">
      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseGCG" aria-expanded="true" aria-controls="#collapseGCG">
          <i class="fas fa-fw fa-cog"></i>
          <span>Tata Kelola (GCG)</span>
        </a>
        <div id="collapseGCG" class="collapse" aria-labelledby="headingGCG" data-parent="#accordionSidebar">
          <div class="bg-secondary py-2 collapse-inner rounded">
            <h6 class="collapse-header">MENU BERANDA</h6>
            <?php foreach ($admin_about as $am) : ?>
            <a class="collapse-item" href="<?= $am['url']; ?>">
              <i class="<?= $am['icon']; ?>"></i>
              <span><?= $am['nama']; ?></span></a>
              <?php endforeach; ?>
          </div>
        </div>
      </li>

      <hr class="sidebar-divider">
    
      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseMANRISK" aria-expanded="true" aria-controls="#collapseMANRISK">
          <i class="fas fa-fw fa-cog"></i>
          <span>Manajemen Risiko</span>
        </a>
        <div id="collapseMANRISK" class="collapse" aria-labelledby="headingMANRISK" data-parent="#accordionSidebar">
          <div class="bg-secondary py-2 collapse-inner rounded">
            <h6 class="collapse-header">MENU BERANDA</h6>
            <?php foreach ($admin_manrisk as $am) : ?>
            <a class="collapse-item" href="<?= $am['url']; ?>">
              <i class="<?= $am['icon']; ?>"></i>
              <span><?= $am['nama']; ?></span></a>
              <?php endforeach; ?>
          </div>
        </div>
      </li>
      
      <hr class="sidebar-divider">

      
      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseBERITA" aria-expanded="true" aria-controls="#collapseBERITA">
          <i class="fas fa-fw fa-cog"></i>
          <span>Berita</span>
        </a>
        <div id="collapseBERITA" class="collapse" aria-labelledby="headingBERITA" data-parent="#accordionSidebar">
          <div class="bg-secondary py-2 collapse-inner rounded">
            <h6 class="collapse-header">MENU BERANDA</h6>
            <?php foreach ($admin_berita as $am) : ?>
            <a class="collapse-item" href="<?= $am['url']; ?>">
              <i class="<?= $am['icon']; ?>"></i>
              <span><?= $am['nama']; ?></span></a>
              <?php endforeach; ?>
          </div>
        </div>
      </li>
    
      <hr class="sidebar-divider">

    
      </li>

      <!-- Nav Item - Tables -->
      <li class="nav-item">
        <a class="nav-link" href="<?=base_url('auth/keluar'); ?>">
        <i class="fas fa-arrow-right-from-bracket fa-rotate-180"></i>
          <span>Keluar</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Kunjungi Portal -->
      <div class="sidebar-heading">
        Website
      </div>

       <!-- Kunjungi Portal -->
      <li class="nav-item">
        <a class="nav-link" href="<?=base_url('home/index'); ?>">
        <i class="fas fa-door-open"></i>
          <span>Kunjungi Portal</span></a>
      </li>

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

          <img class="center" src="<?= base_url('front-end/'); ?>assets/img/Picture4.png"  width="330px" />

          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">

            <!-- Nav Item - Search Dropdown (Visible Only XS) -->
            <li class="nav-item dropdown no-arrow d-sm-none">
              <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-search fa-fw"></i>
              </a>
              <!-- Dropdown - Messages -->
              <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                <form class="form-inline mr-auto w-100 navbar-search">
                  <div class="input-group">
                    <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                      <button class="btn btn-primary" type="button">
                        <i class="fas fa-search fa-sm"></i>
                      </button>
                    </div>
                  </div>
                </form>
              </div>
            </li>

          </li>

            <div class="topbar-divider d-none d-sm-block"></div>

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?=$user ['nama']; ?> </span>
                <img class="img-profile rounded-circle" src="<?= base_url('back-end/img/') . $user['gambar'] ?>">
              </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Logout
                </a>
              </div>
            </li>

          </ul>

        </nav>
        <!-- End of Topbar -->
  <?php foreach ($skls_tkmr as $skmr) : ?>
        <!-- Begin Page Content -->
        <div class="container-fluid">
          <?= $this->session->flashdata('pesan'); ?>     
 <a href="" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#tambahsklstkmrModal">Tambah Menu</a>  <a href="<?= base_url('admin_menu/edit_skls/') . $skmr['id'];?>" class="btn btn-sm btn-warning">Edit Menu</a>
      
 <!-- Page Heading -->
          <h1 class="h3 mb-4 text-gray-800"></h1>
         
         
          
        
          <div>
            
           <!-- Basic Card Example -->
         
    <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary"><?=$skmr['judul']?></h6>
                </div>
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary"><?=$skmr['bio']?></h6>
                </div>
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary"><?=$skmr['nama']?></h6>
                </div>
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary"><?=$skmr['jbt']?></h6>
                </div>
                <div class="card-body">
                  <?=$skmr['text']?>
                  </div>
                <div class="card-body">
                  <?=$skmr['next']?>
                </div>
                <div class="row">
                  <div class="col-5">
                <div class="card-body">
                <img src="<?= base_url('front-end/assets/img/Header_Beranda/'). $skmr['gambar']?>" class="img-thumbnail" alt="">
              </div>
              </div>
           </div>
           <?php endforeach; ?>
          
   
    <!-- Tambah Menu -->
    <div class="modal fade" id="tambahsklstkmrModal" tabindex="-1" role="dialog" aria-labelledby="tambahsklstkmrModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="tambahsklstkmrModalLabel">Tambah Menu</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <form action="<?= base_url('admin_menu/skls_tkmr'); ?>" method="POST"   enctype="multipart/form-data"     >
        <div class="modal-body">
        <div class="form-group mb-3">
        <input type="text" class="form-control" id="judul" name="judul" placeholder="Judul">
        </div>
        <div class="form-group mb-3">
        <input type="text" class="form-control" id="bio" name="bio" placeholder="BIO">
        </div>
        <div class="form-group mb-3">
        <textarea class="form-control" name="text" id="text" placeholder="Detail Bio" cols="30" rows="10"></textarea>
        </div>
        <div class="form-group mb-3">
        <textarea class="form-control" name="next" id="next" placeholder="Detail Bio" cols="30" rows="10"></textarea>
        </div>
        <div class="form-group mb-3">
        <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama">
        </div>
        <div class="form-group mb-3">
        <input type="text" class="form-control" id="jbt" name="jbt" placeholder="Jabatan">
        </div>
        <div class="custom-file">
        <input type="file" class="custom-file" id="image" name="image" placeholder="gambar">
        <label for="image" class="custom-file-label"></label>
        </div>
        </div>
        
        
        

        <div class="modal-footer">
          <button class="btn btn-secondary btn-sm" type="button" data-dismiss="modal">Cancel</button>
          <button type="submit" class="btn btn-primary btn-sm">Tambah</Tambah> 
          </form>
        </div>
      </div>
    </div>
  </div>
  
<!-- Tambah Menu -->



      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span> Dashboard Portal TKMR <?=date('Y');?></span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Apakah anda ingin meninggalkan halaman dashboard?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Klik "Logout" untuk keluar dari halaman ini.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="<?=base_url('auth/keluar'); ?>">Logout</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="<?= base_url('back-end/'); ?>vendor/jquery/jquery.min.js"></script>
  <script src="<?= base_url('back-end/'); ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="<?= base_url('back-end/'); ?>vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="<?= base_url('back-end/'); ?>js/sb-admin-2.min.js"></script>

</body>

</html>
