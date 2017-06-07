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

  <!-- <script>
     $(function () {
        $("#kode").autocomplete({    //id kode sebagai key autocomplete yang akan dibawa ke source url
            minLength:0,
            delay:0,
            source:'<?php echo site_url('FormCekout/get_alldata'); ?>',   //nama source kita ambil langsung memangil fungsi get_allkota
            select:function(event, ui){
                $('#nama').val(ui.item.nama);
                $('#alamat').val(ui.item.alamat);
                $('#id_booking').val(ui.item.id_booking);
                $('#no_hp').val(ui.item.no_hp);
                $('#tgl_masuk').val(ui.item.tgl_masuk);
                // $('#tgl_keluar').val(ui.item.tgl_keluar);
                $('#nomor_kamar').val(ui.item.nomor_kamar);
                $('#jumlah_malam').val(ui.item.jumlah_malam);
                $('#harga').val(ui.item.harga);
                $('#total').val(ui.item.total);
                }
            });
        });
    </script> -->
<!-- - See more at: http://fabernainggolan.net/input-dinamis-autocomplete-pada-codeignitermysql-dengan-jquer#sthash.X5a3zWkM.dpuf -->

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
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <li class="header">MAIN NAVIGATION</li>

        <li><a href="<?php echo base_url()?>index.php/dashboard/onsite"><i class="fa fa-location-arrow"></i> <span> Reservasi Onsite</span></a></li>
        <li><a href="<?php echo base_url()?>index.php/dashboard/databooking"><i class="fa fa-list-ol"></i> <span> Data Booking</span></a></li>
        <li><a href="<?php echo base_url()?>index.php/dashboard/datacheckin"><i class="fa fa-list-alt"></i> <span> Data Check In</span></a></li>
        <li class="treeview active">
          <a href="#">
            <i class="fa fa-check-square-o"></i> <span> Check Out</span>
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
          </a>
          <ul class="treeview-menu">
            <li class="active"><a href="<?php echo base_url()?>index.php/dashboard/formcheckout"><i class="fa fa-credit-card"></i> Form Check Out</a></li>
            <li><a href="<?php echo base_url()?>index.php/dashboard/datacheckout"><i class="fa fa-list-ul"></i> Data Check Out</a></li>
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
        Form Check Out Kamar
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Check Out</a></li>
        <li class="active">Form Check Out Kamar</li>
      </ol>
    </section>
    <div class="pad margin no-print">
      <div class="callout callout-info" style="margin-bottom: 0!important;">
        <h4><i class="fa fa-info"></i> Note:</h4>
        Isi data dengan benar
      </div>
    </div>
    <section class="content">
    <div class="box">
    <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Input Data Pelanggan</h3>
            </div>
            <!-- /.box-header -->
            <form method="POST" action="<?php echo base_url()?>index.php/Mastercheckout/ajax_update_cekout" id="form">
            <div class="col-md-12 swimming-grid">
          <label>ID Booking</label>
          <input type="text" name="kode" id="kode" onkeyup="cobacoba()" />
                    <button type="Button" class="btn btn-primary btn-xs">Cari </i></button>
        </div>
        </br></br>
            <!-- form start -->
            
              <div class="box-body">
              <div id="cekout">
                <div class="form-group">
                  <label for="nama">Nama Lengkap</label>
                  <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama Lengkap">
                </div>
                <div class="form-group">
                  <label for="alamat">Alamat</label>
                  <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Alamat">
                </div>
                <div class="form-group">
                  <label for="id_booking">ID Identitas</label>
                  <input type="text" class="form-control" id="id_booking" name="id_booking" placeholder="ID Identitas">
                </div>
                <div class="form-group">
                  <label for="no_hp">Nomor HP</label>
                  <input type="text" class="form-control" id="no_hp" name="no_hp" placeholder="Nomor HP">
                </div>
                <div class="form-group">
                  <label for="tgl_masuk">Tanggal Check In</label>
                  <input type="text" class="form-control" id="tgl_masuk" name="tgl_masuk" placeholder="Tanggal Check In">
                </div>
                <div class="form-group">
                  <label for="jumlah_malam">Total Malam</label>
                  <input type="text" class="form-control" id="jumlah_malam" name="jumlah_malam" placeholder="Total Malam">
                </div>
                <div class="form-group">
                  <label for="nomor_kamar">Nomor Kamar</label>
                  <input type="text" class="form-control" id="nomor_kamar" name="nomor_kamar" placeholder="Nomor Kamar">
                </div>
                <div class="form-group">
                    <label for="harga">Harga Sewa Kamar</label>
                    <input type="text" class="form-control" id="harga" name="harga" placeholder="Harga Kamar">
                </div>
              </div>
                <!-- Date -->
              <div class="form-group">
                <label>Tanggal Check Out</label>

                <div class="input-group date">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                  <input type="text" name="datepicker" class="form-control pull-right" id="datepicker">
                </div>
                <!-- /.input group -->
              </div>
              <!-- /.form group -->
              
              <div class="form-group">
              <h3 class="box-title">Data Pemesanan Kamar</h3>
              </div>
              <!-- <div class="form-group col-md-2">
                  <label for="nomor_kamar">Nomor Kamar</label>
                  <input type="text" class="form-control" id="nomor_kamar" name="nomor_kamar" placeholder="Nomor Kamar">
              </div>
              <div class="form-group col-md-2">
                  <label for="harga">Harga Sewa Kamar</label>
                  <input type="text" class="form-control" id="harga" name="harga" placeholder="Harga Kamar">
              </div> -->
              <div class="form-group col-md-2">
                  <label for="extra_bed">Extra Bed</label>
                  <input type="text" class="form-control" id="extra_bed" name="extra_bed" placeholder="Extra Bed">
              </div>
              <div class="form-group col-md-2">
                  <label for="restaurant">Restaurant</label>
                  <input type="text" class="form-control" id="restaurant" name="restaurant" placeholder="Restaurant">
              </div>
              <div class="form-group col-md-2">
                  <label for="lain2">Lain-lain</label>
                  <input type="text" class="form-control" id="lain2" name="lain2" placeholder="Lain-lain" onkeyup="ambiltotal()">
              </div>
              <div id="gettotal">
              <div class="form-group col-md-2">
                  <label for="total">Subtotal</label>
                  <input type="text" class="form-control" id="total" name="total" placeholder="Subtotal">
              </div>
              <div class="col-md-7">
              </div>
              <div class="form-group form-horizontal">
                  <label for="total" class="col-md-2 control-label">Total</label>

                  <div class="col-md-3">
                    <input type="text" class="form-control" id="totalall" placeholder="Total">
                  </div>
              </div>
              </div>
              <div class="col-md-7">
              </div>
              <div class="form-group form-horizontal">
                  <label for="paid" class="col-md-2 control-label">Paid</label>

                  <div class="col-md-3">
                    <input type="text" class="form-control" id="paid" placeholder="Paid" onkeyup="caritotaldue()">
                  </div>
              </div>
              <div class="col-md-7">
              </div>
              <div id="gettotaldue">
              <div class="form-group form-horizontal">
                  <label for="total_due" class="col-md-2 control-label">Total Due</label>

                  <div class="col-md-3">
                    <input type="text" class="form-control" id="total_due" placeholder="Total Due">
                  </div>
              </div>
              </div>
              <div class="box-footer " style="float:right;">
                <button type="submit" id="btnSave" class="btn btn-primary">Simpan</button>
              </div>
            <!-- /.box-body -->
          </div>
          </form>
          <!-- /.box -->
    <!-- /.box -->
    </div>
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

  <script src="<?php echo base_url()?>assets/js/jquery.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url()?>assets/js/jquery-ui.js" type="text/javascript"></script>
<!-- jQuery 2.2.3 -->
<!-- <script src="<?php echo base_url()?>admin/plugins/jQuery/jquery-2.2.3.min.js"></script> -->
<!-- Bootstrap 3.3.6 -->
<!-- <script src="<?php echo base_url()?>admin/bootstrap/js/bootstrap.min.js"></script> -->
<!-- DataTables -->
<!-- <script src="<?php echo base_url()?>admin/plugins/datatables/jquery.dataTables.min.js"></script> -->
<!-- <script src="<?php echo base_url()?>admin/plugins/datatables/dataTables.bootstrap.min.js"></script> -->
<!-- Select2 -->
<!-- <script src="<?php echo base_url()?>admin/plugins/select2/select2.full.min.js"></script> -->
<!-- InputMask -->
<!-- <script src="<?php echo base_url()?>admin/plugins/input-mask/jquery.inputmask.js"></script> -->
<!-- <script src="<?php echo base_url()?>admin/plugins/input-mask/jquery.inputmask.date.extensions.js"></script> -->
<!-- <script src="<?php echo base_url()?>admin/plugins/input-mask/jquery.inputmask.extensions.js"></script> -->
<!-- date-range-picker -->
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js"></script> -->
<!-- <script src="<?php echo base_url()?>admin/plugins/daterangepicker/daterangepicker.js"></script> -->
<!-- bootstrap datepicker -->
<script src="<?php echo base_url()?>admin/plugins/datepicker/bootstrap-datepicker.js"></script>
<!-- bootstrap color picker -->
<!-- <script src="<?php echo base_url()?>admin/plugins/colorpicker/bootstrap-colorpicker.min.js"></script> -->
<!-- bootstrap time picker -->
<!-- <script src="<?php echo base_url()?>admin/plugins/timepicker/bootstrap-timepicker.min.js"></script> -->
<!-- SlimScroll -->
<!-- <script src="<?php echo base_url()?>admin/plugins/slimScroll/jquery.slimscroll.min.js"></script> -->
<!-- FastClick -->
<!-- <script src="<?php echo base_url()?>admin/plugins/fastclick/fastclick.js"></script> -->
<!-- AdminLTE App -->
<!-- <script src="<?php echo base_url()?>admin/dist/js/app.min.js"></script> -->
<!-- AdminLTE for demo purposes -->
<!-- <script src="<?php echo base_url()?>admin/dist/js/demo.js"></script> -->
<!-- page script -->

<script type="text/javascript">

// var save_method; //for save method string
// var table;

$(document).ready(function() {

  $("#kode").autocomplete({    //id kode sebagai key autocomplete yang akan dibawa ke source url
            minLength:0,
            delay:0,
            source:'<?php echo site_url('FormCekout/get_alldata'); ?>',   //nama source kita ambil langsung memangil fungsi get_allkota
            select:function(event, ui){
                $('#nama').val(ui.item.nama);
                $('#alamat').val(ui.item.alamat);
                $('#id_booking').val(ui.item.id_booking);
                $('#no_hp').val(ui.item.no_hp);
                $('#tgl_masuk').val(ui.item.tgl_masuk);
                // $('#tgl_keluar').val(ui.item.tgl_keluar);
                $('#nomor_kamar').val(ui.item.nomor_kamar);
                $('#jumlah_malam').val(ui.item.jumlah_malam);
                $('#harga').val(ui.item.harga);
                $('#total').val(ui.item.total);
                }
    });

  

//     //datatables
//     table = $('#table').DataTable({

//         "processing": true, //Feature control the processing indicator.
//         "serverSide": true, //Feature control DataTables' server-side processing mode.
//         "order": [], //Initial no order.

//         // Load data for the table's content from an Ajax source
//         "ajax": {
//             "url": "<?php echo site_url('masterdatapesanan/ajax_list')?>",
//             "type": "POST"
//         },

//         //Set column definition initialisation properties.
//         "columnDefs": [
//         {
//             "targets": [ -1 ], //last column
//             "orderable": false, //set not orderable
//         },
//         ],

//     });

//     //Initialize Select2 Elements
//     $(".select2").select2();

//     //Datemask dd/mm/yyyy
//     $("#datemask").inputmask("dd/mm/yyyy", {"placeholder": "dd/mm/yyyy"});
//     //Datemask2 mm/dd/yyyy
//     $("#datemask2").inputmask("mm/dd/yyyy", {"placeholder": "mm/dd/yyyy"});
//     //Money Euro
//     $("[data-mask]").inputmask();

    // //Date range picker
    // $('#reservation').daterangepicker();
    // //Date range picker with time picker
    // $('#reservationtime').daterangepicker({timePicker: true, timePickerIncrement: 30, format: 'MM/DD/YYYY h:mm A'});
    // //Date range as a button
    // $('#daterange-btn').daterangepicker(
    //     {
    //       ranges: {
    //         'Today': [moment(), moment()],
    //         'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
    //         'Last 7 Days': [moment().subtract(6, 'days'), moment()],
    //         'Last 30 Days': [moment().subtract(29, 'days'), moment()],
    //         'This Month': [moment().startOf('month'), moment().endOf('month')],
    //         'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
    //       },
    //       startDate: moment().subtract(29, 'days'),
    //       endDate: moment()
    //     },
    //     function (start, end) {
    //       $('#daterange-btn span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
    //     }
    // );

    //Date picker
    $('#datepicker').datepicker({
      autoclose: true
    });

    //Date picker
    $('#datepicker1').datepicker({
      autoclose: true
    });

    // //iCheck for checkbox and radio inputs
    // $('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
    //   checkboxClass: 'icheckbox_minimal-blue',
    //   radioClass: 'iradio_minimal-blue'
    // });
    // //Red color scheme for iCheck
    // $('input[type="checkbox"].minimal-red, input[type="radio"].minimal-red').iCheck({
    //   checkboxClass: 'icheckbox_minimal-red',
    //   radioClass: 'iradio_minimal-red'
    // });
    // //Flat red color scheme for iCheck
    // $('input[type="checkbox"].flat-red, input[type="radio"].flat-red').iCheck({
    //   checkboxClass: 'icheckbox_flat-green',
    //   radioClass: 'iradio_flat-green'
    // });

    // //Colorpicker
    // $(".my-colorpicker1").colorpicker();
    // //color picker with addon
    // $(".my-colorpicker2").colorpicker();

    // //Timepicker
    // $(".timepicker").timepicker({
    //   showInputs: false
    // });


});



// function add_pesanan()
// {
//     save_method = 'add';
//     $('#form')[0].reset(); // reset form on modals
//     $('.form-group').removeClass('has-error'); // clear error class
//     $('.help-block').empty(); // clear error string
//     $('#modal_form').modal('show'); // show bootstrap modal
//     $('.modal-title').text('Tambah Pesanan'); // Set Title to Bootstrap modal title
// }

// function edit_pesanan(id)
// {
//     save_method = 'update';
//     $('#form')[0].reset(); // reset form on modals
//     $('.form-group').removeClass('has-error'); // clear error class
//     $('.help-block').empty(); // clear error string

//     //Ajax Load data from ajax
//     $.ajax({
//         url : "<?php echo site_url('Masterdatapesanan/ajax_edit/')?>/" + id,
//         type: "GET",
//         dataType: "JSON",
//         success: function(data)
//         {
//             $('[name="id_tamu"]').val(data.id_tamu);
//             $('[name="tgl_input"]').val(data.tgl_input);
//             $('[name="nama_tamu"]').val(data.nama_tamu);
//             $('[name="alamat_tamu"]').val(data.alamat_tamu);
//             $('[name="no_hp"]').val(data.np_hp);
//             $('[name="tgl_masuk"]').val(data.tgl_masuk);
//             $('[name="tgl_keluar"]').val(data.tgl_keluar);
//             $('[name="tipe_kamar"]').val(data.tipe_kamar);
//             $('[name="harga_kamar"]').val(data.harga_kamar);
//             $('[name="jumlah_kamar"]').val(data.jumlah_kamar);
//             $('[name="status"]').val(data.status);
//             $('#modal_form').modal('show'); // show bootstrap modal when complete loaded
//             $('.modal-title').text('Edit Pesanan'); // Set title to Bootstrap modal title

//         },
//         error: function (jqXHR, textStatus, errorThrown)
//         {
//             alert('Error get data from ajax');
//         }
//     });
// }

// function reload_table()
// {
//     table.ajax.reload(null,false); //reload datatable ajax
// }

// function save()
// {
//     $('#btnSave').text('saving...'); //change button text
//     $('#btnSave').attr('disabled',true); //set button disable
//     var url;

//     if(save_method == 'add') {
//         url = "<?php echo site_url('Masterdatapesanan/ajax_add')?>";
//     } else {
//         url = "<?php echo site_url('Masterdatapesanan/ajax_update')?>";
//     }

//     // ajax adding data to database
//     $.ajax({
//         url : url,
//         type: "POST",
//         data: $('#form').serialize(),
//         dataType: "JSON",
//         success: function(data)
//         {

//             if(data.status) //if success close modal and reload ajax table
//             {
//                 $('#modal_form').modal('hide');
//                 reload_table();
//             }

//             $('#btnSave').text('save'); //change button text
//             $('#btnSave').attr('disabled',false); //set button enable


//         },
//         error: function (jqXHR, textStatus, errorThrown)
//         {
//             alert('Error adding / update data');
//             $('#btnSave').text('save'); //change button text
//             $('#btnSave').attr('disabled',false); //set button enable

//         }
//     });
// }

// function delete_pesanan(id)
// {
//     if(confirm('Are you sure delete this data?'))
//     {
//         // ajax delete data to database
//         $.ajax({
//             url : "<?php echo site_url('Masterdatapesanan/ajax_delete')?>/"+id,
//             type: "POST",
//             dataType: "JSON",
//             success: function(data)
//             {
//                 //if success reload ajax table
//                 $('#modal_form').modal('hide');
//                 reload_table();
//             },
//             error: function (jqXHR, textStatus, errorThrown)
//             {
//                 alert('Error deleting data');
//             }
//         });

//     }
// }

// function yesnoCheck() {
//     if (document.getElementById('optionsRadios1').checked) {
//         document.getElementById('debit').style.visibility = 'hidden';
//     } else {
//         document.getElementById('debit').style.visibility = 'visible';
//     }
// }

// function yesCheck() {
//     if (document.getElementById('optionsRadios2').checked) {
//         document.getElementById('debit').style.visibility = 'visible';
//     } else {
//         document.getElementById('debit').style.visibility = 'hidden';
//     }
// }

function cobacoba(){
       var kode = $("#kode").val();
       if(kode !=''){
       $.ajax({
           url:"<?php echo base_url()?>index.php/FormCekout/cobacek/"+kode,
           success:function(data){
               $("#cekout").html(data);
           }
       });
       }
}

function ambiltotal(){
    var kode = $("#kode").val();
    var extra_bed = $("#extra_bed").val();
    var restaurant = $("#restaurant").val();
    var lain2 = $("#lain2").val();
       if(kode !=''){
       $.ajax({
           url:"<?php echo base_url()?>index.php/FormCekout/gettotalnya/"+kode+"/"+extra_bed+"/"+restaurant+"/"+lain2,
           success:function(data){
               $("#gettotal").html(data);
           }
       });
       }
}

function caritotaldue(){
  var kode = $("#kode").val();
  var paid = $("#paid").val();
  var total = $("#total").val();
       if(kode !=''){
       $.ajax({
           url:"<?php echo base_url()?>index.php/FormCekout/totaldue/"+kode+"/"+paid+"/"+total,
           success:function(data){
               $("#gettotaldue").html(data);
           }
       });
       }
}

function save()
{
    $('#btnSave').text('saving...'); //change button text
    $('#btnSave').attr('disabled',true); //set button disable
    var url;

        url = "<?php echo site_url('Mastercheckout/ajax_update_cekout')?>";

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
</div>
<!-- /.modal -->
<!-- End Bootstrap modal -->
</body>
</html>
