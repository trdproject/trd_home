<?php
	require_once ('vendor/autoload.php');
	use \Statickidz\GoogleTranslate;
?>

<!DOCTYPE html>
<html lang="zxx">
<head>
	<title>Profile | PT Tri Ratna Diesel Indonesia</title>
	<?php $this->load->view('user_en/layout/header.php');?>
	<style>
		.content-section {
		min-height: 2000px;
		}
		.sidebar-section {
		  position: absolute;
		  height: 100%;
		  width: 100%;
		}


		.sidebar-item {
			position: absolute;
			top: 0;
			left: 0;
			width: 100%;
			height: 100%;
			
			/* Position the items */
			// &:nth-child(2) { top: 25%; }
			// &:nth-child(3) { top: 50%; }
			// &:nth-child(4) { top: 75%; }
		}


		.make-me-sticky {
		  	position: -webkit-sticky;
			position: sticky;
			top: 100px;
		    
		  padding: 0 15px;
		}



		/* Ignore This, just coloring */
		body {
		  background: #fff;
		}

		article {
		  background: #f1f1f1;
		  border-radius: 12px;
		  padding: 25px 0 600px;
		}


		.title-section, .content-section, .sidebar-section {
		  background: #fff;
		  // border-radius: 12px;
		  // border: solid 10px #f1f1f1; 
		}

		.title-section {
		  text-align: center;
		  padding: 50px 15px;
		  margin-bottom: 30px;
		}

		.content-section h2 {
		  text-align: center;
		  margin: 0;
		  padding-top: 200px;
		}

		.sidebar-item {
		  text-align: center;
		  
		  
		}
	</style>
</head>

<!-- Page top section  -->
<section class="page-top-section set-bg" data-setbg="<?php echo base_url('assets/user/img/page-top-bg/a.jpg');?>">
</section>
<!-- Page top section end  -->

<!-- Body section start -->
<body data-spy="scroll" data-target="#myScrollspy" data-offset="1">
<!-- Blog section  -->
<section class="blog-section spad">
	<div class="container">
		<div class="row">
			<div class="col-lg-4 col-md-6 sidebar order-2 order-lg-1">
				<div class="sb-widget make-me-sticky">
					<h2 class="sb-title">
					About Us
					</h2>
					<ul>
						<li><a href="#profil">
						Company Profile
						</a></li>
	                    <li><a href="#visimisi">
	                    Vision and Mision
	                	</a></li>
	                    <li><a href="#corevalue">
	                    Core Value
	                	</a></li>
	                    <li><a href="#client">
	                    Our Client
	                	</a></li>
					</ul>
				</div>
			</div>
			<!-- Menu profil -->
			<div class="col-lg-8 order-1 order-lg-2" >
				<!-- Menu profil -->
				<div class="class-profil" id="profil" style="padding-top: 50px;">
					<div class="about-text" id="profil">
						<h3 style="color: #0a3a66; font-family: Segoe UI Light; letter-spacing: 2px;">
							<?php
								$source = 'id';
								$target = 'en';
								$text =  $profil->judul;

								$trans = new GoogleTranslate();
								$result = $trans->translate($source, $target, $text);

								echo $result;
							?>
						</h3>
						<hr>
						<p style="font-family: Segoe UI Light; font-size: 18px; color: black; letter-spacing: 0.5px;">
							<?php
								$source = 'id';
								$target = 'en';
								$text =  $profil->isi;

								$trans = new GoogleTranslate();
								$result = $trans->translate($source, $target, $text);

								echo $result;
							?>
						</p>
					</div>
				</div><br><br><br>
				
				<!-- Menu visimisi -->
				<div class="class-visimisi" id="visimisi">
					<h3 style="color: #0a3a66; font-family: Segoe UI Light; letter-spacing: 2px;">
						Vision and Mision
					</h3>
					<hr><br>
					<div class="element">
						<div class="row">
							<div class="col-xl-12">
								<div id="accordion" class="accordion-area">
									<div class="panel">
										<div class="panel-header" style="background-color: #010c2e;">
											<h2 style="font-family: Segoe UI Light; color: white; font-size: 25px; padding-top: 12px; padding-bottom: 12px; padding-left: 18px; letter-spacing: 1.5px;">
												VISION
											</h2>
										</div>
										<div style="margin-left: 20px; margin-right: 20px;">
											<p style="font-family: Segoe UI Light; color: black; font-size: 16px; letter-spacing: 0.5px; padding-top: 5px;">
												<?php
													$source = 'id';
													$target = 'en';
													$text =   $visi->isi;

													$trans = new GoogleTranslate();
													$result = $trans->translate($source, $target, $text);

													echo $result;
												?>
											</p>
										</div>
									</div>
									<div class="panel">
										<div class="panel-header" style="background-color: #010c2e;">
											<h2 style="font-family: Segoe UI Light; color: white; font-size: 25px; padding-top: 12px; padding-bottom: 12px; padding-left: 18px; letter-spacing: 1.5px;">
												MISION
											</h2>
										</div>
										<div style="margin-left: 20px; margin-right: 20px;">
											<p style="font-family: Segoe UI Light; color: black; font-size: 16px; letter-spacing: 0.5px; padding-top: 5px;">
												<?php
													$source = 'id';
													$target = 'en';
													$text =   $misi->isi;

													$trans = new GoogleTranslate();
													$result = $trans->translate($source, $target, $text);

													echo $result;
												?>	
											</p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div><br><br><br>
				<!-- Menu Core Value -->
				<div class="class-corevalue" id="corevalue">
					<h3 style="color: #0a3a66; font-family: Segoe UI Light; letter-spacing: 2px;">
						CORE VALUE
					</h3>
					<hr><br>
					<div class="row">
						<div class="col-lg-12 col-md-12">
							<div class="service-item">
								<div class="si-head">
									<div class="si-icon">
										<img src="<?php echo base_url('assets/user/img/icons/wind-engine.png');?>" alt="">
									</div>
									<h5>
										Customer Focus	
									</h5>
								</div>
								<p style="font-family: Segoe UI Light; font-size: 16px; color: black; letter-spacing: 0.5px;">
								To continue the existence of the Company with the noble ideals of being the first choice for customers, with the hope of becoming the most admired company and providing prosperity for the nation.
								</p>
							</div>
						</div>
						<div class="col-lg-12 col-md-12">
							<div class="service-item">
								<div class="si-head">
									<div class="si-icon">
										<img src="<?php echo base_url('assets/user/img/icons/cogwheel.png');?>" alt="">
									</div>
									<h5>
										Respect
									</h5>
								</div>
								<p style="font-family: Segoe UI Light; font-size: 16px;  color: black; letter-spacing: 0.5px;">
								Respect for each individual with a focus on continuous development being a useful asset.
								</p>
							</div>
						</div>
						<div class="col-lg-12 col-md-12">
							<div class="service-item">
								<div class="si-head">
									<div class="si-icon">
										<img src="<?php echo base_url('assets/user/img/icons/wind-engine.png');?>" alt="">
									</div>
									<h5>Strive For Excellent</h5>
								</div>
								<p style="font-family: Segoe UI Light; font-size: 16px;  color: black; letter-spacing: 0.5px;">
									Always try to achieve the best from time to time.
								</p>
							</div>
						</div>
						<div class="col-lg-12 col-md-12">
							<div class="service-item">
								<div class="si-head">
									<div class="si-icon">
										<img src="<?php echo base_url('assets/user/img/icons/cogwheel.png');?>" alt="">
									</div>
									<h5>Innovative
									</h5>
								</div>
								<p style="font-family: Segoe UI Light; font-size: 16px;  color: black; letter-spacing: 0.5px;">
								Better, efficient and effective innovation in achieving pleasant work in the environment and in the process to provide perfect results.
								</p>
							</div>
						</div>
						<div class="col-lg-12 col-md-12">
							<div class="service-item">
								<div class="si-head">
									<div class="si-icon">
										<img src="<?php echo base_url('assets/user/img/icons/wind-engine.png');?>" alt="">
									</div>
									<h5>
										Professional
									</h5>
								</div>
								<p style="font-family: Segoe UI Light; font-size: 16px;  color: black; letter-spacing: 0.5px;">
									Making and producing products that are safe and beneficial for Customers and Tri Ratna People.
								</p>
							</div>
						</div>
					</div>
				</div><br><br><br>
				<!-- Menu client -->
				<div class="class-client" id="client">
					<h3 style="color: #0a3a66; font-family: Segoe UI Light; letter-spacing: 2px;">
						OUR CLIENT
					</h3>
					<hr>
					<p style="font-family: Segoe UI Light; font-size: 18px; color: black; ">
						We serve by always listening and providing the right solutions, about what is needed by consumers, so that the products obtained by consumers are really according to needs, besides that we continue to try what we do can give impact to the development of the company or business, here are some Clients who have worked together in using our products:
					</p><br>
					<div class="container">
						<div class="row">
							<?php foreach ($client as $key) { ?>
							<div class="col-lg-3 col-md-12">
								<div class="feature-box">
									<img src="<?php echo site_url();?>upload/client/<?php echo $key['images']; ?>" alt=""style="width: 20%; height: 20%;" ><br>
								</div>
							</div>
							<?php } ?>
						</div>
					</div>
				</div>
		</div>
	</div>
</section>
</body>
<!-- Blog section end  -->

<!--====== Javascripts & Jquery ======-->
<?php $this->load->view('user_en/layout/footer.php'); ?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

</html>
