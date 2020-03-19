<!DOCTYPE html>
<html lang="zxx">
<head>
	<title>Shipyard | PT Tri Ratna Diesel Indonesia</title>
	<?php $this->load->view('user/layout/header.php');?>
	<style>
		.hero-item .content: {
		  position: absolute;
		  bottom: 0;
		  background: rgb(0, 0, 0); /* Fallback color */
		  background: rgba(0, 0, 0, 0.5); /* Black background with 0.5 opacity */
		  color: #f1f1f1;
		  width: 100%;
		  padding: 20px;
		}
	</style>
	 <style>
	  /* Make the image fully responsive */
	  	.carousel-inner img {
	      width: 100%;
	      height: 100%;
	  	}
	</style>
	
</head>
<body>
<div id="google_translate_element2"></div>
<!-- Page top section  -->
<section class="page-top-section set-bg" data-setbg="<?php echo base_url('assets/user/img/page-top-bg/ss.jpg');?>">
</section>
<!-- Page top section end  -->

<!-- About section -->
<section class="about-section spad">
	<div class="container" align="Center">
		<div class="col-lg-12">
			<div class="about-text">
				<p style="font-family: Segoe UI Light; font-size: 18px; color: black;">
					<?php echo $sm->isi;?>
				</p>
			</div>
		</div><br><br>
		<div class="row">
			<div class="col-lg-2"></div>
			<div class="col-lg-4" style="background-color: #07041e;"><br>
				<h2 style="font-family: Segoe UI Light; font-size: 20px; color: white;">V I S I</h2><br>
				<p style="color: white;">
					<?php echo $vsm->isi;?>
				</p>
			</div>
			<div class="col-lg-4" style="background-color: #0b5982;"><br>
				<h2 style="font-family: Segoe UI Light; font-size: 20px; color: white;">M I S I</h2><br>
				<p style="color: white;">
					<?php echo $msm->isi;?>
				</p>
			</div>
			<div class="col-lg-2"></div>
		</div>
	</div>
</section>
<!-- About section end -->

<!-- Why Us section -->
<section class="about-section spad">
	<div class="container">
		<div class="text"  style="font-family: Segoe UI; font-size: 45px; color: #000230;">
			<img src="<?php echo base_url('upload/wu3.png');?>" align="Left" style="padding-left: 200px;">
			<strong><font color="#06013e">MENGAPA PILIH </font></strong><font color="#009ae9">KAMI</font>
		</div>

	</div><br>
	<div class="container" >
		<div class="row">
			<div class="col-lg-6">
				<img src="<?php echo base_url('upload/wu.jpg');?>">
			</div>
			<div class="col-lg-6">
				<p style="font-family: Segoe UI Light; font-size: 18px; color: black; " >
					<?php echo $wsm->isi;?>
				</p>
			</div>
		</div>
	</div>
</section>
<!-- Why Us section end -->

<!-- Video section  -->
<section class="video-section spad" >
	<div class="container">
		<div class="text" style="font-family: Segoe UI; font-size: 50px; color: #000230;">
			<img src="<?php echo base_url('upload/icon-4.jpg');?>" align="left">
			<font color="#009ae9"><b>&ensp;SERTIFIKASI</b></font>
		</div><br><br>
		<div class="row">
			<div class="col-lg-12">
				<div class="video-text" style="padding-left: 30px; padding-right: 30px;">
					<p style="font-family: Segoe UI Light; font-size: 18px; color: black;">
						<?php echo $stsm->isi;?>
					</p>
				</div>
			</div>
		</div>
		<div class="row" align="center">
			<?php foreach ($ssm as $key) { ?>
			<div class="col-lg-3">
				<a class="MagicZoom" rel="zoom-id:zoom;opacity-reverse:true;" title="<?php echo $key['nama'];?>" href="<?php echo site_url();?>upload/certificate/<?php echo $key['images'];?>" >
					<img class="zoom" src="<?php echo site_url();?>upload/certificate/<?php echo $key['images'];?>">
				</a>
			</div>
			<?php } ?>
		</div>
	</div>
</section>
<!-- Video section end  -->

<!-- Divisi Pembuatan section -->
<img src="<?php echo base_url('upload/grs.jpg');?>">
<section class="team-section spad">
	<div class="container">
		<div class="row">
			<div class="col-lg-1"></div>
			<div class="col-lg-5" style="background-color: #0d79d4;">
				<div class="text">
					<img src="<?php echo base_url('upload/icon-6.png');?>">
					<h4 style="font-family: Segoe UI; font-size: 65px; padding-left: 35px;"><font color="#060234">DIVISI<br>PEMBUATAN<br></font><font color="white">KAPAL</font></h4>
				</div><br><br>
				<p style="font-family: Segoe UI Light; font-size: 18px; color: white; padding-left: 15px;">
					<?php echo $dpsm->isi;?>
				</p><br><br>
			</div>
			<div class="col-lg-5">
				<img src="<?php echo base_url('upload/kapal.png');?>">
			</div>
			<div class="col-lg-1"></div>
		</div><br><br><br><br><br>
		<div class="container">
			<div class="text" style="font-family: Segoe UI; font-size: 50px; color: #000230;">
				<img src="<?php echo base_url('upload/icon-4.jpg');?>" align="left">
				<b>PRODUK <font color="#00a2ed"> KAMI</b></font>
			</div>
		</div><br><br>
		<div class="row" >
			<?php foreach ($psm as $key) { ?>
			<div class="col-md-4">
				<div class="team-member" align="Center">
					<a href="<?php echo site_url();?>upload/product/<?php echo $key['images'];?>" title="" class="MagicZoom" rel="zoom-id:zoom;opacity-reverse:true;">
						<img class="zoom" src="<?php echo site_url();?>upload/product/<?php echo $key['images'];?>">
					</a>
					<div class="member-info">
						<h3><?php echo $key['nama'];?></h3>
					</div>
				</div>
			</div>
			<?php } ?>
		</div>
	</div>
</section>
<!-- Divisi Pembuatan section end -->	

<!-- Divisi Perbaikan section -->
<img src="<?php echo base_url('upload/grs2.jpg');?>">
<section class="team-section spad">
	<div class="container">
		<div class="row">
			<div class="col-lg-1"></div>
			<div class="col-lg-5" style="background-color: #09042b;">
				<div class="text">
					<img src="<?php echo base_url('upload/icon-7.png');?>">
					<h4 style="font-family: Segoe UI; font-size: 65px; padding-left: 35px;"><font color="#1d92ff">DIVISI<br>PERBAIKAN<br></font><font color="white">KAPAL</font></h4>
				</div><br><br>

				<p style="font-family: Segoe UI Light; font-size: 18px; color: white; padding-left: 15px;">
				<?php echo $dksm->isi;?>
				</p><br><br>
			</div>
			<div class="col-lg-5">
				<img src="<?php echo base_url('upload/perbaikan.png');?>">
			</div>
			<div class="col-lg-1"></div>
		</div><br><br><br><br><br><br>
		<div class="team-text"  style="background-color: #009acd;">
			<h2 style="color:white; font-family: Segoe UI; font-size: 40px; padding-top: 20px; padding-bottom: 20px;"><strong>FASILITAS LENGKAP & BERSERTIFIKASI</strong></h2>
		</div>
		<!-- Slide section  -->
		<div class="hero-slider owl-carousel">
			<div class="hero-item set-bg">
				<img src="<?php echo base_url('upload/waa.jpg');?>"  width="60%" height="80%">
			</div>
			<div class="hero-item set-bg">
				<img src="<?php echo base_url('upload/fs.png');?>"  width="60%" height="85%">
			</div>
			<div class="hero-item set-bg">
				<img src="<?php echo base_url('upload/plasma.png');?>"  width="60%" height="85%">
			</div>
			<div class="hero-item set-bg">
				<img src="<?php echo base_url('upload/c-1.png');?>"  width="60%" height="85%">
			</div>
			<div class="hero-item set-bg">
				<img src="<?php echo base_url('upload/gss.png');?>"  width="60%" height="85%">
			</div>
			<div class="hero-item set-bg">
				<img src="<?php echo base_url('upload/slipway-1.png');?>" width="60%" height="85%">
			</div>
			<div class="hero-item set-bg">
				<img src="<?php echo base_url('upload/airbag.png');?>"  width="60%" height="85%">
			</div>
			<div class="hero-item set-bg">
				<img src="<?php echo base_url('upload/painting-1.png');?>"  width="60%" height="85%">
			</div>
		</div>
		<!-- Slide section end  -->

	</div><br><br><br><br><br><br>
	<!-- Pengendalian Mutu section -->
	<div class="container" align="left">
		<div class="text" style="font-family: Segoe UI; font-size: 42px;">
			<b><font color="#040133">PENGENDALIAN</font><font color="#00a2ed">  MUTU</b></font>
			<img src="<?php echo base_url('upload/icon-8.png');?>">
		</div><br>
		<div class="row">
			<div class="col-lg-6">
				<p style="font-family: Segoe UI Light; font-size: 18px; color: black; " ><br>
				<?php echo $pmsm->isi;?>
				</p>
			</div>
			<div class="col-lg-6">
				<img src="<?php echo base_url('upload/wu.jpg');?>">
			</div>
		</div>
	</div>
</section>
<!-- Divisi Perbaikan section end -->

<!-- Map section  -->
<section class="map-section">
	<div class="container" align="Center" style="font-family: Segoe UI; font-size: 50px; letter-spacing: 1px;">
			<b><font color="#040133">DENAH</font><font color="#00a2ed">  LOKASI</b>
	</div><br>
	<div class="map-section">
		<div class="map">
			<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7922.358414577877!2d112.367914!3d-6.869118!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x29ffc30be31cf70b!2sGalangan%20Kapal%20PT%20Tri%20Ratna%20Diesel%20Unit%20Santosa%20Marine!5e0!3m2!1sen!2sid!4v1582532440231!5m2!1sen!2sid" width="600" height="800" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
		</div>
	</div><br><br><br><br><br><br>
	<div class="container" >
		<div class="container">
			<div class="text" style="font-family: Segoe UI; font-size: 50px; color: #000230;">
				<img src="<?php echo base_url('upload/icon-4.jpg');?>" align="left">
				<b>KLIEN <font color="#00a2ed"> KAMI</b></font>
			</div>
		</div>
		<br><br><br>
		<div class="text" align="center">
			<p style="font-family: Segoe UI Light; font-size: 18px; color: black;">Kami melayani dengan selalu mendengar dan memberikan solusi yang tepat tentang apa yang dibutuhkan konsumen, sehingga produk yang didapatkan konsumen memang benar-benar sesuai kebutuhan, selain itu kami terus berusaha apa yang kami lakukan mampu  memberikan dampak untuk perkembangan perusahaan atau bisnis tersebut, berikut beberapa clien yang sudah bekerja sama dalam menggunakan produk-produk kami.</p><br>
		</div>
		<div id="client-carousel" class="client-slider owl-carousel">
			<?php foreach ($csm as $data) { ?>
			<div>
				<a href="#">
					<img src="<?php echo site_url();?>upload/client/<?php echo $data['images'];?>" alt="" style="width: 90%; height: 90%" >
				</a>
			</div>
			<?php } ?>
		</div>
	</div>
</section>
<!-- Map section end  -->
</body>
	
<!--====== Javascripts & Jquery ======-->
<?php $this->load->view('user/layout/footer.php');?>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
	<script>
		$(document).ready(function(){
		    $('.zoom').hover(function() {
		        $(this).addClass('transisi');
		    }, function() {
		        $(this).removeClass('transisi');
		    });
		});  
	</script>
	
</html>
