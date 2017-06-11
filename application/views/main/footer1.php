<!--footer start here-->
<div class="footer">
	<div class="container">
		<div class="footer-main">
			<div class="col-md-3 ftr-grid wow zoomIn" data-wow-delay="0.3s">
				<div class="ftr-logo">
				<img src="<?php echo base_url(); ?>assets/images/Ch2.png"  alt="">
				</div>
				<p>Dekat halte bus, hotel ini berjarak 6 km dari pusat perbelanjaan di Jalan Braga, 3.4 km dari batu dan fosil di Museum Geologi dan 2.9 km dari kebun binatang Bandung.</p>
				<a href="<?php echo base_url(); ?>/single.html" class="ftr-btn">Read More</a>
			</div>
			<div class="col-md-3 ftr-grid ftr-mid wow zoomIn" data-wow-delay="0.3s">
				 <h3>Address</h3>
				 <span class="ftr-line flm"> </span>
				<p>Cihampelas Hotel 2</p>
				<p>Jl. Cihampelas No.222 </p>
				<p>Bandung 40131 West Java,Indonesia </p>
				<p>phone    : +62 22 2039 555 <br> 
                   Whats App: +62 818 207 606, <br> +62 812 2000 832 <br>
                   BBM      : D579B74A <br>
                   Fax      : +62.22.2032998</p>

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
<!-- Javascript -->
        <script src="<?php echo base_url()?>wizard/js/jquery-1.11.1.min.js"></script>
        <script src="<?php echo base_url()?>wizard/bootstrap/js/bootstrap.min.js"></script>
        <script src="<?php echo base_url()?>wizard/js/jquery.backstretch.min.js"></script>
        <script src="<?php echo base_url()?>wizard/js/retina-1.1.0.min.js"></script>
        <script src="<?php echo base_url()?>wizard/js/scripts.js"></script>

        <!--[if lt IE 10]>
            <script src="assets/js/placeholder.js"></script>
        <![endif]-->

<script type="text/javascript">

Dropzone.autoDiscover = false;
var id_transaksi = $("#id_transaksi").val();
var foto_upload= new Dropzone(".dropzone",{
url: "<?php echo base_url() ?>index.php/upload/proses_upload/"+id_transaksi,
// url: "<?php echo base_url() ?>index.php/upload/proses_upload",
maxFilesize: 2,
method:"post",
acceptedFiles:"image/*",
paramName:"userfile",
dictInvalidFileType:"Type file ini tidak dizinkan",
addRemoveLinks:true,
});


//Event ketika Memulai mengupload
foto_upload.on("sending",function(a,b,c){
	a.token=Math.random();
	c.append("token_foto",a.token); //Menmpersiapkan token untuk masing masing foto
});


//Event ketika foto dihapus
foto_upload.on("removedfile",function(a){
	var token=a.token;
	$.ajax({
		type:"post",
		data:{token:token},
		url:"<?php echo base_url('index.php/upload/remove_foto') ?>",
		cache:false,
		dataType: 'json',
		success: function(){
			console.log("Foto terhapus");
		},
		error: function(){
			console.log("Error");

		}
	});
});


</script>

    </body>

</html>
