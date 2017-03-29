<!--footer start here-->
<div class="footer">
	<div class="container">
		<div class="footer-main">
			<div class="col-md-3 ftr-grid wow zoomIn" data-wow-delay="0.3s">
				<div class="ftr-logo">
				<img src="<?php echo base_url(); ?>assets/images/ftr-logo.png"  alt="">
				</div>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
				<a href="<?php echo base_url(); ?>/single.html" class="ftr-btn">Read More</a>
			</div>
			<div class="col-md-3 ftr-grid ftr-mid wow zoomIn" data-wow-delay="0.3s">
				 <h3>Address</h3>
				 <span class="ftr-line flm"> </span>
				<p>Cihampelas</p>
				<p>5875 Bandung </p>
				<p>Jawa Barat 23226 </p>
				<p>(804) 287-4216 </p>
				<p>Ajeng Puspitasari</p>

			</div>
			<div class="col-md-3 ftr-grid ftr-rit wow zoomIn" data-wow-delay="0.3s">
				 <h3>Contact Us</h3>
				 <form>
				 	<input type="text" value="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}">
				 	<input type="submit" value="Send" />
				 </form>
				  <ul class="ftr-icons">
				 	<li><a href="<?php echo base_url(); ?>#"><span class="fa"> </span></a></li>
				 	<li><a href="<?php echo base_url(); ?>#"><span class="tw"> </span></a></li>
				 	<li><a href="<?php echo base_url(); ?>#"><span class="link"> </span></a></li>
				 	<li><a href="<?php echo base_url(); ?>#"><span class="gmail"> </span></a></li>
				 </ul>
			</div>
			<div class="col-md-3 ftr-grid ftr-last-gd ftr-rit wow zoomIn" data-wow-delay="0.3s">
				 <h3>Quick Link</h3>
				  <ul class="ftr-nav">
				 	<li><a href="<?php echo base_url(); ?>">Home</a></li>
				 	<li><a href="<?php echo base_url(); ?>fasilities">Fasilities</a></li>
				 	<li><a href="<?php echo base_url(); ?>rooms">Rooms </a></li>
				 	<li><a href="<?php echo base_url(); ?>contact">Contact</a></li>
				 </ul>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
</div>
<!--footer end here-->
<!--copy rights start here-->
<div class="copy-right">
	<div class="container">
		 <div class="copy-rights-main wow zoomIn" data-wow-delay="0.3s">
    	    <p>© 2016 Cihampelas 2 Hotel Bandung | Design by  <a href="http://w3layouts.com/" target="_blank">W3layouts</a> </p>
    	 </div>
    </div>
</div>
<script src="<?php echo base_url()?>assets/js/jquery-3.2.0.min.js"></script>
        <script src="<?php echo base_url()?>assets/bootstrap/js/bootstrap.js"></script>
        <script src="<?php echo base_url()?>assets/datepicker/js/bootstrap-datepicker.js"></script>
        <script type="text/javascript">
            $(document).ready(function () {
                $('.tanggal').datepicker({
                    format: "dd-mm-yyyy",
                    autoclose:true
                });
            });
        </script>
<!-- InputMask -->
<script src="<?php echo base_url()?>plugins/input-mask/jquery.inputmask.js"></script>
<script src="<?php echo base_url()?>plugins/input-mask/jquery.inputmask.date.extensions.js"></script>
<script src="<?php echo base_url()?>plugins/input-mask/jquery.inputmask.extensions.js"></script>
<!-- date-range-picker -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js"></script>
<script src="<?php echo base_url()?>plugins/daterangepicker/daterangepicker.js"></script>
<!-- bootstrap datepicker -->
<script src="<?php echo base_url()?>plugins/datepicker/bootstrap-datepicker.js"></script>
<!-- bootstrap color picker -->
<script src="<?php echo base_url()?>plugins/colorpicker/bootstrap-colorpicker.min.js"></script>
<!-- bootstrap time picker -->
<script src="<?php echo base_url()?>plugins/timepicker/bootstrap-timepicker.min.js"></script>
<!-- SlimScroll 1.3.0 -->
<script src="<?php echo base_url()?>plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- iCheck 1.0.1 -->
<script src="<?php echo base_url()?>plugins/iCheck/icheck.min.js"></script>
<!-- FastClick -->
<script src="../../plugins/fastclick/fastclick.js"></script>
<script>
  $(function () {
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
</script>
</body>
</html>
