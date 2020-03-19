<!-- Footer section -->
<footer class="footer-section spad">
	<div class="container">
		<div class="row">
			<div class="col-lg-8 col-md-6">
				<div class="footer-widget about-widget">
					<img src="<?php echo base_url('assets/user/img/download.png');?>" width="110px" heigh="110px" align="left"><br>
					<h2 style="color: #DAA520; font-family: Segoe UI Black ;letter-spacing: 2px; text-transform: uppercase;" >PT Tri Ratna Diesel</h2>
					<h4 style="color: white; font-family: Segoe UI Black; letter-spacing: 6px; margin-left: 5.5cm; text-transform: uppercase;">Indonesia</h4>

					<br><br>
					<div class="footer-social" style="margin-left: 5cm;">
						<a href="https://www.facebook.com/triratnadieselindonesia/"><i class="fa fa-facebook"></i></a>&ensp;
						<a href="https://www.instagram.com/triratnadiesel/"><i class="fa fa-instagram"></i></a>&ensp;
						<a href=""><i class="fa fa-dribbble"></i></a>&ensp;
						<a href="https://www.youtube.com/channel/UClgr02PamnphOU2YYUOhKJQ"><i class="fa fa-youtube"></i></a>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-6 col-sm-7">
				<div class="footer-widget">
					<h2 class="fw-title">Hubungi Kami</h2>
					<div class="footer-info-box">
						<div class="fib-icon">
							<img src="<?php echo base_url('assets/user/img/icons/map-marker.png');?>" alt="" class="">
						</div>
						<div class="fib-text">
							<p>Jl. RayaBambe KM. 19,3, Bambe, Driyorejo, Sarirejo, Bangkingan, Kec. Lakarsantri, Kabupaten Gresik, Jawa Timur 61177</p>
						</div>
					</div>
					<div class="footer-info-box">
						<div class="fib-icon">
							<img src="<?php echo base_url('assets/user/img/icons/phone.png');?>" alt="" class="">
						</div>
						<div class="fib-text">
							<p>(031) 7508550<br>info@triratnadiesel.co.id</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="footer-buttom">
		<div class="container">
		<div class="row">
			<div class="col-lg-12 order-2 order-lg-1 p-0">
				<div class="copyright" align="Center"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> PT Tri Ratna Diesel Indonesia
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></div>
			</div>
		</div>
		</div>
	</div>
</footer>
<!-- Footer section end -->

<!--====== Javascripts & Jquery ======-->
<script src="<?php echo base_url('assets/user/js/jquery-3.2.1.min.js');?>"></script>
<script src="<?php echo base_url('assets/user/js/bootstrap.min.js');?>"></script>
<script src="<?php echo base_url('assets/user/js/jquery.slicknav.min.js');?>"></script>
<script src="<?php echo base_url('assets/user/js/owl.carousel.min.js');?>"></script>
<script src="<?php echo base_url('assets/user/js/circle-progress.min.js');?>"></script>
<script src="<?php echo base_url('assets/user/js/jquery.magnific-popup.min.js');?>"></script>
<script src="<?php echo base_url('assets/user/js/main.js');?>"></script>
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