<!DOCTYPE html>
<html lang="zxx">
<head>
	<title>Kontak | PT Tri Ratna Diesel Indonesia</title>
	<?php $this->load->view('user_en/layout/header.php');?>
</head>
<body>

<!-- Page top section  -->
<section class="page-top-section set-bg" data-setbg="<?php echo base_url('assets/user/img/page-top-bg/a.jpg');?>">
</section>
<!-- Page top section end  -->

<!-- Contact section   -->
<section class="contact-section spad">
	<div class="container">
		<div class="row">
			<div class="col-lg-4">
				<div class="contact-text">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3956.9839470179245!2d112.64909501432169!3d-7.355695174413057!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7e2cdef1f5183%3A0x8ab4928ba4f2cb86!2sPT.%20Tri%20Ratna%20Diesel%20Indonesia!5e0!3m2!1sid!2sid!4v1580803803014!5m2!1sid!2sid" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
					<br><br>
					<h6>Head Office</h6><br>
					<div class="header-info-box">
						<div class="hib-icon">
							<img src="<?php echo base_url('assets/user/img/icons/map-marker.png');?>" alt="" class="">
						</div>
						<div class="hib-text">
							<h6>Jl. Raya Bambe KM. 19,3, Bambe</h6>
							<p>Kabupaten Gresik 23589</p>
						</div>
					</div>
					<div class="header-info-box">
						<div class="hib-icon">
							<img src="<?php echo base_url('assets/user/img/icons/phone.png');?>" alt="" class="">
						</div>
						<div class="hib-text">
							<h6>(031) 7508550</h6>
							<p>info@triratnadiesel.co.id</p>
						</div>
					</div>
					<h6>Shipyard</h6><br>
					<div class="header-info-box">
						<div class="hib-icon">
							<img src="<?php echo base_url('assets/user/img/icons/pollution.png');?>" alt="" class="" height="70%" width="70%">
						</div>
						<div class="hib-text">
							<h6>Dusun Genting Timur, Tanggul Paciran</h6>
							<p>Lamongan, Jawa Timur</p>
						</div>
					</div>

				</div>
			</div>
			<div class="col-lg-4"></div>
			<div class="col-lg-4">
				<div class="container" id="notif">
				<form class="contact-form" method="post" action="<?php echo site_url(); ?>Home/insert">
					<div class="row">
						<div class="col-lg-6">
							<input type="text" placeholder="Your Name" name="input_name" oninvalid="" required>
						</div>
						<div class="col-lg-6">
							<input type="email" placeholder="Your Email" name="input_email" oninvalid="" required>
						</div>
						<div class="col-lg-4">
						</div>
						<div class="col-lg-12">
							<input type="text" placeholder="Subject" name="input_subject" oninvalid="" required>
							<textarea class="text-msg" placeholder="Message" name="input_message" oninvalid="" required></textarea>
							<button class="site-btn sb-light-dark" type="submit" name="submit">send message</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</section>
<!-- Contact section end  -->
</body>
<?php $this->load->view('user_en/layout/footer.php');?>
</html>
