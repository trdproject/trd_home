<?php
	require_once ('vendor/autoload.php');
	use \Statickidz\GoogleTranslate;
?>
<!DOCTYPE html>
<html lang="zxx">
<head>
	<title>Event | PT Tri Ratna Diesel Indonesia</title>
	<?php $this->load->view('user_en/layout/header.php');?>
	<style>
		.label {
		  color: white;
		  padding: 4px;
		  padding-left: 12px;
		  padding-right: 12px;
		  font-family: Segoe UI Light;
		}
		.info {background-color: #0f2b6b;} /* Blue */
	</style>

</head>
<body>

<!-- Page top section  -->
<section class="page-top-section set-bg" data-setbg="<?php echo base_url('assets/user/img/page-top-bg/a.jpg');?>">
</section>
<!-- Page top section end  -->

<!-- Blog section  -->
<section class="blog-section spad">
	<div class="container">
		<div class="row">
			<div class="col-lg-4 col-md-6 sidebar order-2 order-lg-1">
				<div class="sb-widget" id="prefetch">
					<form id="form_search" class="sb-search" method="post">
						<input type="text" placeholder="Search" name="search_data" id="search_data" onkeyup="ajaxSearch()";>
						<div id="suggestions">
							<div id="autoSuggestionsList">
								<button id="suggestions"><i class="fa fa-search"></i></button>
							</div>
						</div>
					</form>
				</div><br><br>
				<div class="sb-widget">
					<h2 class="sb-title">Other Event</h2>
					<div class="recent-post">
						<?php foreach ($list as $data) { ?>
						<div class="rp-item">
							<a href="<?php echo site_url();?>Home/detail_event/<?php echo $data['id_event'];?>">
								<img src="<?php echo base_url();?>upload/media/<?php echo $data['file_name']?>" alt="" height="99px" width="99px">
								<div class="rp-text">
									<p>
										<?php
											$source = 'id';
											$target = 'en';
											$text = $data['title'];

											$trans = new GoogleTranslate();
											$result = $trans->translate($source, $target, $text);

											echo $result;
										?>
									</p>
									<span class="label info" style="font-size: 12px;"><?php echo date('M d, Y',  strtotime($data['date_event']))?></span>
								</div>
							</a>
						</div>
						<?php } ?>
					</div>
				</div>
			</div>
			<div class="col-lg-8 order-1 order-lg-2">
				<?php foreach ($event as $key) { ?>
				<div class="blog-post">
					<div class="blog-thumb set-bg" data-setbg="<?php echo base_url();?>upload/media/<?php echo $key['file_name'];?>">
						<div class="blog-date"><?php echo date('M d, Y',  strtotime($key['date_event']))?></div>
					</div>
					<h2 style="font-family: Segoe UI Light; ">
						<?php
							$source = 'id';
							$target = 'en';
							$text = $key['title'];

							$trans = new GoogleTranslate();
							$result = $trans->translate($source, $target, $text);

							echo $result;
						?>
					</h2>
					<a href="<?php echo site_url();?>English/detail_event/<?php echo $key['id_event'];?>" class="site-btn sb-light-dark">details</a>
				</div>
				<?php } ?>
			</div>
		</div>
	</div>
</section>
<!-- Blog section end  -->

</body>

<!--====== Javascripts & Jquery ======-->
<?php $this->load->view('user_en/layout/footer.php');?>
<script>
	$(document).ready(function(){
	    $('.zoom').hover(function() {
	        $(this).addClass('transisi');
	    }, function() {
	        $(this).removeClass('transisi');
	    });
	});  
</script>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

        <!-- start (JS code) -->
        <script type="text/javascript">
            function ajaxSearch()
            {
                var input_data = $('#search_data').val();

                if (input_data.length === 0)
                {
                    $('#suggestions').hide();
                }
                else
                {

                    var post_data = {
                        'search_data': input_data,
                        '<?php echo $this->security->get_csrf_token_name(); ?>': '<?php echo $this->security->get_csrf_hash(); ?>'
                    };

                    $.ajax({
                        type: "POST",
                        url: "<?php echo base_url(); ?>Home/autocomplete/",
                        data: post_data,
                        success: function (data) {
                            // return success
                            if (data.length > 0) {
                                $('#suggestions').show();
                                $('#autoSuggestionsList').addClass('auto_list');
                                $('#autoSuggestionsList').html(data);
                            }
                        }
                    });

                }
            }
        </script>
        <!-- end (JS code) -->
</html>
