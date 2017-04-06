<!--banner  start hwew-->
<div class="banner">
	<div class="container">
		<div class="banner-main wow zoomIn" data-wow-delay="0.3s">
			<h2>Cihampelas 2 Hotels</h2>
			<h6>Welcome To Our Hotels</h6>
			<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
		</div>
    </div>
</div>
<!--BANNER END HERE-->
<!--leaves start here-->
<div class="leaves">
	<div class="container">
		<div class="leaves-main wow zoomIn" data-wow-delay="0.3s">
		<form action="<?php echo base_url()?>index.php/main/rooms" method="post" name="inputtgl">
			<h1>Pilih Tanggal</h1>
			<div class="col-md-4 swimming-grid">
				<h4>Tanggal Check In</h4>
				<input type="text" name="tanggalIn" class="tanggal" />
			</div>
			<div class="col-md-4 swimming-grid">
				<h4>Tanggal Check Out</h4>
				<input type="text" name="tanggalOut" class="tanggal"/>
			</div>
			<div class="col-md-4 swimming-grid">
				<h4>Kamar</h4>
				<select name="kamar" id="kamar" class="form-control">
	                                    <option value="">--</option>
	                                    <option value="1">1</option>
	                                    <option value="2">2</option>
										<option value="3">3</option>
	                                    <option value="4">4</option>
										<option value="5">5</option>
	                                    <option value="6">6</option>
										<option value="7">7</option>
	                                    <option value="8">8</option>
	                                </select>
			</div>
			<h1>- - -</h1>
		   <button type="Submit" class="hvr-push btn btn-success btn-lg">Book Now</button>
		</form>
		</div>
	</div>
</div>
<!--leaves end here-->
<!--homegrids start here-->
<div class="home-block">
	<div class="container">
		<div class="home-main">
			<div class="home-top">
				<h3>News Updates</h3>
			</div>
			<div class="home-bottom  wow bounceInLeft" data-wow-delay="0.3s">
				<div class="col-md-4 home-grid">
					<div class="item item-type-move">
						<a class="item-hover" href="<?php echo base_url()?>index.php/soon">
							<div class="item-info">
								<div class="headline">
									Our Rooms
									<div class="line"> </div>
								</div>
								<div class="date">February 29, 2016</div>
							</div>
							<div class="mask"> </div>
					    </a>
						<div class="item-img">
								<img src="<?php echo base_url()?>assets/images/gallery.png" class="img-responsive" alt="">
						</div>
					</div>

				</div>
				<div class="col-md-4 home-grid">
					<div class="item item-type-move">
						<a class="item-hover" href="<?php echo base_url()?>index.php/soon">
							<div class="item-info">
								<div class="headline">
									Our Rooms
									<div class="line"> </div>
								</div>
								<div class="date">February 29, 2016</div>
							</div>
							<div class="mask"> </div>
					    </a>
						<div class="item-img">
								<img src="<?php echo base_url()?>assets/images/gallery2.png" class="img-responsive" alt="">
						</div>
					</div>
				</div>
				<div class="col-md-4 home-grid">
					<div class="item item-type-move">
						<a class="item-hover" href="<?php echo base_url()?>index.php/soon">
							<div class="item-info">
								<div class="headline">
									Our Rooms
									<div class="line"> </div>
								</div>
								<div class="date">February 29, 2016</div>
							</div>
							<div class="mask"> </div>
					    </a>
						<div class="item-img">
								<img src="<?php echo base_url()?>assets/images/gallery3.jpg" class="img-responsive" alt="">
						</div>
					</div>
				</div>
			  <div class="clearfix"> </div>
			</div>
		  <div class="clearfix"> </div>
		</div>
	</div>
</div>
<!--home grid end here-->

<!--branches start here-->
<!--
<div class="branches">
		<div class="branches-main wow zoomIn" data-wow-delay="0.3s">
			<div class="branches-top">
				<h3>Our Branches</h3>
			</div>
			<div  id="effect-5" class="branch-btm">
				<div  class="col-md-3 branch-gd-main" >
					<div class="branch-gd  no-mar"> <a href="room.html">
						<img src="<?php echo base_url()?>assets/images/b6.jpg" alt="" class="img-responsive">
						<div class="overlay">
		                    <span class="expand lardge">+</span>
		                    <span class="close-overlay hidden">x</span>
	                   </div></a>
                    </div>
				</div>
				<div class="col-md-3 branch-gd-main">
					<div class="branch-gd went-branc"><a href="room.html">
						<img src="<?php echo base_url()?>assets/images/b1.jpg" alt="" class="img-responsive">
						<div class="overlay">
		                    <span class="expand">+</span>
		                    <span class="close-overlay hidden">x</span>
	                   </div></a>
					</div>
					<div class="branch-gd went-branc"><a href="room.html">
						<img src="<?php echo base_url()?>assets/images/b2.jpg" alt="" class="img-responsive">
						<div class="overlay">
		                    <span class="expand">+</span>
		                    <span class="close-overlay hidden">x</span>
	                 </div></a>
					</div>
				</div>
				<div class="col-md-3 branch-gd-main">
					<div class="branch-gd"><a href="room.html">
						<img src="<?php echo base_url()?>assets/images/b3.jpg" alt="" class="img-responsive">
						<div class="overlay">
		                    <span class="expand">+</span>
		                    <span class="close-overlay hidden">x</span>
	                 </div></a>
					</div>
					<div class="branch-gd"><a href="room.html">
						<img src="<?php echo base_url()?>assets/images/b4.jpg" alt="" class="img-responsive">
						<div class="overlay">
		                    <span class="expand">+</span>
		                    <span class="close-overlay hidden">x</span>
	                 </div></a>
					</div>
				</div>
				<div class="col-md-3 branch-gd-main">
				  <div class="branch-gd went-branc2"><a href="room.html">
					<img src="<?php echo base_url()?>assets/images/b5.jpg" alt="" class="img-responsive">
					<div class="overlay">
		                    <span class="expand lardge">+</span>
		                    <span class="close-overlay hidden">x</span>
	                   </div></a>
                  </div>
				</div>
			</div>
		  <div class="clearfix"> </div>
		</div>
</div>
<!--branches end here-->
<!--
<div class="branch-text">
   <div class="container">
			<span class="quotations"> </span>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
  </div>
</div>
