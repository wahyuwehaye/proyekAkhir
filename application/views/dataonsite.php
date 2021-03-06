
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
        <li><a href="<?php echo base_url()?>index.php/dashboard/datacancel"><i class="fa fa-list-ol"></i> <span> Data Canceled</span></a></li>
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
        <li><a href="#">Pemesanan</a></li>
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
    <div class="box">
    <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Input Data Pelanggan</h3>
            </div>

            <?php
                $CI =& get_instance();
                
                $harganya = 0;
                // $date = date('Y-m-d');
                $date = $tglIn;
                $timestamp = strtotime($date);
                $weekday= date("l", $timestamp );
                $normalized_weekday = strtolower($weekday);
                // echo $normalized_weekday ;
                if (($normalized_weekday == "saturday") || ($normalized_weekday == "sunday")) {
                    $harganya = $harga_kamar_weekend;
                } else {
                    $harganya = $harga_kamar_weekday;
                }

                $start_date = new DateTime($tglIn);
                $end_date = new DateTime($tglOut);
                $interval = $start_date->diff($end_date);
                // echo "$interval->days hari "; // hasil : 217 hari
                $jumlahmalamnya = $interval->days;
                // echo $jumlahmalamnya;

                $total = ($harganya * $jumlahmalamnya)*$kamar;
                // echo $total;
                $dapetid="";
                $dapetnomor="";
                $gettipekamar = $CI->db->query('select id_tipe_kamar from tipe_kamar where nama_kamar="'.$nama_kamar.'"');
                // $tipekamar = $gettipekamar->result_array();
                foreach ($gettipekamar->result() as $row){
                    $dapetid = $row->id_tipe_kamar;
                    break;
                }

                $getnomorkamar =$CI->db->query('select nomor_kamar from kamar where id_tipe_kamar='.$dapetid.' and status = "kosong"');
                // $nomorkamar=$getnomorkamar->result_array();
                foreach ($getnomorkamar->result() as $row){
                    $dapetnomor = $row->nomor_kamar;
                    break;
                }

                $datetidtrans="";
                $getidtrans = $CI->db->query('SELECT * FROM booking ORDER BY id_booking DESC LIMIT 1');
                foreach ($getidtrans->result() as $cari) {
                    $datetidtrans = $cari->id_booking;
                    break;
                }
                $idtransbaru = $datetidtrans+1;
                // echo $idtransbaru;
            ?>

            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" method="post" class="f1" action="<?php echo base_url()?>index.php/Dashboard/insertOnsite">
              <div class="box-body">
                <div class="form-group">
                  <label for="nama_tamu">Nama Lengkap</label>
                  <input type="text" class="form-control" id="nama" name="nama" required placeholder="Nama Lengkap">
                </div>
                <div class="form-group">
                  <label for="alamat_tamu">Alamat</label>
                  <input type="text" class="form-control" id="alamat" name="alamat" required placeholder="Alamat">
                </div>
                <div class="form-group">
                  <label for="id_tamu">ID Identitas</label>
                  <input type="text" class="form-control" id="id_tamu" name="id_tamu" required placeholder="ID Identitas">
                </div>
                <div class="form-group">
                  <label for="no_hp">Nomor HP</label>
                  <input type="text" class="form-control" id="no_hp" name="no_hp" required placeholder="Nomor HP">
                </div>
                <div class="form-group">
                  <div class="radio">
                    <label>
                      <input type="radio" onclick="javascript:yesnoCheck();" name="optionsRadios" id="optionsRadios1" value="option1">
                      Tunai
                      <input type="hidden" name="metode_bayar" value="Tunai">
                    </label>
                  </div>
                  <div class="radio">
                    <label>
                      <input type="radio" onclick="javascript:yesCheck();" name="optionsRadios" id="optionsRadios2" value="option2">
                      Debit
                      <input type="hidden" name="metode_bayar" value="Debit">
                    </label>
                  </div>
                  <div id="debit" style="visibility:hidden" class="form-group">
                  <label for="no_kartu">Nomor Kartu Debit Anda</label>
                  <input type="text" class="form-control" id="no_kartu" name="no_kartu" placeholder="Masukkan Nomor Kartu Debit Anda">
                </div>
                </div>
                <input type="hidden" name="tgl_input" value="<?php echo date('Y-m-d') ?>">
                  <input type="hidden" name="tgl_masuk" value="<?php echo date('Y-m-d', strtotime($tglIn)); ?>">
                  <input type="hidden" name="tgl_keluar" value="<?php echo date('Y-m-d', strtotime($tglOut)); ?>">
                  <input type="hidden" name="jumlah_kamar" value="<?php echo $kamar; ?>">
                  <input type="hidden" name="jumlah_malam" value="<?php echo $jumlahmalamnya; ?>">
                  <input type="hidden" name="harga" value="<?php echo $harganya; ?>">
                  <input type="hidden" name="dp" value="0">
                  <input type="hidden" name="total" value="<?php echo $total; ?>">
                  <input type="hidden" name="status" value="Check In">
                  <input type="hidden" name="ket" value=" Lunas">
                  <input type="hidden" name="nomor_kamar" value="<?php echo $dapetnomor; ?>">
                  <input type="hidden" name="tipe_kamar" value="<?php echo $tipe_kamar; ?>">
                  <input type="hidden" name="harga_kamar" value="<?php echo $harga_kamar; ?>">
                  <input type="hidden" id="id_transaksi" name="id_transaksi" value="<?php echo $idtransbaru; ?>">
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Simpan</button>
              </div>
            </form>
          </div>
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

    //Date picker
    $('#datepicker').datepicker({
      autoclose: true
    });

    //Date picker
    $('#datepicker1').datepicker({
      autoclose: true
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

function yesnoCheck() {
    if (document.getElementById('optionsRadios1').checked) {
        document.getElementById('debit').style.visibility = 'hidden';
    } else {
        document.getElementById('debit').style.visibility = 'visible';
    }
}

function yesCheck() {
    if (document.getElementById('optionsRadios2').checked) {
        document.getElementById('debit').style.visibility = 'visible';
    } else {
        document.getElementById('debit').style.visibility = 'hidden';
    }
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
