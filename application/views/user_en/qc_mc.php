<?php
	require_once ('vendor/autoload.php');
	use \Statickidz\GoogleTranslate;
?>
<!DOCTYPE html>
<html lang="zxx">
<head>
	<title>QUALITY CONTROL MACHINING CENTER | PT Tri Ratna Diesel Indonesia</title>
	<?php $this->load->view('user_en/layout/header.php');?>
	<style>
		* {
		  box-sizing: border-box;
		}

		body {
		  margin: 0;
		}

		*-----*/

		* {box-sizing: border-box;}

		.img {
		  position: relative;
		}

		.image {
		  display: block;
		  width: 100%;
		  height: auto;
		}

		.overlay {
		  position: absolute; 
		  bottom: 0; 
		  background: rgb(0, 0, 0);
		  background: rgba(0, 0, 0, 0.5); /* Black see-through */
		  color: #f1f1f1; 
		  width: 100%;
		  transition: .5s ease;
		  opacity:0;
		  color: white;
		  font-size: 20px;
		  padding: 20px;
		  text-align: center;
		}

		.img:hover .overlay {
		  opacity: 1;
		}


		.header {
		  text-align: center;
		  padding: 32px;
		}

		.row {
		  display: -ms-flexbox; /* IE10 */
		  display: flex;
		  -ms-flex-wrap: wrap; /* IE10 */
		  flex-wrap: wrap;
		  padding: 0 4px;
		}

		/* Create four equal columns that sits next to each other */
		/*.column {
		  -ms-flex: 25%; /* IE10 */
		  flex: 25%;
		  max-width: 50%;
		  padding: 0 4px;
		}*/

		/*.column img {
		  margin-top: 8px;
		  vertical-align: middle;
		  width: 100%;
		}*/

		/* Responsive layout - makes a two column-layout instead of four columns */
		@media screen and (max-width: 800px) {
		  .column {
		    -ms-flex: 50%;
		    flex: 50%;
		    max-width: 50%;
		  }
		}

		/* Responsive layout - makes the two columns stack on top of each other instead of next to each other */
		@media screen and (max-width: 600px) {
		  .column {
		    -ms-flex: 100%;
		    flex: 100%;
		    max-width: 100%;
		  }

	</style>
</head>
<body>
	
<!-- Page top section  -->
<section class="page-top-section set-bg" data-setbg="<?php echo base_url('upload/profile/qc_dem.png');?>">
</section>
<!-- Page top section end  -->

<!-- Services section  -->
<section class="services-section">
	<div class="our-warp">
		<div class="container" align="Center"><br><br>
			<h2 style="font-family: Segoe UI Light; color: #000066; font-size: 50px;"><b>QUALITY CONTROL</b></h2>
		</div><br>
		<div  class="container" style="padding-left: 70px; padding-right: 70px; font-family:  Segoe UI Light; font-size: 22px" align="Center">
			<ol>
			<?php
				$source = 'id';
				$target = 'en';
				$text = 'Untuk menjaga hasil agar tetap berkualitas, kami selalu melakukan pengecekan ulang mulai dari bahan kimia yang digunakan, sifat-sifat mekanik, sifat-sifat fisik, dan dimensinya.';

				$trans = new GoogleTranslate();
				$result = $trans->translate($source, $target, $text);

				echo $result;
			?>
			</ol>
			<img src="<?php echo base_url('upload/grss.png');?>">
		</div>
	</div>
</section><br>
<!-- Services section end  -->

<!-- Section QC -->
<section class="services-section" >
<div class="container" >
	<h2 style="font-family: Segoe UI Light; "><img src="<?php echo base_url('upload/qc/lk.png');?>" width="30px" height="30px" > CMM</h2><br>
	<div class="col-lg-12">
	<div class="row"> 
		<div class="column" style="-ms-flex: 25%; flex: 25%; max-width: 50%; padding: 0 4px;">
			<div class="img" style="margin-top: 8px;  vertical-align: middle;  width: 100%;">
	    		<img src="<?php echo base_url('upload/qc/cmm.jpg');?>" style="width:100%">
	    	<div class="overlay"><ol style="font-family: Calibri; color: white; font-size: 30px;">CMM CONTURA G2(CORL ZEISS)</ol><p>Capacity : 700/1000/600 (0.0001)</p></div>
			</div>
		</div>		  
		<div class="column" style="-ms-flex: 25%; flex: 25%; max-width: 50%; padding: 0 4px;">
	  		<div class="img" style="margin-top: 8px;  vertical-align: middle;  width: 100%;">
	    		<img src="<?php echo base_url('upload/qc/cmm3.jpg');?>" style="width:100%">
	    		<div class="overlay"><ol style="font-family: Calibri; color: white; font-size: 30px;">CMM CONTURA G2(CORL ZEISS)</ol><p>Capacity : 700/1000/600 (0.0001)</p></div>
			</div><br>
			<div class="img" style="margin-top: 8px;  vertical-align: middle;  width: 100%;">
	    		<img src="<?php echo base_url('upload/qc/cmm22.jpg');?>" style="width:100%">
	    		<div class="overlay"><ol style="font-family: Calibri; color: white; font-size: 30px;">CMM CONTURA G2(CORL ZEISS)</ol><p>Capacity : 700/1000/600 (0.0001)</p></div>
			</div>
		</div>
	</div><br>
	<img src="<?php echo base_url('upload/biru.jpg');?>"><br><br>
	<h2 align="left" style="font-family: Segoe UI Light; "><img src="<?php echo base_url('upload/qc/lk.png');?>" width="30px" height="30px" >
	<?php
		$source = 'id';
		$target = 'en';
		$text = 'ALAT UKUR ';

		$trans = new GoogleTranslate();
		$result = $trans->translate($source, $target, $text);

		echo $result;
	?>
	</h2>
	<p style="padding-left: 35px; font-family: Segoe UI Light; color: black; font-size: 18px;">
	<?php
		$source = 'id';
		$target = 'en';
		$text = 'Untuk memberikan hasil yang sesuai permintaan, kami menyediakan alat ukur yang terbaik, dengan ketelitian akurasi yang tinggi';

		$trans = new GoogleTranslate();
		$result = $trans->translate($source, $target, $text);

		echo $result;
	?>
	</p>
	<div class="col-lg-12">
	<div class="row"> 
		<div class="column" style="-ms-flex: 25%; flex: 25%; max-width: 50%; padding: 0 4px;">
			<div class="img" style="margin-top: 8px;  vertical-align: middle;  width: 100%;">
	    		<img src="<?php echo base_url('upload/qc/au1.jpg');?>" style="width:100%; height: 200px">
	    	<div class="overlay"><ul style="font-family: Calibri; color: white; font-size: 20px;">SKEKMAT/VERNIEW CALIPER (MITUTOYO)</ul></div>
			</div>
			<div class="img" style="margin-top: 8px;  vertical-align: middle;  width: 100%;">
	    		<img src="<?php echo base_url('upload/qc/auu3.jpg');?>" style="width:100%; height: 200px">
	    		<div class="overlay"><ol style="font-family: Calibri; color: white; font-size: 30px;">MICROMETER INSIDE (MITUTOYO)</ol></div>
			</div>
		</div>		  
		<div class="column" style="-ms-flex: 25%; flex: 25%; max-width: 50%; padding: 0 4px;">
	  		<div class="img" style="margin-top: 8px;  vertical-align: middle;  width: 100%;">
	    		<img src="<?php echo base_url('upload/qc/au2.png');?>" style="width:100%; height: 200px">
	    		<div class="overlay"><ol style="font-family: Calibri; color: white; font-size: 20px;">GEAR TOOTH MICROMETER (MITUTOYO)</ol></div>
			</div><br>
			<div class="img" style="margin-top: 8px;  vertical-align: middle;  width: 100%;">
	    		<img src="<?php echo base_url('upload/qc/au4.jpg');?>" style="width:100%; height: 200px">
	    		<div class="overlay"><ol style="font-family: Calibri; color: white; font-size: 20px;">BLADE MICROMETER (MITUTOYO)</ol></div>
			</div>
		</div>
	</div>
<br><br> <img src="<?php echo base_url('upload/biru.jpg');?>"><br><br><br><br>
</section>
<!-- Section QC end -->
</body>
<?php $this->load->view('user_en/layout/footer.php');?>
</html>
