<!DOCTYPE html>
<html lang="zxx">
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>Profil | PT Tri Ratna Diesel Indonesia</title>
	<?php $this->load->view('user/layout/header.php');?>
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
<div id="google_translate_element2"></div>
<!-- Body section start -->
<body data-spy="scroll" data-target="#myScrollspy" data-offset="1">
<!-- Blog section  -->
<section class="blog-section spad">
	<div class="container">
		<div class="row">
			<div class="col-lg-4 col-md-6 sidebar order-2 order-lg-1">
				<div class="sb-widget make-me-sticky">
					<h2 class="sb-title">Tentang Kami</h2>
					<ul>
						<li><a href="#profil">Profil Perusahaan</a></li>
	                    <li><a href="#visimisi">Visi Misi</a></li>
	                    <li><a href="#corevalue">Nilai Perusahaan</a></li>
	                    <li><a href="#client">Klien Kami</a></li>
					</ul>
				</div>
			</div>
			<!-- Menu profil -->
			<div class="col-lg-8 order-1 order-lg-2" >
				<!-- Menu profil -->
				<div class="class-profil" id="profil" style="padding-top: 50px;">
					<div class="about-text" id="profil">
						<h3 style="color: #0a3a66; font-family: Segoe UI Light; letter-spacing: 2px;"><?php echo $profil->judul; ?></h3><hr>
						<p style="font-family: Segoe UI Light; font-size: 18px; color: black; letter-spacing: 0.5px;" ><?php echo $profil->isi; ?></p>
					</div>
				</div><br><br><br>
				
				<!-- Menu visimisi -->
				<div class="class-visimisi" id="visimisi">
					<h3 style="color: #0a3a66; font-family: Segoe UI Light; letter-spacing: 2px;">VISI MISI PERUSAHAAN</h3><hr><br>
					<div class="element">
						<div class="row">
							<div class="col-xl-12">
								<div id="accordion" class="accordion-area">
									<div class="panel">
										<div class="panel-header" style="background-color: #010c2e;">
											<h2 style="font-family: Segoe UI Light; color: white; font-size: 25px; padding-top: 10px; padding-bottom: 10px; padding-left: 20px; letter-spacing: 3px;">VISI</h2>
										</div>
										<div style="margin-left: 20px; margin-right: 20px;">
											<p style="font-family: Segoe UI Light; color: black; font-size: 18px; letter-spacing: 0.5px;"><?php echo $visi->isi; ?></p>
										</div>
									</div>
									<div class="panel">
										<div class="panel-header" style="background-color: #010c2e;">
											<h2 style="font-family: Segoe UI Light; color: white; font-size: 25px; padding-top: 10px; padding-bottom: 10px; padding-left: 20px; letter-spacing: 3px;">MISI</h2>
										</div>
										<div style="margin-left: 20px; margin-right: 20px;">
											<p style="font-family: Segoe UI Light; color: black; font-size: 18px; letter-spacing: 0.5px;"><?php echo $misi->isi; ?></p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div><br><br><br>
				<!-- Menu Core Value -->
				<div class="class-corevalue" id="corevalue">
					<h3 style="color: #0a3a66; font-family: Segoe UI Light; letter-spacing: 2px;">NILAI PERUSAHAAN</h3>
					<hr><br>
					<div class="row">
						<div class="col-lg-12 col-md-12">
							<div class="service-item">
								<div class="si-head">
									<div class="si-icon">
										<img src="<?php echo base_url('assets/user/img/icons/wind-engine.png');?>" alt="">
									</div>
									<h5>Customer Focus</h5>
								</div>
								<p style="font-family: Segoe UI Light; font-size: 16px; ">Untuk melanjutkan eksistensi dari Perusahaan dengan cita-cita mulia menjadi pilihan utama bagi pelanggan, dengan harapan menjadi perusahaan yang paling dikagumi dan memberikan kesejahteraan bagi bangsa.</p>
							</div>
						</div>
						<div class="col-lg-12 col-md-12">
							<div class="service-item">
								<div class="si-head">
									<div class="si-icon">
										<img src="<?php echo base_url('assets/user/img/icons/cogwheel.png');?>" alt="">
									</div>
									<h5>Respect</h5>
								</div>
								<p style="font-family: Segoe UI Light; font-size: 16px;">Respek kepada setiap individu dengan fokus pengembangan yang terus menerus menjadi aset yang bermanfaat.</p>
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
								<p style="font-family: Segoe UI Light; font-size: 16px;">Selalu berusaha mencapai yang terbaik dari waktu ke waktu.</p>
							</div>
						</div>
						<div class="col-lg-12 col-md-12">
							<div class="service-item">
								<div class="si-head">
									<div class="si-icon">
										<img src="<?php echo base_url('assets/user/img/icons/cogwheel.png');?>" alt="">
									</div>
									<h5>Inovatif</h5>
								</div>
								<p style="font-family: Segoe UI Light; font-size: 16px;">Inovasi yang lebih baik, efisien dan efektif dalam pencapaian kerja yang menyenangkan dalam lingkungan maupun proses untuk memberikan hasil sempurna.</p>
							</div>
						</div>
						<div class="col-lg-12 col-md-12">
							<div class="service-item">
								<div class="si-head">
									<div class="si-icon">
										<img src="<?php echo base_url('assets/user/img/icons/wind-engine.png');?>" alt="">
									</div>
									<h5>Profesional</h5>
								</div>
								<p style="font-family: Segoe UI Light; font-size: 16px; ">Membuat dan menghasilkan produk yang aman dan bermanfaat untuk Pelanggan serta Insan Tri Ratna.</p>
							</div>
						</div>
					</div>
				</div><br><br><br>
				<!-- Menu client -->
				<div class="class-client" id="client">
					<h3 style="color: #0a3a66; font-family: Segoe UI Light; letter-spacing: 2px;">KLIEN KAMI</h3>
					<hr>
					<p style="font-family: Segoe UI Light; font-size: 18px; color: black;">Kami melayani dengan selalu mendengar dan memberikan solusi yang tepat, tentang apa yang dibutuhkan konsumen, sehingga produk yang didapatkan konsumen memang benar-benar sesuai kebutuhan, selain itu kami terus berusaha apa yang kami lakukan mampu memberikan dampak untuk perkembangan perusahaan atau bisnis tersebut, berikut beberapa klien yang sudah bekerja sama dalam menggunakan produk-produk kami :</p><br>
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
<?php $this->load->view('user/layout/footer.php'); ?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
<script type="text/javascript" src="http://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit2"></script>
<script type="text/javascript"> 
   function googleTranslateElementInit2() {
    new google.translate.TranslateElement(
    {
     pageLanguage: 'id',
     autoDisplay: false
    },

    'google_translate_element2');
   }

   function GTranslateFireEvent(element,event){
    try{
     if(document.createEventObject){
      var evt=document.createEventObject();
      element.fireEvent('on'+event,evt)
     }   
     else{
      var evt=document.createEvent('HTMLEvents');
      evt.initEvent(event,true,true);
      element.dispatchEvent(evt)
     }
    }
    catch(e){}
   }

   function doGTranslate(lang_pair){
    if(lang_pair.value)lang_pair=lang_pair.value;
    if(lang_pair=='')return;
     var lang=lang_pair.split('|')[1];
     var teCombo;
     var sel=document.getElementsByTagName('select');
    for(var i=0;i<sel.length;i++)
     if(sel[i].className=='goog-te-combo')teCombo=sel[i];
     if(document.getElementById('google_translate_element2')==null||document.getElementById('google_translate_element2').innerHTML.length==0||teCombo.length==0||teCombo.innerHTML.length==0)
     {
      setTimeout(function(){doGTranslate(lang_pair)},500)
     }
     else{
      teCombo.value=lang;GTranslateFireEvent(teCombo,'change');
      GTranslateFireEvent(teCombo,'change')
     }
   }
  </script>
</html>
