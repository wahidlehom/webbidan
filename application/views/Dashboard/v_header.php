<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Web Bidan</title>
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/bower_components/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/bower_components/Ionicons/css/ionicons.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/dist/css/AdminLTE.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/dist/css/skins/_all-skins.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/bower_components/morris.js/morris.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/bower_components/jvectormap/jquery-jvectormap.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/bower_components/bootstrap-daterangepicker/daterangepicker.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
  <!-- DataTables CSS -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.5/css/jquery.dataTables.min.css" />
    <!-- Optional: DataTables Responsive CSS -->
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.5.0/css/responsive.dataTables.min.css" />
</head>

<body class="hold-transition skin-blue sidebar-mini">

  <div class="wrapper">

    <header class="main-header">
      <a href="<?php echo base_url(); ?>" class="logo">
        <span class="logo-mini"><b>PMB</b></span>
        <span class="logo-lg"><b>PMB</b> Hj. Siti Saidah, S.Keb</span>
      </a>

      <nav class="navbar navbar-static-top">

        <a href="#" class="sidebar-toggle" data-toggle="push-menu"
          role="button">
          <span class="sr-only">Toggle navigation</span>
        </a>
        <div class="navbar-custom-menu">

          <ul class="nav navbar-nav">
            <li class="dropdown user user-menu">
              <a href="#" class="dropdown-toggle" data-
                toggle="dropdown">
                <img src="<?php echo base_url(); ?>assets/dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
                <span class="hidden-xs">HAK AKSES :
                  <b><?php echo $this->session->userdata('level') 
                      ?></b></span>

              </a>
              <ul class="dropdown-menu">
                <li class="user-header">
                  <img src="<?php echo base_url(); ?>assets/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">

                  <p>
                    <?php echo $this->session->userdata('username') 
                    ?>
                    <small>Hak akses : ****
                      <?php echo $this->session->userdata('level') 
                      ?></small>
                  </p>
                </li>

                <li class="user-footer">
                  <div class="pull-left">
                    <a href="<?php echo base_url() . 'dashboard/profil' ?>" class="btn btn-default btn-flat">Profil</a>
                  </div>
                  <div class="pull-right">
                    <a href="<?php echo base_url() . 'dashboard/keluar' ?>" class="btn btn-default btn-flat">Keluar</a>
                  </div>
                </li>
              </ul>
            </li>
          </ul>

        </div>
      </nav>
    </header>
    <aside class="main-sidebar">
      <section class="sidebar">
        <div class="user-panel">
          <div class="pull-left image">
            <img src="<?php echo base_url(); ?>assets/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">

          </div>
          <div class="pull-left info">

            <?php
            $id_user = $this->session->userdata('id'); 
            $user = $this->db->query("select * from pengguna where pengguna_id='$id_user'")->row(); 
            ?>
            <p><?php echo $user->pengguna_nama; 
                ?> cek</p>
            <a href="#"><i class="fa fa-circle text-success"></i>
              Online</a>
          </div>
        </div>

        <ul class="sidebar-menu" data-widget="tree">
          <li class="header">MAIN NAVIGATION</li>
          <li>
            <a href="<?php echo base_url().'dashboard' ?>">
              <i class="fa fa-dashboard"></i>
              <span>DASHBOARD</span>
            </a>
          </li>
          <li>
            <a href="<?php echo base_url() . 'dashboard/obat'?>">
              <i class="fa fa-th"></i>
              <span>OBAT</span>
            </a>
          </li>
          <li>
            <a href="<?php echo base_url() . 'dashboard/pasien' ?>">
              <i class="fa fa-users"></i>
              <span>PASIEN</span>
            </a>
          </li>
          <li>
            <a href="<?php echo base_url() . 'dashboard/catatanKb' ?>">
              <i class="fa fa-address-book"></i>
              <span>CATATAN KB</span>
            </a>
          </li>
          <li>
            <a href="<?php echo base_url() . 'dashboard/petugas' ?>">

              <i class="fa fa-stethoscope"></i>
              <span>PETUGAS</span>
            </a>
          </li>
          <li>
            <a href="<?php echo base_url() . 'dashboard/pages' ?>">

              <i class="fa fa-stethoscope"></i>
              <span>PAGES</span>
            </a>
          </li>
          
          <li>
            <a href="<?php echo base_url() . 'dashboard/pengaturan'
                      ?>">
              <i class="fa fa-edit"></i>
              <span>PENGATURAN WEBSITE</span>
            </a>
          </li>
          <li>
            <a href="<?php echo base_url() . 'dashboard/profil' ?>">

              <i class="fa fa-user"></i>
              <span>PROFIL</span>
            </a>
          </li>
          <li>
            <a href="<?php echo base_url() . 'dashboard/ganti_password' ?>">
              <i class="fa fa-lock"></i>
              <span>GANTI PASSWORD</span>
            </a>
          </li>
          <li>
            <a href="<?php echo base_url() . 'dashboard/keluar' ?>">
             <i class="fa fa-share"></i>
              <span>KELUAR</span>
            </a>
          </li>
        </ul>
      </section>
    </aside>