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
            <li><a href="<?php echo base_url()?>index.php/dashboard/formcheckout"><i class="fa fa-credit-card"></i> Form Check Out</a></li>
            <li class="active"><a href="<?php echo base_url()?>index.php/dashboard/datacheckout"><i class="fa fa-list-ul"></i> Data Check Out</a></li>
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
        Data Check Out Kamar
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Check Out</a></li>
        <li class="active">Data Check Out Kamar</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">


          <div class="box">
              <!-- <div class="box-header">
              <button class="btn btn-xs btn-success" onclick="add_checkout()"><i class="glyphicon glyphicon-plus"></i></button>
              <button class="btn btn-xs btn-warning" onclick="reload_table()"><i class="glyphicon glyphicon-refresh"></i></button>
          </div> -->
            <!-- /.box-header -->
            <div class="box-body">
              <table id="table" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>No</th>
                  <th>ID Booking</th>
                  <th>Data Input</th>
                  <th>Nama</th>
                  <th>Tipe Kamar</th>
                  <th>Nomor HP</th>
                  <th>Alamat</th>
                  <th>Check In</th>
                  <th>Check Out</th>
                  <th>Status</th>
                  <th>Nomor Kartu</th>
                  <th>Keterangan</th>
                  <!-- <th>Aksi</th> -->
                </tr>
                </thead>
                <tbody>
                <!-- <tr>
                  <td>1</td>
                  <td>1</td>
                  <td>PSP</td>
                  <td>-</td>
                  <td>C</td>
                  <td>C</td>
                  <td>C</td>
                  <td>C</td>
                  <td>C</td>
                  <td><a class="btn btn-xs btn-primary" href="javascript:void(0)" title="Edit" onclick="#"><i class="glyphicon glyphicon-pencil"></i> Edit</a>
          </td>
                </tr>
                <tr>
                  <td>1</td>
                  <td>1</td>
                  <td>-</td>
                  <td>-</td>
                  <td>U</td>
                  <td>C</td>
                  <td>C</td>
                  <td>C</td>
                  <td>C</td>
                  <td><a class="btn btn-xs btn-primary" href="javascript:void(0)" title="Edit" onclick="#"><i class="glyphicon glyphicon-pencil"></i> Edit</a>
          </td>
                </tr> -->
                </tbody>
                <tfoot>
                <tr>
                  <th>No</th>
                  <th>ID Booking</th>
                  <th>Data Input</th>
                  <th>Nama</th>
                  <th>Tipe Kamar</th>
                  <th>Nomor HP</th>
                  <th>Alamat</th>
                  <th>Check In</th>
                  <th>Check Out</th>
                  <th>Status</th>
                  <th>Nomor Kartu</th>
                  <th>Keterangan</th>
                  <!-- <th>Aksi</th> -->
                </tr>
                </tfoot>
              </table>
              <!-- <div class="col-md-4 swimming-grid">
                  <button type="button" class="btn btn-success">Kirim</button>
              </div> -->
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
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
            "url": "<?php echo site_url('Mastercheckout/ajax_list')?>",
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


});



function add_checkout()
{
    save_method = 'add';
    $('#form')[0].reset(); // reset form on modals
    $('.form-group').removeClass('has-error'); // clear error class
    $('.help-block').empty(); // clear error string
    $('#modal_form').modal('show'); // show bootstrap modal
    $('.modal-title').text('Tambah checkout'); // Set Title to Bootstrap modal title
}

function edit_checkout(id)
{
    save_method = 'update';
    $('#form')[0].reset(); // reset form on modals
    $('.form-group').removeClass('has-error'); // clear error class
    $('.help-block').empty(); // clear error string

    //Ajax Load data from ajax
    $.ajax({
        url : "<?php echo site_url('Mastercheckout/ajax_edit/')?>/" + id,
        type: "GET",
        dataType: "JSON",
        success: function(data)
        {
            $('[name="id_booking"]').val(data.id_booking);
            $('[name="tgl_input"]').val(data.tgl_input);
            $('[name="nama"]').val(data.nama);
            $('[name="alamat"]').val(data.alamat);
            $('[name="no_hp"]').val(data.no_hp);
            $('[name="tgl_masuk"]').val(data.tgl_masuk);
            $('[name="tgl_keluar"]').val(data.tgl_keluar);
            $('[name="tipe_kamar"]').val(data.tipe_kamar);
            $('[name="jumlah_kamar"]').val(data.jumlah_kamar);
            $('[name="metode_bayar"]').val(data.metode_bayar);
            $('[name="harga"]').val(data.harga);
            $('[name="dp"]').val(data.dp);
            $('[name="total"]').val(data.total);
            $('[name="no_kartu"]').val(data.no_kartu);
            $('[name="status"]').val(data.status);
            $('[name="ket"]').val(data.ket);
            $('#modal_form').modal('show'); // show bootstrap modal when complete loaded
            $('.modal-title').text('Edit checkout'); // Set title to Bootstrap modal title

        },
        error: function (jqXHR, textStatus, errorThrown)
        {
            alert('Error get data from ajax');
        }
    });
}

function detail_checkout(id)
{
    save_method = 'detail';
    $('#form1')[0].reset(); // reset form on modals
    $('.form-group').removeClass('has-error'); // clear error class
    $('.help-block').empty(); // clear error string

    //Ajax Load data from ajax
    $.ajax({
        url : "<?php echo site_url('Mastercheckout/ajax_detail/')?>/" + id,
        type: "GET",
        dataType: "JSON",
        success: function(data)
        {
            $('[name="id_booking"]').val(data.id_booking);
            $('[name="tgl_input"]').val(data.tgl_input);
            $('[name="nama"]').val(data.nama);
            $('[name="alamat"]').val(data.alamat);
            $('[name="no_hp"]').val(data.no_hp);
            $('[name="tgl_masuk"]').val(data.tgl_masuk);
            $('[name="tgl_keluar"]').val(data.tgl_keluar);
            $('[name="tipe_kamar"]').val(data.tipe_kamar);
            $('[name="jumlah_kamar"]').val(data.jumlah_kamar);
            $('[name="metode_bayar"]').val(data.metode_bayar);
            $('[name="harga"]').val(data.harga);
            $('[name="dp"]').val(data.dp);
            $('[name="total"]').val(data.total);
            $('[name="no_kartu"]').val(data.no_kartu);
            $('[name="status"]').val(data.status);
            $('[name="ket"]').val(data.ket);
            $('#modal_form1').modal('show'); // show bootstrap modal when complete loaded
            $('.modal-title').text('Detail checkout'); // Set title to Bootstrap modal title

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
        url = "<?php echo site_url('Mastercheckout/ajax_add')?>";
    } else {
        url = "<?php echo site_url('Mastercheckout/ajax_update')?>";
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

function delete_checkout(id)
{
    if(confirm('Are you sure delete this data?'))
    {
        // ajax delete data to database
        $.ajax({
            url : "<?php echo site_url('Mastercheckout/ajax_delete')?>/"+id,
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

</script>
<!-- <div></div> -->
<!-- Detail  checkout Modal-->
<div class="modal fade" id="modal_form1" role="dialog">
    <div class="modal-dialog modal-success">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h3 class="modal-title">Form Kelola Kamar</h3>
            </div>
            <div class="modal-body form1">
                <form action="#" id="form1" class="form-horizontal">
                    <input type="hidden" value="" name="id_booking"/>
                    <div class="form-body">
                        <div class="form-group">
                            <label class="control-label col-md-3">Tanggal Masuk</label>
                            <div class="col-md-9">
                                <input disabled name="tgl_input" required="" placeholder="Tanggal Masuk" class="form-control" type="date">
                                <span class="help-block"></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Nama Tamu</label>
                            <div class="col-md-9">
                                <input disabled name="nama" placeholder="Nama Tamu" class="form-control" type="text">
                                <span class="help-block"></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Alamat Tamu</label>
                            <div class="col-md-9">
                                <input disabled name="alamat" placeholder="Alamat Tamu" class="form-control" type="text">
                                <span class="help-block"></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Nomor HP</label>
                            <div class="col-md-9">
                                <input disabled name="no_hp" placeholder="Nomor HP" class="form-control" type="text">
                                <span class="help-block"></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Tanggal Masuk</label>
                            <div class="col-md-9">
                                <input disabled name="tgl_masuk" placeholder="Tanggal Masuk" class="form-control" type="date">
                                <span class="help-block"></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Tanggal Keluar</label>
                            <div class="col-md-9">
                                <input disabled name="tgl_keluar" placeholder="Tanggal Keluar" class="form-control" type="date">
                                <span class="help-block"></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Tipe Kamar</label>
                            <div class="col-md-9">
                                <input disabled name="tipe_kamar" placeholder="Tipe Kamar" class="form-control" type="text">
                                <span class="help-block"></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Jumlah Kamar </label>
                            <div class="col-md-9">
                                <input disabled name="jumlah_kamar" placeholder="Jumlah Kamar " class="form-control" type="text">
                                <span class="help-block"></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Metode Bayar </label>
                            <div class="col-md-9">
                                <input disabled name="metode_bayar" placeholder="Metode Bayar " class="form-control" type="text">
                                <span class="help-block"></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Harga Kamar </label>
                            <div class="col-md-9">
                                <input disabled name="harga" placeholder="Harga Kamar " class="form-control" type="text">
                                <span class="help-block"></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">DP Kamar </label>
                            <div class="col-md-9">
                                <input disabled name="dp" placeholder="DP Kamar " class="form-control" type="text">
                                <span class="help-block"></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Harga Total </label>
                            <div class="col-md-9">
                                <input disabled name="total" placeholder="Harga Total " class="form-control" type="text">
                                <span class="help-block"></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Nomor Kartu </label>
                            <div class="col-md-9">
                                <input disabled name="no_kartu" placeholder="Nomor Kartu " class="form-control" type="text">
                                <span class="help-block"></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Status</label>
                            <div class="col-md-9">
                                <input disabled name="status" placeholder="Status" class="form-control" type="text">
                                <span class="help-block"></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Keterangan Kamar </label>
                            <div class="col-md-9">
                                <input disabled name="ket" placeholder="Keterangan Kamar " class="form-control" type="text">
                                <span class="help-block"></span>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->


<!-- Bootstrap modal -->
<div class="modal fade" id="modal_form" role="dialog">
    <div class="modal-dialog modal-info">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h3 class="modal-title">Form Kelola Kamar</h3>
            </div>
            <div class="modal-body form">
                <form action="#" id="form" class="form-horizontal">
                    <input type="hidden" value="" name="id_booking"/>
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
                                <input name="nama" placeholder="Nama Tamu" class="form-control" type="text">
                                <span class="help-block"></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Alamat Tamu</label>
                            <div class="col-md-9">
                                <input name="alamat" placeholder="Alamat Tamu" class="form-control" type="text">
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
                            <label class="control-label col-md-3">Jumlah Kamar </label>
                            <div class="col-md-9">
                                <input name="jumlah_kamar" placeholder="Jumlah Kamar " class="form-control" type="text">
                                <span class="help-block"></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Metode Bayar </label>
                            <div class="col-md-9">
                                <input name="metode_bayar" placeholder="Metode Bayar " class="form-control" type="text">
                                <span class="help-block"></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Harga Kamar </label>
                            <div class="col-md-9">
                                <input name="harga" placeholder="Harga Kamar " class="form-control" type="text">
                                <span class="help-block"></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">DP Kamar </label>
                            <div class="col-md-9">
                                <input name="dp" placeholder="DP Kamar " class="form-control" type="text">
                                <span class="help-block"></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Harga Total </label>
                            <div class="col-md-9">
                                <input name="total" placeholder="Harga Total " class="form-control" type="text">
                                <span class="help-block"></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Nomor Kartu </label>
                            <div class="col-md-9">
                                <input name="no_kartu" placeholder="Nomor Kartu " class="form-control" type="text">
                                <span class="help-block"></span>
                            </div>
                        </div>
                        <!-- <div class="form-group">
                            <label class="control-label col-md-3">Status</label>
                            <div class="col-md-9">
                                <input name="status" placeholder="Status" class="form-control" type="text">
                                <span class="help-block"></span>
                            </div>
                        </div> -->
                        <div class="form-group">
                            <label class="control-label col-md-3">Status</label>
                            <div class="col-md-9">
                            <select name="status" id="status" class="form-control">
                              <option value="Booking">Booking</option>
                              <option value="Check In">Check In</option>
                              <option value="Check Out">Check Out</option>
                            </select>
                          </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Keterangan Kamar </label>
                            <div class="col-md-9">
                                <input name="ket" placeholder="Keterangan Kamar " class="form-control" type="text">
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
