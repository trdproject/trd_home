<!DOCTYPE html>
<html lang="zxx">
<head>
	<title>Diesel Engine | PT Tri Ratna Diesel Indonesia</title>
	<?php $this->load->view('user/layout/header.php'); ?>
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
  <div class="team-text"  style="background-color: #010321;" align="Center">
    <h2 style="color:white; font-family: Segoe UI Light; font-size: 40px; padding-top: 15px; padding-bottom: 15px;"><strong>APLIKASI DIESEL ENGINE</strong></h2>
  </div>
  <div class="content" align="center">
    <img align="" src="<?php echo base_url('upload/apl.png');?>" style="width: 800px; height: 600px;">
  </div><br><br><br><br>
  <!-- element -->
    <div class="team-text"  style="background-color: #010321;" align="Center">
      <h2 style="color:white; font-family: Segoe UI Light; font-size: 40px; padding-top: 15px; padding-bottom: 15px;"><strong>DIESEL ENGINE</strong></h2>
    </div>
    <div class="row">
      <div class="col-lg-6">
        <!-- -------- -->
        <div id="accordion" class="accordion-area">
          <div class="panel">
            <div class="panel-header" id="headingThree">
                <button class="panel-link" data-toggle="collapse" data-target="#collapse3" aria-expanded="false" aria-controls="collapse3" style="background-color:#0e0c31; "><h2 class="sb-title" style="color: white; font-size: 30px;">Diamond Engine</h2></button>
            </div>
            <div id="collapse3" class="collapse" aria-labelledby="headingThree" data-parent="#accordion" >
              <div class="tab-element" style="margin-left: 35px;">
                <ul class="nav nav-tabs" id="myTa b" role="tablist">
              <?php if($product->num_rows() > 0): ?>
                <?php foreach ($product->result() as $key) { ?>
                  <li class="nav-item"  style="padding-top: 20px;">
                    <a class="nav-link" data-toggle="tab" href="#<?php echo $key->id_product;?>" role="tab" aria-controls="<?php echo $key->id_product;?>" aria-selected="true">
                      <img class="demo cursor" src="<?php echo base_url();?>upload/product/<?php echo $key->images; ?>" style="width: 60px; height: 50px;">
                    </a>
                  </li>
                <?php } ?>
              <?php endif; ?>
                </ul>
                <div class="tab-content" id="myTabContent" >
                  <!-- single tab content -->
                <?php if($product1->num_rows() > 0): ?>
                   <?php foreach ($product->result() as $key) { ?>
                  <div class="tab-pane fade" id="<?php echo $key->id_product;?>" role="tabpanel" aria-labelledby="<?php echo $key->id_product;?>">
                     <a href="<?php echo base_url();?>upload/product/<?php echo $key->images; ?>" title="<?php echo $key->nama;?>" class="MagicZoom" rel="zoom-id:zoom;opacity-reverse:true;">
                      <img class="zoom" src="<?php echo base_url();?>upload/product/<?php echo $key->images; ?>" style="width:100%">
                    </a><br>
                    <div class="info-box">
                      <h4 style="font-family: Segoe UI; color: #040133; text-align: center;"><?php echo $key->nama;?></h4>
                      <p style="font-family: Segoe UI Light; color: #040133;  text-align: center; font-size: 14px;"><?php echo $key->deskripsi;?></p>
                    </div>
                  </div>
              	<?php } ?>
              <?php endif; ?>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- ----- -->
      </div>
      <!-- ------------------- -->
      <div class="col-lg-6">
        <div id="accordion" class="accordion-area">
          <div class="panel">
            <div class="panel-header" id="headingOne">
                <button class="panel-link" data-toggle="collapse" data-target="#collapse1" aria-expanded="false" aria-controls="collapse1" style="background-color:#0e0c31; "><h2 class="sb-title" style="color: white; font-size: 30px;">Ratna Engine</h2></button>
            </div>
            <div id="collapse1" class="collapse" aria-labelledby="headingOne" data-parent="#accordion" >
              <div class="tab-element" style="margin-left: 35px;">
                <ul class="nav nav-tabs" id="myTab" role="tablist" style="padding-top: 20px;">
              <?php if($product1->num_rows() > 0): ?>
                <?php foreach ($product1->result() as $key) : ?>
                  <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#<?php echo $key->id_product;?>" role="tab" aria-controls="<?php echo $key->id_product;?>" aria-selected="true">
                      <img class="demo cursor" src="<?php echo base_url();?>upload/product/<?php echo $key->images; ?>" style="width: 60px; height: 50px;">
                    </a>
                  </li>
                 <?php endforeach; ?>
                 <?php endif; ?>
                </ul>
                <div class="tab-content" id="myTabContent">
                  <!-- single tab content -->
              <div class="tab-content" id="myTabContent">
                  <!-- single tab content -->
              <?php if($product1->num_rows() > 0): ?>
                 <?php foreach ($product1->result() as $key) : ?>
                  <div class="tab-pane fade" id="<?php echo $key->id_product;?>" role="tabpanel" aria-labelledby="<?php echo $key->id_product;?>">
                     <a href="<?php echo base_url();?>upload/product/<?php echo $key->images; ?>" title="Diesel" class="MagicZoom" rel="zoom-id:zoom;opacity-reverse:true;">
                      <img class="zoom" src="<?php echo base_url();?>upload/product/<?php echo $key->images; ?>" style="width:100%">
                    </a><br>
                    <div class="info-box">
                      <h4 style="font-family: Segoe UI; color: #040133; text-align: center;"><?php echo $key->nama;?></h4>
                      <p style="font-family: Segoe UI Light; color: #040133;  text-align: center; font-size: 14px;"><?php echo $key->deskripsi;?></p>
                    </div>
                  </div>
                 <?php endforeach; ?>
                 <?php endif; ?>
                </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
  </div>
</div>
</section>
<!-- Elements section end  -->
</body>

<?php $this->load->view('user/layout/footer.php'); ?>
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
<script>
    function goBack() {
        window.history.back();
    }
</script>	
</html>
