<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Admin | Resepsionis</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="<?php echo base_url()?>admin/bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="<?php echo base_url()?>admin/plugins/datatables/dataTables.bootstrap.css">
  <!-- daterange picker -->
  <link rel="stylesheet" href="<?php echo base_url()?>admin/plugins/daterangepicker/daterangepicker.css">
  <!-- bootstrap datepicker -->
  <link rel="stylesheet" href="<?php echo base_url()?>admin/plugins/datepicker/datepicker3.css">
  <!-- iCheck for checkboxes and radio inputs -->
  <link rel="stylesheet" href="<?php echo base_url()?>admin/plugins/iCheck/all.css">
  <!-- Bootstrap Color Picker -->
  <link rel="stylesheet" href="<?php echo base_url()?>admin/plugins/colorpicker/bootstrap-colorpicker.min.css">
  <!-- Bootstrap time Picker -->
  <link rel="stylesheet" href="<?php echo base_url()?>admin/plugins/timepicker/bootstrap-timepicker.min.css">
  <!-- Select2 -->
  <link rel="stylesheet" href="<?php echo base_url()?>admin/plugins/select2/select2.min.css">
  <!-- Theme style -->
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url()?>admin/dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?php echo base_url()?>admin/dist/css/skins/_all-skins.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="<?php echo base_url()?>admin/index2.html" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>A</b>LT</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Cihampelas</b>Hotel</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Notifications: style can be found in dropdown.less -->
          <li class="dropdown notifications-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-bell-o"></i>
              <span class="label label-warning"><?php
                                        $this->db->select('id');
                                        $this->db->from('notifikasi');
                                        $this->db->where('untuk','Resepsionis');
                                        echo $this->db->count_all_results();
                                      ?></span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">You have <?php
                                        $this->db->select('id');
                                        $this->db->from('notifikasi');
                                        $this->db->where('untuk','Resepsionis');
                                        echo $this->db->count_all_results();
                                      ?> notifications</li>
              <li>
                <!-- inner menu: contains the actual data -->
                <ul class="menu">
                <?php $no=1; foreach($notif as $a){ ?>
                  <li>
                    <a href="#">
                      <i class="fa fa-warning text-yellow"></i> <?php echo $a->nama_notif; ?> <?php echo $a->tanggal; ?>
                    </a>
                  </li>
                  <?php $no++;
                if ($no>10) {
                  break;
                }
                } ?>
                </ul>
              </li>
              <li class="footer"><a href="#">View all</a></li>
            </ul>
          </li>
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="<?php echo base_url()?>admin/dist/img/avatar2.png" class="user-image" alt="User Image">
              <span class="hidden-xs">Ajeng Pursitasari</span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="<?php echo base_url()?>admin/dist/img/avatar2.png" class="img-circle" alt="User Image">

                <p>
                  Ajeng Pursitasari - Resepsionis
                  <small>January, 2017</small>
                </p>
              </li>
              
              <li class="user-footer">
                <div class="pull-left">
                  <a href="#" class="btn btn-default btn-flat">Profile</a>
                </div>
                <div class="pull-right">
                  <a href="<?php echo base_url()?>index.php/dashboard/logOut" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
          <li>
            <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?php echo base_url()?>admin/dist/img/avatar2.png" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Ajeng Pursitasari</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
      <!--  -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <li class="header">MAIN NAVIGATION</li>

        <li class="active"><a href="<?php echo base_url()?>index.php/dashboard/onsite"><i class="fa fa-location-arrow"></i> <span> Reservasi Onsite</span></a></li>
        <li><a href="<?php echo base_url()?>index.php/dashboard/databooking"><i class="fa fa-list-ol"></i> <span> Data Booking</span></a></li>
        <li><a href="<?php echo base_url()?>index.php/dashboard/datacheckin"><i class="fa fa-list-alt"></i> <span> Data Check In</span></a></li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-check-square-o"></i> <span> Check Out</span>
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url()?>index.php/dashboard/formcheckout"><i class="fa fa-credit-card"></i> Form Check Out</a></li>
            <li><a href="<?php echo base_url()?>index.php/dashboard/datacheckout"><i class="fa fa-list-ul"></i> Data Check Out</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-hotel (alias)"></i> <span> Lihat Kamar</span>
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url()?>index.php/dashboard/kamarkosong"><i class="fa  fa-heartbeat"></i> Kamar Kosong</a></li>
            <li><a href="<?php echo base_url()?>index.php/dashboard/kamarbooking"><i class="fa fa-heart-o"></i> Kamar Booking</a></li>
            <li><a href="<?php echo base_url()?>index.php/dashboard/kamarisi"><i class="fa fa-heart"></i> Kamar Isi</a></li>
          </ul>
        </li>
        <li><a href="<?php echo base_url()?>index.php/dashboard/lapharian"><i class="fa fa-list"></i> <span> Laporan Harian</span></a></li>
        <li><a href="<?php echo base_url()?>index.php/dashboard/lapbulanan"><i class="fa fa-bar-chart-o"></i> <span> Laporan Bulanan</span></a></li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-whatsapp"></i> <span> SMS Gateway</span>
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url()?>index.php/dashboard/sendsms"><i class="fa fa-send"></i> Send SMS Gateway</a></li>
            <li><a href="<?php echo base_url()?>index.php/dashboard/daftarsms"><i class="fa fa-th-list"></i> Lihat Daftar SMS Gateway</a></li>
          </ul>
        </li>
        <li><a href="<?php echo base_url()?>index.php/dashboard/buktibayar"><i class="fa fa-file-image-o"></i> <span> Foto Bukti Pembayaran</span></a></li>

      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">

    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Reservasi Onsite
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Reservasi Onsite</li>
      </ol>
    </section>
    <div class="pad margin no-print">
      <div class="callout callout-info" style="margin-bottom: 0!important;">
        <h4><i class="fa fa-info"></i> Note:</h4>
        Halaman ini untuk Pemesanan Kamar Onsite
      </div>
    </div>
    <section class="content">
    <!-- <form role="form" method="post" class="f1" action="<?php echo base_url()?>index.php/Dashboard/dataonsite"> -->
    <div class="box">
    <div class="box box-primary">
      <div class="box-header">
        <h3 class="box-title">Pilihan Kamar Tersedia</h3>
      </div>
      <div class="box-body">
          <div class="col-md-3">
              <!-- <h2><span class="label label-info"> Pilih Tanggal : </span></h2> -->
          </div>

          <div class="col-md-4">
              <!-- Date -->
              <div class="form-group">
                <!-- <label>DateCheck In:</label> -->

                <!-- <div class="input-group date">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                  <input name="datepicker" onclick="masuktglIn()" type="text" class="form-control pull-right" id="datepicker">
                </div> -->
              </div>
              <!-- /.form group -->
          </div>

          <div class="col-md-4">
              <!-- Date -->
              <!-- <div class="form-group">
                <label>Date Check Out:</label>

                <div class="input-group date">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                  <input name="datepicker1" onclick="masuktglOut()" type="text" class="form-control pull-right" id="datepicker1">
                </div>
              </div> -->
              <!-- /.form group -->
          </div>
          <div class="col-md-1">
          </div>
          <div class="col-md-12">
          <h2 align="center"><span class="label label-info"> Tipe Kamar Tersedia : </span></h2>
           </div>
           <?php $tmp=0; foreach($available as $a){ $tmp++; ?>
           <form role="form" method="post" class="f1" action="<?php echo base_url()?>index.php/Dashboard/dataonsite">
           <!-- KAMAR 1 -->
           <input type="hidden" name="tglIn" id="tglIn">
           <input type="hidden" name="tglOut" id="tglOut">
          <div class="col-md-2">
              <div class="media">
                                <div class="media-left">
                                    <a href="javascript:void(0);">
                                        <img class="media-object" src="<?php echo base_url()?>assets/images/<?php echo $a->nama_kamar; ?>.png" width="40" height="40">
                                    </a>
                                </div>
                                <div class="media-body">
                                    <h4 class="media-heading"><?php echo $a->nama_kamar; ?></h4><a href="#"> Detail...</a>
                                </div>
                            </div>
                            <input type="hidden" value="<?php echo $a->nama_kamar; ?>" name="nama_kamar"/>
                            <input type="hidden" value="<?php echo $a->nama_kamar; ?>" name="tipe_kamar"/>
                            <input type="hidden" value="<?php echo $a->harga_kamar_weekend; ?>" name="harga_kamar_weekend"/>
                            <input type="hidden" value="<?php echo $a->harga_kamar_weekday; ?>" name="harga_kamar_weekday"/>
                            <input type="hidden" name="status" value="Lunas">
          </div>

          <div class="col-md-1">
              <input name="tglIn" onclick="masuktglIn()" type="text" class="form-control pull-right" placeholder="In" id="datepicker<?php echo $tmp; ?>">
          </div>
          <div class="col-md-1">
              <input name="tglOut" onclick="masuktglOut()" type="text" class="form-control pull-right" placeholder="Out" id="datepicker1<?php echo $tmp; ?>">
          </div>
          <div class="col-md-1">
              <input name="kamar" id="kamar" type="number" value="1" class="form-control pull-right">
          </div>
          <?php
            if ($tmp==1) {
              ?>
                <?php $no=1; foreach($kamarkosong1 as $kmr1){ ?>
          <div class="col-md-1">
              <h4 align="center"><span class="label label-default"><input type="checkbox" name="radio" id="radio" class="minimal"> <?php echo $kmr1->nomor_kamar; ?></span></h4>
          </div>
          <?php $no++;
                if ($no>6) {
                  break;
                }
          } ?>
          <div class="col-md-1" style="float:center;">
          <?php
                                        $this->db->select('id_kamar');
                                        $this->db->from('kamar');
                                        $this->db->where('id_tipe_kamar',$tmp);
                                        $this->db->where('status','kosong');
                                        $hasil = $this->db->count_all_results();
                    if ($hasil>=1) {
                      ?>
              <button type="submit" class="btn btn-sm-block btn-success">Simpan</button>
          <?php
                    }else{
                      ?>
              <button type="submit" disabled="" class="btn btn-sm-block btn-success">Not Available</button>
          <?php
                    }
          ?>
          </div>
          <div class="col-md-12">
          </div>
              <?php
            }else
            if ($tmp==2) {
              ?>
                <?php $no=1; foreach($kamarkosong2 as $kmr2){ ?>
          <div class="col-md-1">
              <h4 align="center"><span class="label label-default"><input type="checkbox" name="radio" id="radio" class="minimal"> <?php echo $kmr2->nomor_kamar; ?></span></h4>
          </div>
          <?php $no++;
                if ($no>6) {
                  break;
                }
          } ?>
          <div class="col-md-1" style="float:center;">
          <?php
                                        $this->db->select('id_kamar');
                                        $this->db->from('kamar');
                                        $this->db->where('id_tipe_kamar',$tmp);
                                        $this->db->where('status','kosong');
                                        $hasil = $this->db->count_all_results();
                    if ($hasil>=1) {
                      ?>
              <button type="submit" class="btn btn-sm-block btn-success">Simpan</button>
          <?php
                    }else{
                      ?>
              <button type="submit" disabled="" class="btn btn-sm-block btn-success">Not Available</button>
          <?php
                    }
          ?>
          </div>
          <div class="col-md-12">
          </div>
              <?php
            }else
            if ($tmp==3) {
              ?>
                <?php $no=1; foreach($kamarkosong3 as $kmr3){ ?>
          <div class="col-md-1">
              <h4 align="center"><span class="label label-default"><input type="checkbox" name="radio" id="radio" class="minimal"> <?php echo $kmr3->nomor_kamar; ?></span></h4>
          </div>
          <?php $no++;
                if ($no>6) {
                  break;
                }
          } ?>
          <div class="col-md-1" style="float:center;">
          <?php
                                        $this->db->select('id_kamar');
                                        $this->db->from('kamar');
                                        $this->db->where('id_tipe_kamar',$tmp);
                                        $this->db->where('status','kosong');
                                        $hasil = $this->db->count_all_results();
                    if ($hasil>=1) {
                      ?>
              <button type="submit" class="btn btn-sm-block btn-success">Simpan</button>
          <?php
                    }else{
                      ?>
              <button type="submit" disabled="" class="btn btn-sm-block btn-success">Not Available</button>
          <?php
                    }
          ?>
          </div>
          <div class="col-md-12">
          </div>
              <?php
            }else
            if ($tmp==4) {
              ?>
                <?php $no=1; foreach($kamarkosong4 as $kmr4){ ?>
          <div class="col-md-1">
              <h4 align="center"><span class="label label-default"><input type="checkbox" name="radio" id="radio" class="minimal"> <?php echo $kmr4->nomor_kamar; ?></span></h4>
          </div>
          <?php $no++;
                if ($no>6) {
                  break;
                }
          } ?>
          <div class="col-md-1" style="float:center;">
          <?php
                                        $this->db->select('id_kamar');
                                        $this->db->from('kamar');
                                        $this->db->where('id_tipe_kamar',$tmp);
                                        $this->db->where('status','kosong');
                                        $hasil = $this->db->count_all_results();
                    if ($hasil>=1) {
                      ?>
              <button type="submit" class="btn btn-sm-block btn-success">Simpan</button>
          <?php
                    }else{
                      ?>
              <button type="submit" disabled="" class="btn btn-sm-block btn-success">Not Available</button>
          <?php
                    }
          ?>
          </div>
          <div class="col-md-12">
          </div>
              <?php
            }else
            if ($tmp==5) {
              ?>
                <?php $no=1; foreach($kamarkosong5 as $kmr5){ ?>
          <div class="col-md-1">
              <h4 align="center"><span class="label label-default"><input type="checkbox" name="radio" id="radio" class="minimal"> <?php echo $kmr5->nomor_kamar; ?></span></h4>
          </div>
          <?php $no++;
                if ($no>6) {
                  break;
                }
          } ?>
          <div class="col-md-1" style="float:center;">
          <?php
                                        $this->db->select('id_kamar');
                                        $this->db->from('kamar');
                                        $this->db->where('id_tipe_kamar',$tmp);
                                        $this->db->where('status','kosong');
                                        $hasil = $this->db->count_all_results();
                    if ($hasil>=1) {
                      ?>
              <button type="submit" class="btn btn-sm-block btn-success">Simpan</button>
          <?php
                    }else{
                      ?>
              <button type="submit" disabled="" class="btn btn-sm-block btn-success">Not Available</button>
          <?php
                    }
          ?>
          </div>
          <div class="col-md-12">
          </div>
              <?php
            }
            if ($tmp==6) {
              ?>
                <?php $no=1; foreach($kamarkosong6 as $kmr6){ ?>
          <div class="col-md-1">
              <h4 align="center"><span class="label label-default"><input type="checkbox" name="radio" id="radio" class="minimal"> <?php echo $kmr6->nomor_kamar; ?></span></h4>
          </div>
          <?php $no++;
                if ($no>6) {
                  break;
                }
          } ?>
          <div class="col-md-1" style="float:center;">
          <?php
                                        $this->db->select('id_kamar');
                                        $this->db->from('kamar');
                                        $this->db->where('id_tipe_kamar',$tmp);
                                        $this->db->where('status','kosong');
                                        $hasil = $this->db->count_all_results();
                    if ($hasil>=1) {
                      ?>
              <button type="submit" class="btn btn-sm-block btn-success">Simpan</button>
          <?php
                    }else{
                      ?>
              <button type="submit" disabled="" class="btn btn-sm-block btn-success">Not Available</button>
          <?php
                    }
          ?>
          </div>
          <div class="col-md-12">
          </div>
              <?php
            }
          ?>
          
          <!-- <div class="col-md-1">
              <h4 align="center"><span class="label label-warning"><input type="checkbox" class="minimal" disabled="true"> 404</span></h4>
          </div>
          <div class="col-md-1">
              <h4 align="center"><span class="label label-primary"><input type="checkbox" class="minimal"> 404</span></h4>
          </div>
          <div class="col-md-1">
              <h4 align="center"><span class="label label-danger"><input type="checkbox" class="minimal" disabled="true"> 404</span></h4>
          </div>
          <div class="col-md-1">
              <h4 align="center"><span class="label label-warning"><input type="checkbox" class="minimal" disabled="true"> 404</span></h4>
          </div>
          <div class="col-md-1">
              <h4 align="center"><span class="label label-primary"><input type="checkbox" class="minimal"> 404</span></h4>
          </div>
          <div class="col-md-1">
              <h4 align="center"><span class="label label-warning"><input type="checkbox" class="minimal" disabled="true"> 404</span></h4>
          </div>
          <div class="col-md-1">
              <h4 align="center"><span class="label label-primary"><input type="checkbox" class="minimal"> 404</span></h4>
          </div> -->
          <!-- <div class="col-md-1" style="float:center;">
              <button type="submit" class="btn btn-sm-block btn-primary">Simpan</button>
          </div> -->
          
          <!-- TUTUP KAMAR 1 -->

          <div class="col-md-12">
          </div>
          </form>
         <?php } ?>

          <!-- <div class="col-md-2" style="float:right;">
              <button type="submit" class="btn btn-block btn-primary">Simpan</button>
          </div> -->
      </div>
      <!-- /.box-body -->
    </div>
    <!-- /.box -->
    </div>
    

    <!-- iCheck -->
          <!-- <div class="box box-success">
            <div class="box-header">
              <h3 class="box-title">Keterangan</h3>
            </div>
            <div class="box-body"> -->
              <!-- Minimal style -->

              <!-- checkbox -->
              <!-- <div class="form-group">
                <div class="col-md-4">
                    <h4 align="center"><span class="label label-danger"> Warna Merah untuk Status Terisi</span></h4>
                </div>
                <div class="col-md-4">
                    <h4 align="center"><span class="label label-primary"> Warna Biru untuk Status Tersedia</span></h4>
                </div>
                <div class="col-md-4">
                    <h4 align="center"><span class="label label-warning"> Warna Kuning untuk Status Booking</span></h4>
                </div>
              </div>
          </div> -->
          <!-- /.box -->
    </section>
    
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 2.3.8
    </div>
    <strong>Copyright &copy; 2014-2016 <a href="http://almsaeedstudio.com">Almsaeed Studio</a>.</strong> All rights
    reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Create the tabs -->
    <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
      <li><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
      <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
    </ul>
    <!-- Tab panes -->
    <div class="tab-content">
      <!-- Home tab content -->
      <div class="tab-pane" id="control-sidebar-home-tab">
        <h3 class="control-sidebar-heading">Recent Activity</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-birthday-cake bg-red"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Langdon's Birthday</h4>

                <p>Will be 23 on April 24th</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-user bg-yellow"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Frodo Updated His Profile</h4>

                <p>New phone +1(800)555-1234</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-envelope-o bg-light-blue"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Nora Joined Mailing List</h4>

                <p>nora@example.com</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-file-code-o bg-green"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Cron Job 254 Executed</h4>

                <p>Execution time 5 seconds</p>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

        <h3 class="control-sidebar-heading">Tasks Progress</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Custom Template Design
                <span class="label label-danger pull-right">70%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-danger" style="width: 70%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Update Resume
                <span class="label label-success pull-right">95%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-success" style="width: 95%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Laravel Integration
                <span class="label label-warning pull-right">50%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-warning" style="width: 50%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Back End Framework
                <span class="label label-primary pull-right">68%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-primary" style="width: 68%"></div>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

      </div>
      <!-- /.tab-pane -->
      <!-- Stats tab content -->
      <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div>
      <!-- /.tab-pane -->
      <!-- Settings tab content -->
      <div class="tab-pane" id="control-sidebar-settings-tab">
        <form method="post">
          <h3 class="control-sidebar-heading">General Settings</h3>

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Report panel usage
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Some information about this general settings option
            </p>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Allow mail redirect
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Other sets of options are available
            </p>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Expose author name in posts
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Allow the user to show his name in blog posts
            </p>
          </div>
          <!-- /.form-group -->

          <h3 class="control-sidebar-heading">Chat Settings</h3>

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Show me as online
              <input type="checkbox" class="pull-right" checked>
            </label>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Turn off notifications
              <input type="checkbox" class="pull-right">
            </label>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Delete chat history
              <a href="javascript:void(0)" class="text-red pull-right"><i class="fa fa-trash-o"></i></a>
            </label>
          </div>
          <!-- /.form-group -->
        </form>
      </div>
      <!-- /.tab-pane -->
    </div>
  </aside>
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- jQuery 2.2.3 -->
<script src="<?php echo base_url()?>admin/plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="<?php echo base_url()?>admin/bootstrap/js/bootstrap.min.js"></script>
<!-- DataTables -->
<script src="<?php echo base_url()?>admin/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url()?>admin/plugins/datatables/dataTables.bootstrap.min.js"></script>
<!-- Select2 -->
<script src="<?php echo base_url()?>admin/plugins/select2/select2.full.min.js"></script>
<!-- InputMask -->
<script src="<?php echo base_url()?>admin/plugins/input-mask/jquery.inputmask.js"></script>
<script src="<?php echo base_url()?>admin/plugins/input-mask/jquery.inputmask.date.extensions.js"></script>
<script src="<?php echo base_url()?>admin/plugins/input-mask/jquery.inputmask.extensions.js"></script>
<!-- date-range-picker -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js"></script>
<script src="<?php echo base_url()?>admin/plugins/daterangepicker/daterangepicker.js"></script>
<!-- bootstrap datepicker -->
<script src="<?php echo base_url()?>admin/plugins/datepicker/bootstrap-datepicker.js"></script>
<!-- bootstrap color picker -->
<script src="<?php echo base_url()?>admin/plugins/colorpicker/bootstrap-colorpicker.min.js"></script>
<!-- bootstrap time picker -->
<script src="<?php echo base_url()?>admin/plugins/timepicker/bootstrap-timepicker.min.js"></script>
<!-- SlimScroll -->
<script src="<?php echo base_url()?>admin/plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="<?php echo base_url()?>admin/plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url()?>admin/dist/js/app.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url()?>admin/dist/js/demo.js"></script>
<!-- page script -->
<script>
  $(function () {
    $("#example1").DataTable();
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false
    });
  });
</script>

<script type="text/javascript">

var save_method; //for save method string
var table;

$(document).ready(function() {

    //datatables
    table = $('#table').DataTable({

        "processing": true, //Feature control the processing indicator.
        "serverSide": true, //Feature control DataTables' server-side processing mode.
        "order": [], //Initial no order.

        // Load data for the table's content from an Ajax source
        "ajax": {
            "url": "<?php echo site_url('masterdatapesanan/ajax_list')?>",
            "type": "POST"
        },

        //Set column definition initialisation properties.
        "columnDefs": [
        {
            "targets": [ -1 ], //last column
            "orderable": false, //set not orderable
        },
        ],

    });

    //Initialize Select2 Elements
    $(".select2").select2();

    //Datemask dd/mm/yyyy
    $("#datemask").inputmask("dd/mm/yyyy", {"placeholder": "dd/mm/yyyy"});
    //Datemask2 mm/dd/yyyy
    $("#datemask2").inputmask("mm/dd/yyyy", {"placeholder": "mm/dd/yyyy"});
    //Money Euro
    $("[data-mask]").inputmask();

    //Date range picker
    $('#reservation').daterangepicker();
    //Date range picker with time picker
    $('#reservationtime').daterangepicker({timePicker: true, timePickerIncrement: 30, format: 'MM/DD/YYYY h:mm A'});
    //Date range as a button
    $('#daterange-btn').daterangepicker(
        {
          ranges: {
            'Today': [moment(), moment()],
            'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
            'Last 7 Days': [moment().subtract(6, 'days'), moment()],
            'Last 30 Days': [moment().subtract(29, 'days'), moment()],
            'This Month': [moment().startOf('month'), moment().endOf('month')],
            'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
          },
          startDate: moment().subtract(29, 'days'),
          endDate: moment()
        },
        function (start, end) {
          $('#daterange-btn span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
        }
    );
var date = new Date();
  date.setDate(date.getDate()-0);
    //Date picker
    $('#datepicker').datepicker({
      autoclose: true,
      startDate: date
    });

    //Date picker
    $('#datepicker1').datepicker({
      autoclose: true,
      startDate: date
    });

    //Date picker
    $('#datepicker11').datepicker({
      autoclose: true,
      startDate: date
    });

    //Date picker
    $('#datepicker2').datepicker({
      autoclose: true,
      startDate: date
    });

    //Date picker
    $('#datepicker12').datepicker({
      autoclose: true,
      startDate: date
    });

    //Date picker
    $('#datepicker3').datepicker({
      autoclose: true,
      startDate: date
    });

    //Date picker
    $('#datepicker13').datepicker({
      autoclose: true,
      startDate: date
    });

    //Date picker
    $('#datepicker4').datepicker({
      autoclose: true,
      startDate: date
    });

    //Date picker
    $('#datepicker14').datepicker({
      autoclose: true,
      startDate: date
    });

    //Date picker
    $('#datepicker5').datepicker({
      autoclose: true,
      startDate: date
    });

    //Date picker
    $('#datepicker15').datepicker({
      autoclose: true,
      startDate: date
    });

    //Date picker
    $('#datepicker6').datepicker({
      autoclose: true,
      startDate: date
    });

    //Date picker
    $('#datepicker16').datepicker({
      autoclose: true,
      startDate: date
    });

    //iCheck for checkbox and radio inputs
    $('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
      checkboxClass: 'icheckbox_minimal-blue',
      radioClass: 'iradio_minimal-blue'
    });
    //Red color scheme for iCheck
    $('input[type="checkbox"].minimal-red, input[type="radio"].minimal-red').iCheck({
      checkboxClass: 'icheckbox_minimal-red',
      radioClass: 'iradio_minimal-red'
    });
    //Flat red color scheme for iCheck
    $('input[type="checkbox"].flat-red, input[type="radio"].flat-red').iCheck({
      checkboxClass: 'icheckbox_flat-green',
      radioClass: 'iradio_flat-green'
    });

    //Colorpicker
    $(".my-colorpicker1").colorpicker();
    //color picker with addon
    $(".my-colorpicker2").colorpicker();

    //Timepicker
    $(".timepicker").timepicker({
      showInputs: false
    });


});



function add_pesanan()
{
    save_method = 'add';
    $('#form')[0].reset(); // reset form on modals
    $('.form-group').removeClass('has-error'); // clear error class
    $('.help-block').empty(); // clear error string
    $('#modal_form').modal('show'); // show bootstrap modal
    $('.modal-title').text('Tambah Pesanan'); // Set Title to Bootstrap modal title
}

function edit_pesanan(id)
{
    save_method = 'update';
    $('#form')[0].reset(); // reset form on modals
    $('.form-group').removeClass('has-error'); // clear error class
    $('.help-block').empty(); // clear error string

    //Ajax Load data from ajax
    $.ajax({
        url : "<?php echo site_url('Masterdatapesanan/ajax_edit/')?>/" + id,
        type: "GET",
        dataType: "JSON",
        success: function(data)
        {
            $('[name="id_tamu"]').val(data.id_tamu);
            $('[name="tgl_input"]').val(data.tgl_input);
            $('[name="nama_tamu"]').val(data.nama_tamu);
            $('[name="alamat_tamu"]').val(data.alamat_tamu);
            $('[name="no_hp"]').val(data.np_hp);
            $('[name="tgl_masuk"]').val(data.tgl_masuk);
            $('[name="tgl_keluar"]').val(data.tgl_keluar);
            $('[name="tipe_kamar"]').val(data.tipe_kamar);
            $('[name="harga_kamar"]').val(data.harga_kamar);
            $('[name="jumlah_kamar"]').val(data.jumlah_kamar);
            $('[name="status"]').val(data.status);
            $('#modal_form').modal('show'); // show bootstrap modal when complete loaded
            $('.modal-title').text('Edit Pesanan'); // Set title to Bootstrap modal title

        },
        error: function (jqXHR, textStatus, errorThrown)
        {
            alert('Error get data from ajax');
        }
    });
}

function reload_table()
{
    table.ajax.reload(null,false); //reload datatable ajax
}

function save()
{
    $('#btnSave').text('saving...'); //change button text
    $('#btnSave').attr('disabled',true); //set button disable
    var url;

    if(save_method == 'add') {
        url = "<?php echo site_url('Masterdatapesanan/ajax_add')?>";
    } else {
        url = "<?php echo site_url('Masterdatapesanan/ajax_update')?>";
    }

    // ajax adding data to database
    $.ajax({
        url : url,
        type: "POST",
        data: $('#form').serialize(),
        dataType: "JSON",
        success: function(data)
        {

            if(data.status) //if success close modal and reload ajax table
            {
                $('#modal_form').modal('hide');
                reload_table();
            }

            $('#btnSave').text('save'); //change button text
            $('#btnSave').attr('disabled',false); //set button enable


        },
        error: function (jqXHR, textStatus, errorThrown)
        {
            alert('Error adding / update data');
            $('#btnSave').text('save'); //change button text
            $('#btnSave').attr('disabled',false); //set button enable

        }
    });
}

function delete_pesanan(id)
{
    if(confirm('Are you sure delete this data?'))
    {
        // ajax delete data to database
        $.ajax({
            url : "<?php echo site_url('Masterdatapesanan/ajax_delete')?>/"+id,
            type: "POST",
            dataType: "JSON",
            success: function(data)
            {
                //if success reload ajax table
                $('#modal_form').modal('hide');
                reload_table();
            },
            error: function (jqXHR, textStatus, errorThrown)
            {
                alert('Error deleting data');
            }
        });

    }
}

function masuktglIn(){
    // alert('wahyu');
    var tglIn1 = $("#datepicker").val();
    $("#tglIn").val(tglIn1);
}

function masuktglOut(){
    // alert('wahyu');
    var tglOut1 = $("#datepicker1").val();
    $("#tglOut").val(tglOut1);
}

</script>
<!-- <div></div> -->
<!-- Bootstrap modal -->
<div class="modal fade" id="modal_form" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h3 class="modal-title">Form Kelola Kamar</h3>
            </div>
            <div class="modal-body form">
                <form action="#" id="form" class="form-horizontal">
                    <input type="hidden" value="" name="id_tamu"/>
                    <div class="form-body">
                        <div class="form-group">
                            <label class="control-label col-md-3">Tanggal Masuk</label>
                            <div class="col-md-9">
                                <input name="tgl_input" required="" placeholder="Tanggal Masuk" class="form-control" type="date">
                                <span class="help-block"></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Nama Tamu</label>
                            <div class="col-md-9">
                                <input name="nama_tamu" placeholder="Nama Tamu" class="form-control" type="text">
                                <span class="help-block"></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Alamat Tamu</label>
                            <div class="col-md-9">
                                <input name="alamat_tamu" placeholder="Alamat Tamu" class="form-control" type="text">
                                <span class="help-block"></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Nomor HP</label>
                            <div class="col-md-9">
                                <input name="no_hp" placeholder="Nomor HP" class="form-control" type="text">
                                <span class="help-block"></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Tanggal Masuk</label>
                            <div class="col-md-9">
                                <input name="tgl_masuk" placeholder="Tanggal Masuk" class="form-control" type="date">
                                <span class="help-block"></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Tanggal Keluar</label>
                            <div class="col-md-9">
                                <input name="tgl_keluar" placeholder="Tanggal Keluar" class="form-control" type="date">
                                <span class="help-block"></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Tipe Kamar</label>
                            <div class="col-md-9">
                                <input name="tipe_kamar" placeholder="Tipe Kamar" class="form-control" type="text">
                                <span class="help-block"></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Harga Kamar </label>
                            <div class="col-md-9">
                                <input name="harga_kamar" placeholder="Harga Kamar " class="form-control" type="text">
                                <span class="help-block"></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Jumlah Kamar</label>
                            <div class="col-md-9">
                                <input name="jumlah_kamar" placeholder="Jumlah Kamar" class="form-control" type="text">
                                <span class="help-block"></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Status</label>
                            <div class="col-md-9">
                                <input name="status" placeholder="Status" class="form-control" type="text">
                                <span class="help-block"></span>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" id="btnSave" onclick="save()" class="btn btn-primary">Save</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<!-- End Bootstrap modal -->
</body>
</html>
