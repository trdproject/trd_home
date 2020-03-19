<?php
	require_once ('vendor/autoload.php');
	use \Statickidz\GoogleTranslate;
?>

<!DOCTYPE html>
<html lang="zxx">
<head>
	<title>Event | PT Tri Ratna Diesel Indonesia</title>
	<?php $this->load->view('user_en/layout/header.php'); ?>
</head>
<body>

<!-- Page top section  -->
<section class="page-top-section set-bg" data-setbg="<?php echo base_url('assets/user/img/page-top-bg/a.jpg');?>">
</section>
<!-- Page top section end  -->

<!-- Event section  -->
<section class="services-section">
	<div class="our-warp">
		<div class="container" align="left"><br><br>
			<h2 style="font-family: Segoe UI Light; color: #02213d; font-size: 40px; "><b>
			<?php
				$source = 'id';
				$target = 'en';
				$text = $data->title;

				$trans = new GoogleTranslate();
				$result = $trans->translate($source, $target, $text);

				echo $result;
				?>
			</b></h2>
			<p style="font-family: Segoe UI Light; color: #02213d; font-size: 16px; text-align: left;"><i class='fa fa-calendar' style="color: #3181cb;"></i>&ensp;&ensp;<?php echo date('d F Y',  strtotime($data->date_event))?></p>
			<img src="<?php echo base_url('upload/gariss.jpg');?>">
		</div><br>
		<div class="container">
			<div class="row" >
				<?php foreach ($detail as $key) { ?>
				<div class="col-md-6">
					<div class="team-member">
						<a href="<?php echo base_url();?>upload/media/<?php echo $key['file_name']?>" class="MagicZoom" rel="zoom-id:zoom;opacity-reverse:true;">
							<img src="<?php echo base_url();?>upload/media/<?php echo $key['file_name']?>" alt="" class="zoom">
						</a>
					</div>
				</div>
				<?php } ?>
			</div>
		</div>
	</div>
</section>
	<br>
	
</body>
<?php $this->load->view('user_en/layout/footer.php'); ?>
</html>
