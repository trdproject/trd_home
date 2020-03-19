<!DOCTYPE html>
<html lang="zxx">
<head>
	<title>Machining Center | PT Tri Ratna Diesel Indonesia</title>
	<?php $this->load->view('user/layout/header.php');?>
</head>
<body>

<!-- Page top section  -->
<section class="page-top-section set-bg" data-setbg="<?php echo base_url('assets/user/img/page-top-bg/6.jpg');?>">	
<div class="container">	
	<div class="row" align="Center"  style="padding-top: 400px;">
		<div class="col-lg-4">
			<a href="<?php echo site_url();?>Home/komponen">
				<img src="<?php echo base_url('upload/icon/ic1.png');?>" class="zoom">
				<div class="content-text">
					<h4 style="font-family: Segoe UI Black; font-size: 25px; color: #052542;">FOUNDRY</h4>
				</div>
			</a>
		</div>
		<div class="col-md-4">
			<a href="<?php echo site_url();?>Home/komponen">
				<img src="<?php echo base_url('upload/icon/ic2.png');?>" class="zoom">
				<div class="content-text">
					<h4 style="font-family: Segoe UI Black; font-size: 25px; color: #052542;">CUTTING</h4>
				</div>
			</a>
		</div>
		<div class="col-md-4">
			<a href="<?php echo site_url();?>Home/komponen">
				<img src="<?php echo base_url('upload/icon/ic3.png');?>" class="zoom">
				<div class="content-text">
					<h4 style="font-family: Segoe UI Black; font-size: 25px; color: #052542;">LATHE</h4>
				</div>
			</a>
		</div>
	</div>
</div>
</section><br><br><br><br><br><br>
<!-- section aspek end -->
<div id="google_translate_element2"></div>
<!-- About section -->
<section class="about-section spad">
	<div class="container">
		<h2 align="center" style="font-family: Monotype Corsiva; font-size: 60px; color: #b7c2cb; letter-spacing: 3px;">&ensp;&ensp;&ensp;Professional Metal Crafter&ensp;&ensp;&ensp;</h2>
		<br><br><br>
		<div class="row">
			<div class="col-lg-1"></div>
			<div class="col-lg-10">
				<div class="about-text" align="Center">
					<p style="font-family: Segoe UI Light; font-size: 20px; color: black;"><?php echo $mc->isi;?></p>
				</div>
			</div>
			<div class="col-lg-1"></div>
		</div>
		<div class="award-section spad">
			<div class="row" align="Center">
				<?php foreach ($smc as $key) { ?>
				<div class="col-lg-3">
					<a href="<?php echo site_url();?>upload/certificate/<?php echo $key['images'];?>" title="<?php echo $key['nama'];?>" class="MagicZoom" rel="zoom-id:zoom;opacity-reverse:true;">
						<img src="<?php echo site_url();?>upload/certificate/<?php echo $key['images'];?>" width="200px" height="280px" class="zoom">
					</a>
				</div>
				<?php } ?>
			</div>
		</div>
	</div>
</section>
<!-- About section end -->

<!-- Section sertifikasi -->
<section class="section spad" >
	<div class="row" style="background-image: url('<?php echo base_url('upload/grayy.png');?>');">
		<div class="col-md-4">
			<img src="<?php echo base_url('upload/icon/Icon3.png');?>" style="float: left; padding-left: 100px;" class="zoom" />
		</div>
		<div class="col-md-8" align="center">
			<div class="penjelasan-section spad" >
				<h4 style=" font-family: Segoe UI Light; padding-right: 70px; letter-spacing: 1px;">
					<?php echo $sfmc->isi;?>
				</h4>
			</div>
		</div>
	</div>
</section>
<!-- Section sertifikasi end -->

<!-- QC section  -->
<section class="video-section spad" >
	<div class="container" style="font-family: Segoe UI; font-size: 50px;">
		&ensp;<b><font color="#030b32" >QUALITY </font><font color="#006bbd">CONTROL</font></b>
		<img src="<?php echo base_url('upload/icon-1.jpg');?>" align="right" style="padding-top: 30px;">
	</div>
	<div class="container">
		<div class="row">
			<div class="col-lg-6">
				<div class="video-text">
					<p style="font-family: Segoe UI Light; font-size: 18px; color: black;"><br>
						<?php echo $qcmc->isi; ?>
					</p>
					<a href="<?php echo site_url();?>Home/qc_mc" class="site-btn sb-light-dark">selengkapnya</a>
				</div>
			</div>
			<div class="col-lg-6">
				<div class="video-box set-bg" data-setbg="<?php echo base_url('upload/profile/qc_dem.jpg');?>">
				</div>
			</div>
		</div>
	</div>
</section>
<!-- QC section end  -->

<!-- Product section -->
<section class="team-section spad">
	<div class="container">
		<div class="team-text" style="font-family: Segoe UI; font-size: 45px; color: #000230;">
			<img src="<?php echo base_url('upload/b.png');?>">
			<b><font color="#040133">PRODUK </font><font color="#0070b7">KAMI</font></b>
			<img src="<?php echo base_url('upload/c.png');?>">
		</div>
		<div class="row">
			<?php foreach ($pmc as $key) { ?>
			<div class="col-md-2">
				<div class="team-member">
					<img src="<?php echo site_url();?>upload/product/<?php echo $key['images'];?>" alt="" class="zoom">
					<div class="member-info">
						<h5 style="font-family: Segoe UI Light; color: #052a4d;"><?php echo $key['nama'];?></h5>
					</div>
				</div>
			</div>
			<?php } ?>
			<?php foreach ($pmc2 as $data) { ?>
			<div class="col-md-8">
				<div class="team-member">
					<img src="<?php echo site_url();?>upload/product/<?php echo $data['images'];?>" alt="" class="zoom">
					<div class="member-info">
						<h5 style="font-family: Segoe UI Light; color: #052a4d;"><?php echo $data['nama'];?></h5>
					</div>
				</div>
			</div>
			<?php } ?>
		</div>
	</div>
</section>
<!-- Product section end -->

<!-- Distribusi Hasil Produksi section  -->
<section class="video-section spad" >
	<div class="container">
		<div class="text" style="font-family: Segoe UI; font-size: 50px; color: #000230;">
			<img src="<?php echo base_url('upload/icon-4.jpg');?>" align="left">
			<b>KLIEN KAMI</b>
		</div>
	</div>
	<div class="container" align="Center"><br>
		<div class="text">
			<p style="font-family: Segoe UI Light; font-size: 18px; color: black;">Kami melayani dengan selalu mendengar dan memberikan solusi yang tepat tentang apa yang dibutuhkan konsumen, sehingga produk yang didapatkan konsumen memang benar-benar sesuai kebutuhan, selain itu kami terus berusaha apa yang kami lakukan mampu  memberikan dampak untuk perkembangan perusahaan atau bisnis tersebut, berikut beberapa clien yang sudah bekerja sama dalam menggunakan produk-produk kami.</p><br>
		</div>
		<div id="client-carousel" class="client-slider owl-carousel">
			<?php foreach ($cmc as $data) { ?>
			<div>
				<a href="#">
					<img src="<?php echo site_url();?>upload/client/<?php echo $data['images'];?>" alt="" style="width: 90%; height: 90%" >
				</a>
			</div>
			<?php } ?>
		</div>
	</div>
</section>
<!-- Distribusi Hasil Produksi section end  -->
</body>

<!--====== Javascripts & Jquery ======-->
<?php $this->load->view('user/layout/footer.php');?>
</html>
