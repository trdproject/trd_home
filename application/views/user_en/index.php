<!DOCTYPE html>
<html lang="zxx">
<head>
	<title>PT Tri Ratna Diesel Indonesia</title>
	<?php $this->load->view('user_en/layout/header.php')?>
</head>
<body>	
<!-- Hero section  -->
<section class="hero-section">
	<div class="hero-slider owl-carousel">
		<div class="hero-item set-bg" data-setbg="<?php echo base_url('assets/user/img/file.jpg');?>">
			<div class="container">
				<div class="row">
				</div>
			</div>
		</div>
		<div class="hero-item set-bg" data-setbg="<?php echo base_url('assets/user/img/12.jpg');?>">
			<div class="container">
				<div class="row">
				</div>
			</div>
		</div>
		<div class="hero-item set-bg" data-setbg="<?php echo base_url('assets/user/img/y.jpg');?>">
			<div class="container">
				<div class="row">
				</div>
			</div>
		</div>
		<div class="hero-item set-bg" data-setbg="<?php echo base_url('assets/user/img/13.jpg');?>">
			<div class="container">
				<div class="row">
				</div>
			</div>
		</div>
	</div>
</section>
<!-- Hero section end  -->

<!-- Welcome section  -->
<section class="services-section">
	<div class="services-warp">
		<div class="container">
		<div class="team-text" style="color:#02325e; font-family: ; letter-spacing: 5px; font-size: 50px;">
			<strong> PT TRI RATNA DIESEL</strong>
			<hr size="10px;" >
			<p style="font-family: Segoe UI Light; color: black; letter-spacing: 1px; padding-top: 20px;">
			PT Tri Ratna Diesel Indonesia is a company engaged in agricultural, plantation and marine engineering. PT Tri Ratna Diesel is a sister company of the Rutan Group, which has been experienced as a distributor of engine sales for more than 70 years, and PT Tri Ratna Diesel as a Sister Company is now engaged in three fields in which all three act as providers of engine production for distribution by PT Rutan , the three fields are: Machining Center, Shipyard and Diesel Engine.
			</p>
		</div>
		<div class="container" align="Center">
			<div class="row" align="Center">
				<div class="col-lg-4">
					<a href="<?php echo site_url();?>Home/unit_dem" data-toggle="tooltip" title="Diesel Engine" data-placement="top">
						<img class="zoom" src="<?php echo base_url('upload/index/l7.png');?>" width ="250px" height="250px">
						<h3>Diesel Engine</h3>
					</a>
				</div>
				<div class="col-lg-4">
					<a href="<?php echo site_url();?>Home/unit_sm" data-toggle="tooltip" title="Machining Center" data-placement="top">
						<img class="zoom" src="<?php echo base_url('upload/index/l8.png');?>"  width ="250px" height="250px">
						<h3>Machining Center</h3>
					</a>
				</div>
				<div class="col-lg-4">
					<a href="<?php echo site_url();?>Home/unit_mc" data-toggle="tooltip" title="Shipyard" data-placement="top">
						<img class="zoom" src="<?php echo base_url('upload/index/l6.png');?>"  width ="250px" height="250px">
						<h3>Shipyard</h3>
					</a>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- End Section Welcome -->

<!-- Video Section -->
<section class="video-section spad">
	<div class="container" align="Center">
		<iframe width="78%" height="500px" src="https://www.youtube.com/embed/jnshui0FsNk" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
	</div>
	<br><br><br><br>
	<div class="container">
		<div class="team-text" style="font-family: Segoe UI; letter-spacing: 4px; text-align: center; color: #0f80b5; font-size: 50px;">
			<font color="#040133"><b>OUR </font> </b>CLIENT
			<!-- <img src="<?php echo base_url('upload/garis.jpg');?>"> -->
		</div>
		<br><br>
		<div id="client-carousel" class="client-slider owl-carousel">
			<?php foreach ($index as $key) { ?>
			<div style="width:200px; height: 200px;">
				<a href="<?php echo site_url();?>Home/client" data-toggle="tooltip" title="<?php echo $key['nama']?>" data-placement="top">
					<img src="<?php echo site_url();?>upload/client/<?php echo $key['images'];?>" style="width: 90%; height: 90%" >
				</a>
			</div>
			<?php } ?>
		</div>
	</div>
</section>
<!-- Video section end  -->
</body>
	
<!--====== Javascripts & Jquery ======-->
<?php $this->load->view('user_en/layout/footer.php');?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
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
<script>
	$(document).ready(function(){
	  $('[data-toggle="tooltip"]').tooltip();   
	});
</script>
</html>
