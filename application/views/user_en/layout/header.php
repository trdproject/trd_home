<head>
	<meta charset="UTF-8">
	<!-- Favicon -->
	<link href="<?php echo base_url('assets/user/img/download.png');?>" rel="shortcut icon"/>
	<!-- Google font -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i&display=swap" rel="stylesheet">
	<!-- Stylesheets -->
	<link rel="stylesheet" href="<?php echo base_url('assets/user/css/bootstrap.min.css');?>"/>
	<link rel="stylesheet" href="<?php echo base_url('assets/user/css/font-awesome.min.css');?>"/>
	<link rel="stylesheet" href="<?php echo base_url('assets/user/css/slicknav.min.css');?>"/>
	<link rel="stylesheet" href="<?php echo base_url('assets/user/css/owl.carousel.min.css');?>"/>
	<!-- Main Stylesheets -->
	<link rel="stylesheet" href="<?php echo base_url('assets/user/css/style.css');?> "/>
	<link rel="stylesheet" href="<?php echo base_url('assets/user/css/css.css');?>" />
</head>

<!-- Header section  -->
<header class="header-section clearfix">
	<div class="header-top">
		<div class="container-fluid">
			<div class="column" align="right" style="font-size: 11px; color: #718090; line-height: 0.5;">
            <?php 
	  			$kunci = $this->session->userdata('menu');
	  			if ($kunci == "profil") { ?>
	  				<a href="<?php site_url();?>" >
                        <img src="<?php echo base_url('upload/icon/ico-ina.png');?>" style="width: 15px; height: 15px;" alt="Indonesia"><span style="color: white;"> Indonesia</span>
                	</a>
                	<a href="<?php echo site_url('profile');?>">
                        <img src="<?php echo base_url('upload/icon/ico-eng.png');?>" style="width: 15px; height: 15px;" alt="Indonesia"><span style="color: white;"> English</span>
                    </a>
	  			<?php } else if ($kunci == "profile") { ?>
	  				<a href="<?php echo site_url('profil');?>">
                        <img src="<?php echo base_url('upload/icon/ico-ina.png');?>" style="width: 15px; height: 15px;" alt="Indonesia"><span style="color: white;"> Indonesia</span>
                	</a>
                	<a href="<?php site_url();?>">
                        <img src="<?php echo base_url('upload/icon/ico-eng.png');?>" style="width: 15px; height: 15px;" alt="Indonesia"><span style="color: white;"> English</span>
                    </a>
                <?php } else if ($kunci == "diesel_engine_id") { ?>
                	<a href="<?php site_url();?>">
                        <img src="<?php echo base_url('upload/icon/ico-ina.png');?>" style="width: 15px; height: 15px;" alt="Indonesia"><span style="color: white;"> Indonesia</span>
                	</a>
                	<a href="<?php echo site_url('diesel-engine');?>">
                        <img src="<?php echo base_url('upload/icon/ico-eng.png');?>" style="width: 15px; height: 15px;" alt="Indonesia"><span style="color: white;"> English</span>
                    </a>
	  			<?php } else if ($kunci == "diesel_engine") { ?>
                	<a href="<?php echo site_url('mesin-diesel');?>">
                        <img src="<?php echo base_url('upload/icon/ico-ina.png');?>" style="width: 15px; height: 15px;" alt="Indonesia"><span style="color: white;"> Indonesia</span>
                	</a>
                	<a href="<?php site_url();?>">
                        <img src="<?php echo base_url('upload/icon/ico-eng.png');?>" style="width: 15px; height: 15px;" alt="Indonesia"><span style="color: white;"> English</span>
                    </a>
                <?php } else if ($kunci == "home") { ?>
                	<a href="<?php echo site_url('Home');?>" >
                        <img src="<?php echo base_url('upload/icon/ico-ina.png');?>" style="width: 15px; height: 15px;" alt="Indonesia"><span style="color: white;"> Indonesia</span>
                	</a>
                	<a href="<?php site_url();?>">
                        <img src="<?php echo base_url('upload/icon/ico-eng.png');?>" style="width: 15px; height: 15px;" alt="Indonesia"><span style="color: white;"> English</span>
                    </a>
	  			<?php } else if ($kunci == "beranda") { ?>
                	<a href="<?php site_url();?>" >
                        <img src="<?php echo base_url('upload/icon/ico-ina.png');?>" style="width: 15px; height: 15px;" alt="Indonesia"><span style="color: white;"> Indonesia</span>
                	</a>
                	<a href="<?php echo site_url('English');?>">
                        <img src="<?php echo base_url('upload/icon/ico-eng.png');?>" style="width: 15px; height: 15px;" alt="Indonesia"><span style="color: white;"> English</span>
                    </a>
                <?php } else if ($kunci == "machining_center_id") { ?>
                	<a href="<?php site_url();?>" >
                        <img src="<?php echo base_url('upload/icon/ico-ina.png');?>" style="width: 15px; height: 15px;" alt="Indonesia"><span style="color: white;"> Indonesia</span>
                	</a>
                	<a href="<?php echo site_url('machining-centre');?>">
                        <img src="<?php echo base_url('upload/icon/ico-eng.png');?>" style="width: 15px; height: 15px;" alt="Indonesia"><span style="color: white;"> English</span>
                    </a>
                <?php } else if ($kunci == "machining_center") { ?>
                	<a href="<?php echo site_url('pusat-cnc');?>" >
                        <img src="<?php echo base_url('upload/icon/ico-ina.png');?>" style="width: 15px; height: 15px;" alt="Indonesia"><span style="color: white;"> Indonesia</span>
                	</a>
                	<a href="<?php site_url();?>">
                        <img src="<?php echo base_url('upload/icon/ico-eng.png');?>" style="width: 15px; height: 15px;" alt="Indonesia"><span style="color: white;"> English</span>
                    </a>
                <?php } else if ($kunci == "shipyard_id") { ?>
                	<a href="<?php echo site_url('galangan-kapal');?>" >
                        <img src="<?php echo base_url('upload/icon/ico-ina.png');?>" style="width: 15px; height: 15px;" alt="Indonesia"><span style="color: white;"> Indonesia</span>
                	</a>
                	<a href="<?php site_url();?>">
                        <img src="<?php echo base_url('upload/icon/ico-eng.png');?>" style="width: 15px; height: 15px;" alt="Indonesia"><span style="color: white;"> English</span>
                    </a>
                <?php } else if ($kunci == "shipyard") { ?>
                	<a href="<?php echo site_url('galangan-kapal');?>" >
                        <img src="<?php echo base_url('upload/icon/ico-ina.png');?>" style="width: 15px; height: 15px;" alt="Indonesia"><span style="color: white;"> Indonesia</span>
                	</a>
                	<a href="<?php site_url();?>">
                        <img src="<?php echo base_url('upload/icon/ico-eng.png');?>" style="width: 15px; height: 15px;" alt="Indonesia"><span style="color: white;"> English</span>
                    </a>
                    <!-- /////// -->
                <?php } else if ($kunci == "event_id") { ?>
                	<a href="<?php site_url();?>" >
                        <img src="<?php echo base_url('upload/icon/ico-ina.png');?>" style="width: 15px; height: 15px;" alt="Indonesia"><span style="color: white;"> Indonesia</span>
                	</a>
                	<a href="<?php echo site_url('event');?>">
                        <img src="<?php echo base_url('upload/icon/ico-eng.png');?>" style="width: 15px; height: 15px;" alt="Indonesia"><span style="color: white;"> English</span>
                    </a>
                <?php } else if ($kunci == "event_en") { ?>
                	<a href="<?php echo site_url('acara');?>" >
                        <img src="<?php echo base_url('upload/icon/ico-ina.png');?>" style="width: 15px; height: 15px;" alt="Indonesia"><span style="color: white;"> Indonesia</span>
                	</a>
                	<a href="<?php site_url();?>">
                        <img src="<?php echo base_url('upload/icon/ico-eng.png');?>" style="width: 15px; height: 15px;" alt="Indonesia"><span style="color: white;"> English</span>
                    </a>
                <?php } else if ($kunci == "karir") { ?>
                	<a href="<?php site_url();?>" >
                        <img src="<?php echo base_url('upload/icon/ico-ina.png');?>" style="width: 15px; height: 15px;" alt="Indonesia"><span style="color: white;"> Indonesia</span>
                	</a>
                	<a href="<?php echo site_url('career');?>">
                        <img src="<?php echo base_url('upload/icon/ico-eng.png');?>" style="width: 15px; height: 15px;" alt="Indonesia"><span style="color: white;"> English</span>
                    </a>
                <?php } else if ($kunci == "career") { ?>
                	<a href="<?php echo site_url('karir');?>" >
                        <img src="<?php echo base_url('upload/icon/ico-ina.png');?>" style="width: 15px; height: 15px;" alt="Indonesia"><span style="color: white;"> Indonesia</span>
                	</a>
                	<a href="<?php site_url();?>">
                        <img src="<?php echo base_url('upload/icon/ico-eng.png');?>" style="width: 15px; height: 15px;" alt="Indonesia"><span style="color: white;"> English</span>
                    </a>
                <?php } else if ($kunci == "sukses") { ?>
                	<a href="<?php site_url();?>" >
                        <img src="<?php echo base_url('upload/icon/ico-ina.png');?>" style="width: 15px; height: 15px;" alt="Indonesia"><span style="color: white;"> Indonesia</span>
                	</a>
                	<a href="<?php echo site_url('English/sukses');?>">
                        <img src="<?php echo base_url('upload/icon/ico-eng.png');?>" style="width: 15px; height: 15px;" alt="Indonesia"><span style="color: white;"> English</span>
                    </a>
                <?php } else if ($kunci == "succsess") { ?>
                	<a href="<?php echo site_url('Home/sukses');?>" >
                        <img src="<?php echo base_url('upload/icon/ico-ina.png');?>" style="width: 15px; height: 15px;" alt="Indonesia"><span style="color: white;"> Indonesia</span>
                	</a>
                	<a href="<?php site_url();?>">
                        <img src="<?php echo base_url('upload/icon/ico-eng.png');?>" style="width: 15px; height: 15px;" alt="Indonesia"><span style="color: white;"> English</span>
                    </a>
                <?php } else if ($kunci == "kontak") { ?>
                	<a href="<?php site_url();?>" >
                        <img src="<?php echo base_url('upload/icon/ico-ina.png');?>" style="width: 15px; height: 15px;" alt="Indonesia"><span style="color: white;"> Indonesia</span>
                	</a>
                	<a href="<?php echo site_url('contact');?>">
                        <img src="<?php echo base_url('upload/icon/ico-eng.png');?>" style="width: 15px; height: 15px;" alt="Indonesia"><span style="color: white;"> English</span>
                    </a>
                <?php } else if ($kunci == "contact") { ?>
                	<a href="<?php echo site_url('kontak');?>" >
                        <img src="<?php echo base_url('upload/icon/ico-ina.png');?>" style="width: 15px; height: 15px;" alt="Indonesia"><span style="color: white;"> Indonesia</span>
                	</a>
                	<a href="<?php site_url();?>">
                        <img src="<?php echo base_url('upload/icon/ico-eng.png');?>" style="width: 15px; height: 15px;" alt="Indonesia"><span style="color: white;"> English</span>
                    </a>
                <?php } else if ($kunci == "qc_dem_id") { ?>
                	<a href="<?php site_url();?>" >
                        <img src="<?php echo base_url('upload/icon/ico-ina.png');?>" style="width: 15px; height: 15px;" alt="Indonesia"><span style="color: white;"> Indonesia</span>
                	</a>
                	<a href="<?php echo site_url('quality-control-diesel-engine');?>">
                        <img src="<?php echo base_url('upload/icon/ico-eng.png');?>" style="width: 15px; height: 15px;" alt="Indonesia"><span style="color: white;"> English</span>
                    </a>
                <?php } else if ($kunci == "qc_dem_en") { ?>
                	<a href="<?php echo site_url('quality-control-mesin-diesel');?>" >
                        <img src="<?php echo base_url('upload/icon/ico-ina.png');?>" style="width: 15px; height: 15px;" alt="Indonesia"><span style="color: white;"> Indonesia</span>
                	</a>
                	<a href="<?php site_url();?>">
                        <img src="<?php echo base_url('upload/icon/ico-eng.png');?>" style="width: 15px; height: 15px;" alt="Indonesia"><span style="color: white;"> English</span>
                    </a>
                <?php } else if ($kunci == "qc_mc_id") { ?>
                	<a href="<?php site_url();?>" >
                        <img src="<?php echo base_url('upload/icon/ico-ina.png');?>" style="width: 15px; height: 15px;" alt="Indonesia"><span style="color: white;"> Indonesia</span>
                	</a>
                	<a href="<?php echo site_url('quality-control-cnc');?>">
                        <img src="<?php echo base_url('upload/icon/ico-eng.png');?>" style="width: 15px; height: 15px;" alt="Indonesia"><span style="color: white;"> English</span>
                    </a>
                <?php } else if ($kunci == "qc_mc_en") { ?>
                	<a href="<?php echo site_url('quality-control-pusat-cnc');?>" >
                        <img src="<?php echo base_url('upload/icon/ico-ina.png');?>" style="width: 15px; height: 15px;" alt="Indonesia"><span style="color: white;"> Indonesia</span>
                	</a>
                	<a href="<?php site_url();?>">
                        <img src="<?php echo base_url('upload/icon/ico-eng.png');?>" style="width: 15px; height: 15px;" alt="Indonesia"><span style="color: white;"> English</span>
                    </a>
                <?php } else if ($kunci == "komponen") { ?>
                	<a href="<?php site_url();?>" >
                        <img src="<?php echo base_url('upload/icon/ico-ina.png');?>" style="width: 15px; height: 15px;" alt="Indonesia"><span style="color: white;"> Indonesia</span>
                	</a>
                	<a href="<?php echo site_url('English/komponen');?>">
                        <img src="<?php echo base_url('upload/icon/ico-eng.png');?>" style="width: 15px; height: 15px;" alt="Indonesia"><span style="color: white;"> English</span>
                    </a>
                <?php } else if ($kunci == "component") { ?>
                	<a href="<?php echo site_url('Home/komponen');?>" >
                        <img src="<?php echo base_url('upload/icon/ico-ina.png');?>" style="width: 15px; height: 15px;" alt="Indonesia"><span style="color: white;"> Indonesia</span>
                	</a>
                	<a href="<?php site_url();?>">
                        <img src="<?php echo base_url('upload/icon/ico-eng.png');?>" style="width: 15px; height: 15px;" alt="Indonesia"><span style="color: white;"> English</span>
                    </a>
	  			<?php }?>

			</div>
			
							
				
		</div>
	</div>
	<div class="site-navbar">
		<!-- Logo -->
		<a href="#" class="site-logo">
			<img src="<?php echo base_url('assets/user/img/logo-trd.jpg');?>" alt="">
		</a>
		<div class="header-right">
			<div class="header-info-box">
				<div class="hib-icon">
					<img src="<?php echo base_url('assets/user/img/icons/office1.png');?>" alt="" class="">
				</div>
				<div class="hib-text"><a href="https://www.google.co.id/maps/place/PT.+Tri+Ratna+Diesel+Indonesia/@-7.3556952,112.649095,17z/data=!3m1!4b1!4m5!3m4!1s0x2dd7e2cdef1f5183:0x8ab4928ba4f2cb86!8m2!3d-7.3557005!4d112.6512837?hl=id&authuser=0">
					<h6 style="color: #1a5da0;" >Head Office</h6>
					<h5 style="font-size: 11px;">Jl. Raya Bambe KM. 19,3, Bambe</h5>
					<p style="font-size: 11px;">Gresik Regency, 23589</p>
				</a>
				</div>
			</div>
			<div class="header-info-box">
				<div class="hib-icon">
					<img src="<?php echo base_url('assets/user/img/icons/kpl1.png');?>" alt="" class="">
				</div>
				<div class="hib-text">
					<a href="https://www.google.co.id/maps/place/Jl.+Genting.+Timur,+Paciran,+Tunggul,+Kec.+Paciran,+Kabupaten+Lamongan,+Jawa+Timur+62264/@-6.8707297,112.3653533,17z/data=!4m13!1m7!3m6!1s0x2e77c26f077a1025:0x43421ec8697b9575!2sJl.+Genting.+Timur,+Paciran,+Tunggul,+Kec.+Paciran,+Kabupaten+Lamongan,+Jawa+Timur+62264!3b1!8m2!3d-6.870735!4d112.367542!3m4!1s0x2e77c26f077a1025:0x43421ec8697b9575!8m2!3d-6.870735!4d112.367542?hl=id&authuser=0">
					<h6 style="color: #1a5da0;">Shipyard</h6>
					<h5 style="font-size: 11px;">Dusun Genting Timur, Tanggul</h5>
					<p style="font-size: 11px;">Lamongan, East Java</p>
				</a>
				</div>
			</div>
		</div>
		<!-- Menu -->
		<?php 
  			$kunci = $this->session->userdata('bahasa');
  			if ($kunci == "idn") { ?>
		<nav class="site-nav-menu">
			<ul>
				<li><a href="<?php echo site_url('');?>">Beranda</a></li>
				<li><a href="<?php echo site_url('/profil');?>">Profil</a></li>
				<li ><a>Unit</a>
					<ul class="sub-menu">
						<li><a href="<?php echo site_url('/mesin-diesel');?>">Diesel Engine</a></li>
						<li><a href="<?php echo site_url('/pusat-cnc');?>">Machining Center</a></li>
						<li><a href="<?php echo site_url('/galangan-kapal');?>">Shipyard</a></li>
					</ul>
				</li>
				<li><a href="<?php echo site_url('/acara');?>">Event</a></li>
				<li><a href="<?php echo site_url('/karir');?>">Karir</a></li>
				<li><a href="<?php echo site_url('/kontak');?>">Kontak</a></li>
			</ul>
		</nav>  				
  			<?php } else{ ?>
  		<nav class="site-nav-menu">
			<ul>
				<li><a href="<?php echo site_url('English');?>">Home</a></li>
				<li><a href="<?php echo site_url('/profile');?>">Profile</a></li>
				<li ><a>Unit</a>
					<ul class="sub-menu">
						<li><a href="<?php echo site_url('English/unit_dem');?>">Diesel Engine</a></li>
						<li><a href="<?php echo site_url('/machining-centre');?>">Machining Center</a></li>
						<li><a href="<?php echo site_url('/shipyard');?>">Shipyard</a></li>
					</ul>
				</li>
				<li><a href="<?php echo site_url('/event');?>">Event</a></li>
				<li><a href="<?php echo site_url('/career');?>">Career</a></li>
				<li><a href="<?php echo site_url('/contact');?>">Contact</a></li>
			</ul>
		</nav>  				
  			<?php }


		?>

		<!-- Menu end -->
	</div>
</header>
<!-- Header section end  -->