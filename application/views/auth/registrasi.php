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


  <title>Forum Registrasi User</title>

  <!-- Custom fonts for this template-->
  <link href="<?= base_url('back-end/'); ?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="<?= base_url('back-end/'); ?>https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="<?= base_url('back-end/'); ?>css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

  <div class="container">

    <div class="card o-hidden border-0 shadow-lg my-5">
      <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row">
          <div class="col-lg-5 d-none d-lg-block my-auto">
          <img src="<?= base_url('back-end/img/01.jpg'); ?>" width="500px">
          </div>
          <div class="col-lg-7">
            <div class="p-5">
              <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">Buat Akun!</h1>
              </div>
              <form class="user" method="POST" action="<?= base_url('Auth/registrasi'); ?>">
                <div class="form-group row">
                  <input type="text" class="form-control form-control-user" id="nama" name="nama" placeholder="Nama Lengkap">
                  <?= form_error('nama', '<span class="text-danger ml-3">', '</span>'); ?>
                </div>
                <div class="form-group">
                  <input type="text" class="form-control form-control-user" id="email" name="email" placeholder="Email Address">
                  <?= form_error('email', '<span class="text-danger ml-3">', '</span>'); ?>
                </div>
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="password" class="form-control form-control-user" id="password1" name="password1" placeholder="Password">
                    <?= form_error('password1', '<span class="text-danger ml-0">', '</span>'); ?>
                  </div>
                  <div class="col-sm-6">
                    <input type="password" class="form-control form-control-user" id="password2" name="password2" placeholder="Ulangi Password">
                    <?= form_error('password2', '<span class="text-danger ml-0">', '</span>'); ?>
                  </div>
                </div>
                <button type="submit" class="btn btn-primary btn-user btn-block">
                 Daftar Akun!
                 </button>
              </form>
              <hr>
              <div class="text-center">
                <a class="small" href="<?= base_url('auth'); ?>">Sudah Punya Akun? Silahkan Login!</a>
              </div>
              </div>
            </div>
          </div>
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
  <script src="j<?= base_url('back-end/'); ?>s/sb-admin-2.min.js"></script>

</body>

</html>
