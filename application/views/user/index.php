
<title>PT Tri Ratna Diesel indonesia</title>
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
<body>	
<div id="google_translate_element2"></div>
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
		<div class="team-text" style="color:#02325e; font-family: ; letter-spacing: 3px; font-size: 50px;">
			<strong style="text-transform: uppercase;">PT Tri Ratna Diesel</strong>
			<hr size="10px;" >
			<p style="font-family: Segoe UI Light; color: black; letter-spacing: 1px; padding-top: 20px;">PT Tri Ratna Diesel Indonesia adalah perusahaan yang bergerak dalam bidang permesinan pertanian, perkebunan,dan kelautan. PT Tri Ratna Diesel merupakan sister company dari Rutan Group, yang sudah berpengalaman sebagai distributor penjualan mesin tersebut lebih dari 70 tahun, dan PT Tri Ratna Diesel sebagai Sister Company kini bergerak dalam tiga bidang dimana ketiganya berperan sebagai penyedia hasil produksi mesin untuk didistribusikan oleh PT Rutan, ketiga bidang tersebut  yaitu : Machining Center, Shipyard dan Diesel Engine.</p>
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
			<font color="#040133"><b>KLIEN KAMI</b></font>
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
<!-- End Video Section -->

<?php $this->load->view('user/layout/footer.php');?>
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