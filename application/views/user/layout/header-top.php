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