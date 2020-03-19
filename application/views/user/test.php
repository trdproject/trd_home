<section class="team-section spad">
  <div class="container">
    <div class="team-text"  style="background-color: #010321;">
      <h2 style="color:white; font-family: Segoe UI Light; font-size: 40px; padding-top: 15px; padding-bottom: 15px;"><strong>PRODUK KAMI</strong></h2>
    </div>
    <div class="row"><?php foreach ($pdem as $key) { ?>
      <form method="get" action="<?php echo site_url();?>Home/detail_product2/<?php echo $key['id_product'];?>">
      <div class="col-md-4">
        <div class="team-member" align="Center">
          <img class="zoom" src="<?php echo site_url();?>upload/product/<?php echo $key['images']?>" width="250px" height="200px">
          <div class="member-info">
            <?php if ($key['id_product'] == 'DS-001' ) { ?>
              <a href="<?php echo site_url();?>product/<?php echo $key['id_product'];?>"> 
            <?php } else { ?>
              <a href="<?php echo site_url();?>productt/<?php echo $key['id_product'];?>"> 
            <?php } ?>
            <h3><?php echo $key["nama"] ?></h3></a>
          </div>
        </div>
      </div>
      <?php } ?>  
      </form>
      
    </div>
  </div>
</section>