
<!DOCTYPE html>
<html lang="zxx">
<head>
	<title>Diesel Engine | PT Tri Ratna Diesel Indonesia</title>
	<?php $this->load->view('user_en/layout/header.php'); ?>
	<style>
		/* Add a transparency effect for thumnbail images */
		.demo {
		  opacity: 0.6;
		}

		.active,
		.demo:hover {
		  opacity: 1;
		}
	</style>
</head>
<body>

<!-- Page top section  -->
<section class="page-top-section set-bg" data-setbg="<?php echo base_url('assets/user/img/page-top-bg/dm.jpg');?>">
</section>
<!-- Page top section end  -->

<!-- Elements section  -->
<section class="section spad">
	<div class="container">
		<div class="row">
			<div class="col-md-4">
				<div class="sb-widget">
						<h2 class="sb-title" >
						Other Product
						</h2>
						<div class="recent-post">
							<?php foreach ($lainnya as $key) { ?>
							<div class="rp-item">
								<?php if ($key['id_product'] == 'DS-001' ) { ?>
									<a href="<?php echo site_url();?>Home/detail_product/<?php echo $key['id_product'];?>"> 
								<?php } else { ?>
									<a href="<?php echo site_url();?>Home/detail_product2/<?php echo $key['id_product'];?>"> 
								<?php } ?>
									<img src="<?php echo base_url();?>upload/product/<?php echo $key['images'];?>" style="width: 100px; height: 70px;" alt="" ><br>
									<p style="font-size: 16px;"><?php echo $key['nama'];?></p>
								</a>
							</div>
							<?php } ?>
						</div>
					</div>
			</div>
			<div class="col-md-8" align="center">
				<div class="team-text"  style="background-color: #010321;" align="Center">
				<h2 style="color:white; font-family: Segoe UI Light; font-size: 40px; padding-top: 15px; padding-bottom: 15px;"><strong><?php echo $array->nama;?></strong>
				</h2>
			</div>
			<a href="<?php echo base_url();?>upload/product/<?php echo $array->images;?>" title="<?php echo $array->nama;?>" class="MagicZoom" rel="zoom-id:zoom;opacity-reverse:true;">
				<img class="zoom" align="center" src="<?php echo base_url();?>upload/product/<?php echo $array->images;?>" style="width: 500px; height: 400px; padding-top: 0px;">
			</a>
			<div class="info-box" style="margin-left: 30px; margin-right: 30px;">
	          <h4 style="font-family: Segoe UI; color: #040133; text-align: center;"><?php echo $array->deskripsi;?>
	          </h4>
	        </div>
			</div>
		</div>
	</div>
</section>
<!-- Elements section end  -->

</body>
	
<!--====== Javascripts & Jquery ======-->
<?php $this->load->view('user_en/layout/footer.php');?>
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
