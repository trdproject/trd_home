<!DOCTYPE html>
<html lang="zxx">
<head>
	<title>Diesel Engine | PT Tri Ratna Diesel Indonesia</title>
	<?php $this->load->view('user/layout/header.php');?>
</head>
<body>
<div id="google_translate_element2"></div>
<!-- Page top section  -->
<section class="page-top-section set-bg" data-setbg="<?php echo base_url('assets/user/img/page-top-bg/dm.jpg');?>">
</section>
<!-- Page top section end  -->

<!-- About section -->
<section class="about-section spad">
	<div class="container">
		<div class="row">
			<div class="col-lg-6">
				<div class="about-text" >
					<img src="<?php echo base_url('upload/icon/Icon8bg.png');?>" align="left">
					<h2 style="color:#000066; font-family: Segoe UI; font-size: 40px; padding-top: 15px;">
						<strong>&ensp;<?php echo $dem->judul; ?></strong></h2>
					<p style="font-family: Segoe UI Light; font-size: 18px; color: black;"><?php echo $dem->isi; ?></p>
				</div>
			</div>
			<div class="col-lg-6">
				<img src="<?php echo site_url();?>upload/profile/<?php echo $dem->images; ?>" alt="" width="90%" height="90%">
			</div>
		</div>
	</div>
</section>
<!-- About section end -->

<!-- Sertifikat section   -->
<section class="features-section spad set-bg" data-setbg="<?php echo base_url('upload/bg6.png');?>">
	<div class="container">
		<div class="row" align="Center">
			<?php foreach ($sdem as $key) { ?>
			<div class="col-lg-3">
				<a href="<?php echo site_url();?>upload/certificate/<?php echo $key['images'];?>" title="<?php echo $key['nama'];?>" class="MagicZoom" rel="zoom-id:zoom;opacity-reverse:true;">
					<img src="<?php echo site_url();?>upload/certificate/<?php echo $key['images'];?>" width="200px" height="280px" class="zoom">
				</a>
			</div>
			<?php } ?>
		</div>
	</div>
</section>
<!-- Sertifikat section end  -->

	
<!-- section our service -->
<section class="team-section spad" >
	<div class="container">
		<div class="team-text"  style="background-color: #010321;">
			<h2 style="color:white; font-family: Segoe UI Light; font-size: 40px; padding-top: 15px; padding-bottom: 15px;"><strong>LAYANAN KAMI</strong></h2>
		</div><br>
		<div class="row">
			<div class="col-md-4" align="center">
				<img src="<?php echo base_url('upload/os1.png');?>" width="200px" height="250px"><br><br>
				<div class="member-info" align="center" style="padding-left: 10px; padding-right: 10px;">
					<p style="font-family: Segoe UI Light; font-size: 16px; color: black; padding-left: 60px; padding-right: 60px;">Berdasarkan pengalaman di bidang industri, kami akan berbagi pengetahuan kepada pelanggan. Dan keahlian yang telah kami peroleh selama bertahun- tahun dapat membantu mereka mendapatkan produk sesuai dengan yang diinginkan.</p>
				</div>
			</div>
			<div class="col-md-4" align="center">
				<img src="<?php echo base_url('upload/os2.png');?>" width="200px" height="250px"><br><br>
				<div class="member-info" align="center" style="padding-left: 10px; padding-right: 10px;">
					<p style="font-family: Segoe UI Light; font-size: 16px; color: black; padding-left: 60px; padding-right: 60px;">Kami menyediakan berbagai macam motor gigi dan suku cadang lainnya yang dibutuhkan oleh pelanggan di workshop kami.</p>
				</div>
			</div>
			<div class="col-md-4" align="center">
				<img src="<?php echo base_url('upload/os3.png');?>" width="200px" height="250px"><br><br>
				<div class="member-info" align="center" style="padding-left: 10px; padding-right: 10px;">
					<p style="font-family: Segoe UI Light; font-size: 16px; color: black; padding-left: 60px; padding-right: 60px;">Kami juga memberikan layanan pengiriman barang sesuai dengan jangka waktu yang sudah ditentukan oleh pelanggan kami setelah proses pembelian selesai</p>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- section our service -->

<!-- 3Komponen section -->
<section class="testimonial-section">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-6 p-0">
				<div class="testimonial-bg set-bg" data-setbg="<?php echo base_url('upload/bg.jpg');?>"></div>
			</div>
			<div class="col-lg-6 p-0">
				<div class="testimonial-box">
					<div class="testimonial-slider owl-carousel">
						<div class="testimonial">
							<h2  style="font-family: Segoe UI Light; color:#FFD700; font-size: 50px;">QUALITY CONTROL</h2>
							<ul style="font-family: Segoe UI Light; color: #dfdfdf; font-size: 18px; padding-left: 20px; padding-right: 20px;">
								<?php echo $qcdem->isi;?>
							</ul><br><br><a href="<?php echo site_url();?>Home/qc_dem" class="site-btn sb-light mr-3 mb-3">SELENGKAPNYA</a>
						</div>
						<div class="testimonial"><br><br>
							<h2  style="font-family: Segoe UI Light; color:#FFD700; font-size: 50px;">PROFESIONAL</h2>
							<ul style="font-family: Segoe UI Light; color: #dfdfdf; font-size: 18px; padding-left: 20px; padding-right: 20px;">
								<?php echo $pfdem->isi;?>
							</ul>
						</div>
						<div class="testimonial"><br><br><br>
							<h2  style="font-family: Segoe UI Light; color:#FFD700; font-size: 50px;">KOMPONEN BAHAN</h2>
							<ul style="font-family: Segoe UI Light; color: #dfdfdf; font-size: 18px; padding-left: 20px; padding-right: 20px;">
								<?php echo $kpdem->isi;?>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- 3Komponen section end  -->

<!-- Product section -->
<section class="team-section spad">
	<div class="container">
		<div class="team-text"  style="background-color: #010321;">
			<h2 style="color:white; font-family: Segoe UI Light; font-size: 40px; padding-top: 15px; padding-bottom: 15px;"><strong>PRODUK KAMI</strong></h2>
		</div>
		<div class="row">
			<?php foreach ($pdem as $key) { ?>
			<div class="col-md-4">
				<div class="team-member" align="Center">
					<img class="zoom" src="<?php echo site_url();?>upload/product/<?php echo $key['images']?>" width="250px" height="200px"><hr>
					<div class="member-info">
						<?php if ($key['nama'] == 'Diesel Engine' ) { ?>
							<a href="<?php echo site_url();?>produk-diesel-engine/<?php echo $key['id_product'];?>"> 
						<?php } else { ?>
							<a href="<?php echo site_url();?>produkk-diesel-engine/<?php echo $key['id_product'];?>"> 
						<?php } ?>
						<h3 style="text-transform: uppercase; color: #010321; letter-spacing: 1px;"><?php echo $key["nama"] ?></h3></a>
					</div>
				</div>
			</div>
			<?php } ?>
		</div>
	</div>
</section>
<!-- Product section end -->

<!-- Aplikasi section -->
<section class="team-section spad">
	<div class="container" >
		<div class="team-text"  style="background-color: #010321;" align="Center">
			<h2 style="color:white; font-family: Segoe UI Light; font-size: 40px; padding-top: 15px; padding-bottom: 15px;"><strong>AREA DISTRIBUSI</strong></h2>
		</div>
		<img src="<?php echo base_url('upload/area-distribusi.png');?>">
		<p style="font-family: Segoe UI Light; color: black; font-size: 18px;">PT Tri Ratna Diesel Indonesia, merupakan pabrik yang terus berkembang pesat. Hingga motor diesel yang diproduksi mampu bersaing didunia Internasional. Saat ini sudah di ekspor kebeberapa negara antara lain :</p>
		<table border="0" style="font-family: Segoe UI Light; font-size: 18px;">
			<thead>
				<tr>
					<td width="200px"><strong>ASIA</strong></td>
					<td width="200px"><strong>AFRIKA</strong></td>
					<td width="200px"> </td>
					<td width="200px"> </td>
					<td width="200px"><strong>AMERIKA</strong></td>
					<td width="200px"><strong>AUSTRALIA</strong></td>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td width="200px" style="text-transform: uppercase;"><li> Thailand</li></td>
					<td width="200px" style="text-transform: uppercase;"><li> Irak</li></td>
					<td width="200px" style="text-transform: uppercase;"><li> Djibouti</li></td>
					<td width="200px" style="text-transform: uppercase;"><li> Burkina Faso</li></td>
					<td width="200px" style="text-transform: uppercase;"><li> Panama</li></td>
					<td width="200px" style="text-transform: uppercase;"><li> Fiji</li></td>
				</tr>
				<tr>
					<td width="200px" style="text-transform: uppercase;"><li> Filipina</li></td>
					<td width="200px" style="text-transform: uppercase;"><li> Mesir</li></td>
					<td width="200px" style="text-transform: "><li> Tanzania</li></td>
					<td width="200px"><li> Angola</li></td>
					<td width="200px"> </td>
					<td width="200px"><li> Vunuatu</li></td>
				</tr>
				<tr>
					<td width="200px"><li> Timor Leste</li></td>
					<td width="200px"><li> Sudan</li></td>
					<td width="200px"><li> Zimbabwe</li></td>
					<td width="200px"><li> Afrika Selatan</li></td>
					<td width="200px"> </td>
					<td width="200px"> </td>
				</tr>
				<tr>
					<td width="200px"><li> Papua New Guinea</li></td>
					<td width="200px"><li> ETHIOPIA</li></td>
					<td width="200px"><li> Liberia</li></td>
					<td width="200px"><li> Nigeria</li></td>
					<td width="200px"> </td>
					<td width="200px"> </td>
				</tr>
				<tr>
					<td width="200px"> </td>
					<td width="200px"><li> Somalia</li></td>
					<td width="200px"><li> Sierra Leona</li></td>
					<td width="200px"> </td>
					<td width="200px"> </td>
					<td width="200px"> </td>
				</tr>
			</tbody>
		</table>
	</div>
</section>
<!-- Aplikasi section end -->


<!-- section after sales -->
<section class="clients-section spad">
	<div class="container" style="font-family: Segoe UI; font-size: 50px; color: #000230;">
		<img src="<?php echo base_url('upload/icon-ass.jpg');?>" align="left">
		<b style="text-transform: uppercase;">&ensp;AFTER SALES </b>SERVICE
		<img src="<?php echo base_url('upload/g.png');?>" align="right" style="padding-top: 10px;">
	</div><br>
	<div class="container">
		<div class="client-text" style="background-image: url('<?php echo base_url('upload/a.png');?>');">
			<p style="font-family: Segoe UI Light; color: black; text-align: left; ">
				<?php echo $pjdem->isi;?>
			</p>
		</div>
	</div><br><br>
	<div class="container">
		<div class="team-text" style="font-family: Segoe UI; font-size: 45px; color: #000230; letter-spacing: 4px;">
			<img src="<?php echo base_url('upload/j.png');?>" align="left" style="padding-top: 10px;">
			<b>DISTRIBUTOR </b>
			<img src="<?php echo base_url('upload/j.png');?>" align="right" style="padding-top: 10px;">
		</div>
		<br><br>
		<div class="team-text">
			<?php foreach ($cdem as $key ) { ?>
			<img src="<?php echo site_url();?>upload/client/<?php echo $key['images'];?>">
			<?php }?>
		</div>
		<div class="row">
			<div class="col-lg-6">
				<img src="<?php echo base_url('upload/profile/d.jpg');?>">
			</div>
			<div class="col-lg-6">
				<img src="<?php echo base_url('upload/profile/mcc.jpg');?>">
			</div>
		</div><br><br>
		<img src="<?php echo base_url('upload/lrs.png');?>">
	</div>
</section>
<!-- section after sales end-->
</body>

<!--====== Javascripts & Jquery ======-->
<?php $this->load->view('user/layout/footer.php');?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
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
