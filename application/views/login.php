<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Sign-Up/Login Form</title>
  <link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,300,600' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">


    <!-- This is what you need -->
    <script src="dist/sweetalert-dev.js"></script>
    <link rel="stylesheet" href="<?php echo base_url()?>sweetalert/dist/sweetalert.css">

    <script src="<?php echo base_url()?>sweetalert/dist/sweetalert.min.js"></script>
<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>sweetalert/dist/sweetalert.css">

<link href="<?php echo base_url()?>alert/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url()?>alert/css/sb-admin-2.css" rel="stylesheet">
    <link href="<?php echo base_url()?>alert/css/plugins/morris.css" rel="stylesheet">

      <link rel="stylesheet" href="<?php echo base_url()?>uilogin/css/style.css">
      <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>sweetalert/dist/sweetalert.css">


</head>

<body>
</div>
  <div class="form">

      <ul class="tab-group">
        <li class="tab active"><a href="#signup">Sign Up</a></li>
        <li class="tab"><a href="#login">Log In</a></li>
      </ul>

      <div class="tab-content">
        <div id="signup">
          <h1>Registrasi</h1>

          <form action="<?php echo base_url()?>index.php/Dashboard/cekUser" method="post">

          <!-- Data Cookie -->
                  <input type="hidden" name="tglIn" value="<?php echo date('Y-m-d', strtotime($tglIn)); ?>">
                  <input type="hidden" name="tglOut" value="<?php echo date('Y-m-d', strtotime($tglOut)); ?>">
                  <input type="hidden" name="kamar" value="<?php echo $kamar; ?>">
                  <input type="hidden" name="nama_kamar" value="<?php echo $nama_kamar; ?>">
                  <input type="hidden" name="harga_kamar_weekday" value="<?php echo $harga_kamar_weekday; ?>">
                  <input type="hidden" name="harga_kamar_weekend" value="<?php echo $harga_kamar_weekend; ?>">
          <!-- Data Cookie -->

              <input type="hidden"required autocomplete="off" name="id_user"/>

          <div class="top-row">
            <div class="field-wrap">
              <label>
                Nama Lengkap<span class="req">*</span>
              </label>
              <input type="text" required autocomplete="off" name="nama"/>
            </div>

            <div class="field-wrap">
              <label>
                Username<span class="req">*</span>
              </label>
              <input type="text"required autocomplete="off" name="username"/>
            </div>
          </div>

          <div class="field-wrap">
            <label>
              Set A Password<span class="req">*</span>
            </label>
            <input type="password"required autocomplete="off" name="password"/>
          </div>

          <div class="field-wrap">
            <select name="jenis_kelamin" id="jenis_kelamin" required class="form-control">
                                    <option value="">--Pilih Jenis Kelamin--</option>
                                    <option value="Laki-Laki">Laki-Laki</option>
                                    <option value="Perempuan">Perempuan</option>
                                </select>
          </div>

          <div class="field-wrap">
            <label>
              Alamat<span class="req">*</span>
            </label>
            <input type="text" required autocomplete="off" name="alamat"/>
          </div>

          <div class="field-wrap">
            <label>
              No Handphone<span class="req">*</span>
            </label>
            <input type="text" pattern="[0-9]+" required autocomplete="off" name="phone"/>
          </div>

          <button type="submit" class="button button-block"/>Get Started</button>

          </form>

        </div>

        <div id="login">
          <h1>Welcome Back!</h1>

          <form action="<?php echo base_url()?>index.php/Dashboard/loginAdmin" method="post">

          <!-- Data Cookie -->
                  <input type="hidden" name="tglIn" value="<?php echo date('Y-m-d', strtotime($tglIn)); ?>">
                  <input type="hidden" name="tglOut" value="<?php echo date('Y-m-d', strtotime($tglOut)); ?>">
                  <input type="hidden" name="kamar" value="<?php echo $kamar; ?>">
                  <input type="hidden" name="nama_kamar" value="<?php echo $nama_kamar; ?>">
                  <input type="hidden" name="harga_kamar_weekday" value="<?php echo $harga_kamar_weekday; ?>">
                  <input type="hidden" name="harga_kamar_weekend" value="<?php echo $harga_kamar_weekend; ?>">
          <!-- Data Cookie -->

            <div class="field-wrap">
            <label>
              Username<span class="req">*</span>
            </label>
            <input type="text"required autocomplete="off" name="username"/>
            </div>

          <div class="field-wrap">
            <label>
              Password<span class="req">*</span>
            </label>
            <input type="password"required autocomplete="off" name="password"/>
          </div>

          <!-- <p class="forgot"><a href="#">Forgot Password?</a></p> -->

          <button type="submit" class="button button-block" onclick="save()"/>Log In</button>

          </form>

        </div>

      </div><!-- tab-content -->

</div> <!-- /form -->
<div class="form">
    <form action="<?php echo base_url()?>" method="post">
        <button type="submit" class="button button-block"/>Back to Home</button>
    </form>
</div> <!-- /form -->
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

<!-- //session untuk menampilkan pesan error ketika username / pass salah -->
<?php
    if (isset($_SESSION['error'])) {
?>
    <body onload='swal({title: "Login Gagal!",
                        text: "Silakan coba lagi",
                        // timer: 3000,
                        type: "error",
                        showConfirmButton: true });'>
                        <!-- sweetAlert("Oops...", "Something went wrong!", "error"); -->
<?php
    unset($_SESSION['error']);
    }
?>

<!-- //session untuk menampilkan pesan error ketika username pelanggan double-->
<?php
    if (isset($_SESSION['adaadmin'])) {
?>
    <body onload='swal({title: "Username Sudah Digunakan",
                        text: "Silakan coba lagi",
                        // timer: 3000,
                        type: "error",
                        showConfirmButton: true });'>
                        <!-- sweetAlert("Oops...", "Something went wrong!", "error"); -->
<?php
    unset($_SESSION['adaadmin']);
    }
?>

<!-- //session untuk menampilkan pesan error ketika email pelanggan double-->
<?php
    if (isset($_SESSION['adaphone'])) {
?>
    <body onload='swal({title: "Nomor HP Sudah Digunakan",
                        text: "Silakan coba lagi",
                        // timer: 3000,
                        type: "error",
                        showConfirmButton: true });'>
                        <!-- sweetAlert("Oops...", "Something went wrong!", "error"); -->
<?php
    unset($_SESSION['adaphone']);
    }
?>

<!-- //session untuk menampilkan pesan ketika Sukses Input-->
<?php
    if (isset($_SESSION['suksesinput'])) {
?>
    <body onload='swal({title: "Sukses Input Data",
                        text: "Selamat! Akun anda berhasil didaftarkan.",
                        // timer: 3000,
                        type: "success",
                        showConfirmButton: true });'>
                        <!-- sweetAlert("Oops...", "Something went wrong!", "error"); -->
<?php
    unset($_SESSION['suksesinput']);
    }
?>

<script src="<?php echo base_url()?>sweetalert/dist/sweetalert.min.js"></script>

    <script src="<?php echo base_url()?>uilogin/js/index.js"></script>
    <script src="<?php echo base_url()?>alert/js/jquery-1.11.0.js"></script>
    <script src="<?php echo base_url()?>alert/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url()?>alert/js/sb-admin-2.js"></script>

    <script>
function tampil(){
    swal({
      title: "Error!",
      text: "Here's my error message!",
      type: "error",
      confirmButtonText: "Cool"
    });
}

document.querySelector('button.download').onclick = function(){
	$("html, body").animate({ scrollTop: $("#download-section").offset().top }, 1000);
};

document.querySelector('.showcase.normal button').onclick = function(){
	alert("Oops... Something went wrong!");
};

document.querySelector('.showcase.sweet button').onclick = function(){
	swal("Oops...", "Something went wrong!", "error");
};

document.querySelector('ul.examples li.message button').onclick = function(){
	swal("Here's a message!");
};

document.querySelector('ul.examples li.timer button').onclick = function(){
	swal({
		title: "Auto close alert!",
		text: "I will close in 2 seconds.",
		timer: 2000,
		showConfirmButton: false
	});
};

document.querySelector('ul.examples li.title-text button').onclick = function(){
	swal("Here's a message!", "It's pretty, isn't it?");
};

document.querySelector('ul.examples li.success button').onclick = function(){
	swal("Good job!", "You clicked the button!", "success");
};

document.querySelector('ul.examples li.warning.confirm button').onclick = function(){
	swal({
		title: "Are you sure?",
		text: "You will not be able to recover this imaginary file!",
		type: "warning",
		showCancelButton: true,
		confirmButtonColor: '#DD6B55',
		confirmButtonText: 'Yes, delete it!',
		closeOnConfirm: false
	},
	function(){
		swal("Deleted!", "Your imaginary file has been deleted!", "success");
	});
};

document.querySelector('ul.examples li.warning.cancel button').onclick = function(){
	swal({
		title: "Are you sure?",
		text: "You will not be able to recover this imaginary file!",
		type: "warning",
		showCancelButton: true,
		confirmButtonColor: '#DD6B55',
		confirmButtonText: 'Yes, delete it!',
		cancelButtonText: "No, cancel plx!",
		closeOnConfirm: false,
		closeOnCancel: false
	},
	function(isConfirm){
    if (isConfirm){
      swal("Deleted!", "Your imaginary file has been deleted!", "success");
    } else {
      swal("Cancelled", "Your imaginary file is safe :)", "error");
    }
	});
};

document.querySelector('ul.examples li.custom-icon button').onclick = function(){
	swal({
		title: "Sweet!",
		text: "Here's a custom image.",
		imageUrl: 'example/images/thumbs-up.jpg'
	});
};

document.querySelector('ul.examples li.message-html button').onclick = function(){
	swal({
		title: "HTML <small>Title</small>!",
		text: 'A custom <span style="color:#F8BB86">html</span> message.',
		html: true
	});
};

document.querySelector('ul.examples li.input button').onclick = function(){
	swal({
		title: "An input!",
		text: 'Write something interesting:',
		type: 'input',
		showCancelButton: true,
		closeOnConfirm: false,
		animation: "slide-from-top",
		inputPlaceholder: "Write something",
	},
	function(inputValue){
		if (inputValue === false) return false;

		if (inputValue === "") {
			swal.showInputError("You need to write something!");
			return false;
		}

		swal("Nice!", 'You wrote: ' + inputValue, "success");

	});
};

document.querySelector('ul.examples li.theme button').onclick = function() {
	swal({
		title: "Themes!",
		text: "Here's the Twitter theme for SweetAlert!",
		confirmButtonText: "Cool!",
		customClass: 'twitter'
	});
};

document.querySelector('ul.examples li.ajax button').onclick = function() {
  swal({
    title: 'Ajax request example',
    text: 'Submit to run ajax request',
    type: 'info',
    showCancelButton: true,
    closeOnConfirm: false,
    showLoaderOnConfirm: true,
  }, function(){
    setTimeout(function() {
      swal('Ajax request finished!');
    }, 2000);
  });
};

function save()
{
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
                swal({
                  title: "Error!",
                  text: "Here's my error message!",
                  type: "error",
                  confirmButtonText: "Cool"
                });
            }

            },
    });
}

</script>

</body>
</html>
