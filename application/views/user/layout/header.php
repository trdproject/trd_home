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
  <style type="text/css">
     #goog-gt-tt {
      display:none !important;
     }
     .goog-te-banner-frame {
      display:none !important;
     }
     .goog-te-menu-value:hover {
      text-decoration:none !important;
     }
     body {
      top:0 !important;
     }
     #google_translate_element2 {
      display:none!important;
     }
     .lg{
      width: 125px;
      height: 25px;
      margin-top: 5px;
     }
  </style>
</head>

<!-- Header section  -->
<header class="header-section clearfix">
	<div class="header-top" align="right" style="font-size: 11px;">
    <select onchange="doGTranslate(this);" class="lg"> 
        <option>Select Language</option>                
        <option value="id|en" ></i> English</option>
        <option value="id|id" >Indonesia</option> 
    </select>
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
					<h6 style="color: #1a5da0;" >Kantor Utama</h6>
					<h5 style="font-size: 11px;">Jl. RayaBambe KM. 19,3, Bambe</h5>
					<p style="font-size: 11px;">Kabupaten Gresik, 23589</p>
				</a>
				</div>
			</div>
			<div class="header-info-box">
				<div class="hib-icon">
					<img src="<?php echo base_url('assets/user/img/icons/kpl1.png');?>" alt="" class="">
				</div>
				<div class="hib-text">
					<a href="https://www.google.co.id/maps/place/Jl.+Genting.+Timur,+Paciran,+Tunggul,+Kec.+Paciran,+Kabupaten+Lamongan,+Jawa+Timur+62264/@-6.8707297,112.3653533,17z/data=!4m13!1m7!3m6!1s0x2e77c26f077a1025:0x43421ec8697b9575!2sJl.+Genting.+Timur,+Paciran,+Tunggul,+Kec.+Paciran,+Kabupaten+Lamongan,+Jawa+Timur+62264!3b1!8m2!3d-6.870735!4d112.367542!3m4!1s0x2e77c26f077a1025:0x43421ec8697b9575!8m2!3d-6.870735!4d112.367542?hl=id&authuser=0">
					<h6 style="color: #1a5da0;">Galangan Kapal</h6>
					<h5 style="font-size: 11px;">Dsn. Genting Timoer, Paciran</h5>
					<p style="font-size: 11px;">Lamongan, Jawa Timur</p>
				</a>
				</div>
			</div>
		</div>
		<!-- Menu -->
		<nav class="site-nav-menu">
			<ul>
				<li style="text-transform: capitalize;"><a href="<?php echo site_url('');?>">Beranda</a></li>
				<li style="text-transform: capitalize;"><a href="<?php echo site_url('/profil');?>">Profil</a></li>
				<li style="text-transform: capitalize;"><a>Unit</a>
					<ul class="sub-menu">
						<li style="text-transform: capitalize;"><a href="<?php echo site_url('/mesin-diesel');?>">Diesel&ensp;Engine</a></li>
						<li style="text-transform: capitalize;"><a href="<?php echo site_url('/pusat-cnc');?>">Machining Center</a></li>
						<li style="text-transform: capitalize;"><a href="<?php echo site_url('/galangan-kapal');?>">Shipyard</a></li>
					</ul>
				</li>
				<li style="text-transform: capitalize;"><a href="<?php echo site_url('/acara');?>">Event</a></li>
				<li style="text-transform: capitalize;"><a href="<?php echo site_url('/karir');?>">Karir</a></li>
				<li style="text-transform: capitalize;"><a href="<?php echo site_url('/kontak');?>">Kontak</a></li>
			</ul>
		</nav>  				
		<!-- Menu end -->
	</div>
</header>