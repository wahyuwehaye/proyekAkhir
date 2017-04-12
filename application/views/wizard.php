<!--features strat here-->
<div class="features">
	<div class="container">
		<div class="features-main">
			<div class="features-bottom wow slideInRight" data-wow-delay="0.3s">
				<div class="col-md-12 featur-grid">
					<h4>Data Pemesanan</h4>
					<ul>
						<li>Tanggal Check In <a href="#"><?php echo $tglIn; ?></a></li>
						<li>Tanggal Check Out <a href="#"><?php echo $tglOut; ?></a></li>
						<li>Jumlah Kamar <a href="#"><?php echo $kamar; ?></a></li>
						<li>Tipe Kamar <a href="#"><?php echo $nama_kamar; ?></a></li>
                        <li>Harga Kamar <a href="#"><?php echo $harga_kamar_weekend; ?></a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>

<!--features end here-->
<!-- Top content -->
        <div class="top-content">
            <div class="container">

                <div class="row">
                    <div class="col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2 col-lg-6 col-lg-offset-3 form-box">
                    	<form role="form" method="post" class="f1" action="<?php echo base_url()?>index.php/Dashboard/insertBook">

                    		<h3>Pemesanan Hotel Cihampelas 2</h3>
                    		<div class="f1-steps">
                    			<div class="f1-progress">
                    			    <div class="f1-progress-line" data-now-value="16.66" data-number-of-steps="3" style="width: 16.66%;"></div>
                    			</div>
                    			<div class="f1-step active">
                    				<div class="f1-step-icon"><i class="fa fa-user"></i></div>
                    				<p>Form Pemesanan</p>
                    			</div>
                    			<div class="f1-step">
                    				<div class="f1-step-icon"><i class="fa fa-credit-card"></i></div>
                    				<p>Pembayaran</p>
                    			</div>
                    		    <div class="f1-step">
                    				<div class="f1-step-icon"><i class="fa fa-check-square"></i></div>
                    				<p>Konfirmasi Pembayaran</p>
                    			</div>
                                <div class="f1-step">
                    				<div class="f1-step-icon"><i class="fa fa-list"></i></div>
                    				<p>Data Pemesanan</p>
                    			</div>
                    		</div>
                            <?php foreach($tamu->result_array() as $row) { ?>
                    		<fieldset>
                    		    <h4>Rincian Data Pemesanan</h4>
                    			<div class="form-group">
                    			    <label class="sr-only" for="f1-first-name">Nama Lengkap</label>
                                    <input type="text" name="nama_tamu" placeholder="Nama Lengkap" value="<?php echo $row['nama'];?>" class="f1-first-name form-control" id="nama_tamu">
                                </div>
                                <div class="form-group">
                                    <label class="sr-only" for="f1-last-name">Alamat</label>
                                    <input type="text" name="alamat_tamu" placeholder="Alamat" value="<?php echo $row['alamat'];?>" class="f1-last-name form-control" id="alamat_tamu">
                                </div>
                                <div class="form-group">
                                    <label class="sr-only" for="f1-about-yourself">ID Identitas</label>
                                    <input type="text" name="id_user" placeholder="ID Identitas" value="<?php echo $row['id_user'];?>" class="f1-last-name form-control" id="id_user">
                                </div>
                                <div class="form-group">
                                    <label class="sr-only" for="f1-about-yourself">Nomor Telepon</label>
                                    <input type="text" name="no_hp" placeholder="Nomor Telepon" value="<?php echo $row['phone'];?>" class="f1-last-name form-control" id="no_hp">
                                </div>
                                <div class="f1-buttons">
                                    <button type="button" class="btn btn-next">Next</button>
                                </div>
                            </fieldset>
                            <?php }?>
                            <fieldset>
                                <h4>Metode Pembayaran</h4>
                                <div class="form-group">
                    			    <label class="sr-only" for="f1-first-name">DP</label>
                                    <input type="text" name="dp" placeholder="DP" class="f1-first-name form-control" id="dp">
                                </div>
                                <div class="form-group">
                                    <label class="sr-only" for="f1-last-name">Total Bayar</label>
                                    <input type="text" name="total" placeholder="Total Bayar" value="<?php echo $harga_kamar_weekend; ?>" class="f1-last-name form-control" id="total">
                                </div>
                                <h4>Transfer dapat dilakukan melalui Bank berikut :</h4>
                                <input type="radio" name="bayar" value="BCA"/>BCA<br/>
                                <input type="radio" name="bayar" value="BRI"/>BRI<br/>
                                <input type="radio" name="bayar" value="BNI"/>BNI<br/>
                                <input type="radio" name="bayar" value="Mandiri"/>Mandiri<br/>
                                <br/>
                                <div class="f1-buttons">
                                    <button type="button" class="btn btn-previous">Previous</button>
                                    <button type="button" class="btn btn-next">Next</button>
                                </div>
                            </fieldset>

                            <fieldset>
                                <h4>Konfirmasi Pembayaran</h4>
                                <div class="form-group">
                                    <label class="sr-only" for="f1-facebook">Upload</label>
                                    <input type="file" name="f1-facebook" placeholder="Upload" class="f1-facebook form-control" id="f1-facebook">
                                </div>
                                <!-- <button type="button" class="btn btn-block btn-primary btn-sm">Primary</button> -->
                                <div class="f1-buttons">
                                    <button type="button" class="btn btn-previous">Previous</button>
                                    <button type="button" class="btn btn-next">Next</button>
                                </div>
                            </fieldset>

                            <fieldset>
                                <h4>Rincian Data Pemesanan</h4
                                <div class="f1-buttons">
                                    <h5>ID Tamu : <?php echo $row['id_user'];?></h5>
                                    <h5>Nama : <?php echo $row['nama'];?></h5>
                                    <h5>Alamat : <?php echo $row['alamat'];?></h5>
                                    <h5>Nomor Telepon : <?php echo $row['phone'];?></h5>
                                    <h5>Tanggal Masuk : <?php echo $tglIn; ?></h5>
									<input type="hidden" name="tgl_input" value="<?php echo date('Y-m-d') ?>">
									<input type="hidden" name="tgl_masuk" value="<?php echo date('Y-m-d', strtotime($tglIn)); ?>">
									<input type="hidden" name="tgl_keluar" value="<?php echo date('Y-m-d', strtotime($tglOut)); ?>">
									<input type="hidden" name="jumlah_kamar" value="<?php echo $kamar; ?>">
									<input type="hidden" name="tipe_kamar" value="<?php echo $nama_kamar; ?>">
									<input type="hidden" name="harga_kamar" value="<?php echo $harga_kamar_weekend; ?>">
									<input type="hidden" name="status" value="Booking">
                                    <h5>Tanggal Keluar : <?php echo $tglOut; ?></h5>
                                    <h5>Jumlah Kamar : <?php echo $kamar; ?></h5>
                                    <h5>Tipe Kamar : <?php echo $nama_kamar; ?></h5>
                                    <h5>Harga Total : <?php echo $harga_kamar_weekend; ?></h5>
                                    <button type="button" class="btn btn-previous">Previous</button>
                                    <button type="submit" class="btn btn-submit">Submit</button>
                                </div>
                            </fieldset>

                    	</form>
                    </div>
                </div>

            </div>
        </div>
