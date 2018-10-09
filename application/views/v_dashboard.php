<!DOCTYPE html>
<html>
  <head>
    <title>Aplikasi Satu Data</title>
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <meta name="description" content="Aplikasi Satu Data">
        <meta name="author" content="Muhamad Rifki">

          <!-- favicon -->
          <link rel="shortcut icon" href="<?php echo base_url() ?>assets/css/favicon.png" />
    
          <!-- Bootstrap -->
          <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
          <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

          <link href="<?php echo base_url().'assets/css/bootstrap.css'?>" rel="stylesheet">

  </head>
  <body>
    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Aplikasi Satu Data</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <div class="navbar-form navbar-right">
                <a href="<?php echo base_url() ?>login/logout" type="submit" class="btn btn-primary" onclick="return confirm('Anda yakin akan keluar dari halaman ini ?');"><i class="fa fa-sign-out"></i> Logout</a>
            </div>
      </div>
    </nav>

    <div class="container" style="margin-top: 80px">
    <div class="row">
       <div class="col-md-12">
            <div class="panel panel-default">
              <div class="panel-heading">
                <h3 class="panel-title"><i class="fa fa-dashboard"></i> Dashboard</h3>
              </div>
              <div class="panel-body">
                Selamat Datang <b><?php echo $this->session->userdata('ses_nama');?></b> di Aplikasi Satu Data Versi 1.0
              </div>
            </div>
        </div>

        <div class="col-md-12">

  <!--Akses Menu Untuk Admin-->
  <?php if($this->session->userdata('akses')=='1'):?>
      <a href="<?php echo base_url() ?>sk/index" class="list-group-item"><i class="fa fa-book"></i> Data Surat Keputusan</a>
      <a href="<?php echo base_url() ?>notel/index" class="list-group-item"><i class="fa fa-book"></i> Data Nomor Telepon & Handphone</a>
    
  <!--Akses Menu Untuk Petugas-->
  <?php elseif($this->session->userdata('akses')=='2'):?>
     <a href="<?php echo base_url() ?>sk/index_petugas" class="list-group-item"><i class="fa fa-book"></i> Data Surat Keputusan</a>
     <a href="<?php echo base_url() ?>notel/index_petugas" class="list-group-item"><i class="fa fa-book"></i> Data Nomor Telepon & Handphone</a>

  <!--Akses Menu Untuk Pengguna-->
  <?php else:?>
      <a href="<?php echo base_url() ?>sk/index_pengguna" class="list-group-item"><i class="fa fa-book"></i> Data Surat Keputusan</a>
      <a href="<?php echo base_url() ?>notel/index_pengguna" class="list-group-item"><i class="fa fa-book"></i> Data Nomor Telepon & Handphone</a>

  <?php endif;?>
           
        </div>


  


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="<?php echo base_url().'assets/js/jquery.js'?>"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo base_url().'assets/js/bootstrap.min.js'?>"></script>

  </body>
</html>
