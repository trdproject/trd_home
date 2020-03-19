<!DOCTYPE html>
<html lang="zxx">
<head>
	<title>Karir | PT Tri Ratna Diesel Indonesia</title>
	<?php $this->load->view('user/layout/header.php')?>
</head>
<body>
<!-- Page top section  -->
<section class="page-top-section set-bg" data-setbg="<?php echo base_url('assets/user/img/page-top-bg/a.jpg');?>">
</section>
<!-- Page top section end  -->
	
<!-- Content section -->
<section class="elements-section spad" >
	<div class="container">
		<div class="client-text">
			<h2 style="color:  #000066; font-family: Segoe UI;"><b>REKRUTMEN</b><br>PT TRI RATNA DIESEL INDONESIA</h2>
		</div>
		<!-- element -->
		<div class="element">
			<div class="row"><div class="col-xl-12">
			<!-- Accordions -->
			<div id="accordion" class="accordion-area">
			<div class="panel">
				<div class="panel-header" id="headingOne">
					<button class="panel-link" data-toggle="collapse" data-target="#collapse1" aria-expanded="true" aria-controls="collapse1" style="background-color: #081135;"><h4 style="color: white;">Magang Kerja</h4></button>
				</div>
				<div id="collapse1" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
					<div class="panel-body"><br>
					<!-- awal -->
					<?php if ($magang == NULL ) {
						echo "<div class='alert' align='Center'>
								 <strong>Maaf, saat ini belum ada lowongan magang kerja. </strong>
							 </div>";
					} else {
						foreach ($magang as $key) {	?>
						<table style="width:90%" align="Center">
							<thead>
								<tr>
									<th><i class="fa fa-user" style="color:	#FFD700; font-size:24px"></i></th>
									<th><ul style="color: #483D8B; font-family: Segoe UI Light; font-size: 30px;"><?php echo $key['job_position']; ?></ul></th>
									<th></th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td><i class="fa fa-unlink" style="color:	#FFD700; font-size:24px"></i></td>
									<td><ul style=" font-family: Corbel;"><?php echo $key['job_desc'];?></ul></td>
								</tr>
							</tbody>
							<tbody>
								<td><i class="fa fa-map-marker" style="color:	#FFD700; font-size:24px"></i></td>
								<td><ul style="font-family: Corbel;"><?php echo $key['job_location']?></ul></td>
							</tbody>
							<tbody>
								<td><i class="fa fa-calendar" style="color:	#FFD700; font-size:24px"></i></td>
								<td><ul style="font-family: Corbel;"><?php echo date('d F Y',  strtotime($key['date_create']))?> - <?php echo date('d F Y',  strtotime($key['date_close'])) ?></ul></td>
							</tbody>
							<tbody>
								<td><i class="fa fa-inbox" style="color:	#FFD700; font-size:24px"></i></td>
								<td><a style="font-family: Corbel;" href="https://mail.google.com/mail/u/0/#inbox?compose=CllgCJqVPGJkJNXdbTZXcJZpQdlnqCpfjbGxVldvtbWLjxNlRnvjkbghFthwWWrMbjdKSnrfnPg">recruitment@triratnadiesel.co.id</a></td>
							</tbody>
						</table><br>
						<?php } }?>
						<!-- akhir -->
					</div>
				</div>
			</div>
			<div class="panel">
				<div class="panel-header" id="headingTwo">
					<button class="panel-link" data-toggle="collapse" data-target="#collapse2" aria-expanded="false" aria-controls="collapse2" style="background-color: #081135"><h4 style="color: white;">Lowongan Pekerjaan</h4></button>
				</div>
				<div id="collapse2" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
					<div class="panel-body"><br>
						<!-- mulai -->
						<?php if ($karir == NULL) {
							echo "<div class='alert' align='Center'>
								<strong>Maaf, saat ini belum ada lowongan pekerjaan. </strong>
							</div>";
						} else {
						foreach ($karir as $key) { ?>
						<table style="width:90%" align="Center">
							<thead>
								<tr>
									<th><i class="fa fa-user" style="color:	#FFD700; font-size:24px"></i></th>
									<th><ul style="color: #483D8B; font-family: Segoe UI Light; font-size: 30px;"><?php echo $key['job_position']; ?></ul></th>
									<th></th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td><i class="fa fa-unlink" style="color:	#FFD700; font-size:24px"></i></td>
									<td><ul style=" font-family: Segoe UI Light;"><?php echo $key['job_desc']; ?></ul></td>
								</tr>
							</tbody>
							<tbody>
								<td><i class="fa fa-map-marker" style="color:	#FFD700; font-size:24px"></i></td>
								<td><ul style="font-family: Segoe UI Light;"><?php echo $key['job_location']?></ul></td>
							</tbody>
							<tbody>
								<td><i class="fa fa-calendar" style="color:	#FFD700; font-size:24px"></i></td>
								<td><ul style="font-family: Segoe UI Light;"><?php echo date('d F Y',  strtotime($key['date_create']))?> - <?php echo date('d F Y',  strtotime($key['date_close'])) ?></ul></td>
							</tbody>
							<tbody>
								<td><i class="fa fa-inbox" style="color:	#FFD700; font-size:24px"></i></td>
								<td><a style="font-family: Segoe UI Light;" href="https://mail.google.com/mail/u/0/#inbox?compose=CllgCJqVPGJkJNXdbTZXcJZpQdlnqCpfjbGxVldvtbWLjxNlRnvjkbghFthwWWrMbjdKSnrfnPg">recruitment@triratnadiesel.co.id</a></td>
							</tbody>
						</table>
						<br><br>
						<?php } }?>
						<!-- akhir -->
					</div>
				</div>
			</div>
		</div>
	</div></div>
</div></div>
</section>
<!-- Content section end  -->
</body>

<!--====== Javascripts & Jquery ======-->
<?php $this->load->view('user/layout/footer.php');?>
<style type="text/css">
  #outtable{
  	padding: 20px;
  	border:1px solid #e3e3e3;
  	width:600px;
  	border-radius: 5px;
  }

  .short{
  	width: 50px;
  }

  .normal{
  	width: 150px;
  }
  table{
  	border-collapse: collapse;
  	font-family: arial;
  	color:#5E5B5C;
  }

  thead th{
  	text-align: left;
  	padding: 10px;
  }

  tbody td{
  	border-top: 1px solid #e3e3e3;
  	padding: 10px;
  }

  tbody tr:nth-child(even){
  	background: #F6F5FA;
  }

  tbody tr:hover{
  	background: #EAE9F5
  }
</style>
	
</html>
