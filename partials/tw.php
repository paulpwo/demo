<!-- ABOUT
================================================== -->
<?php require_once 'twitter/consulta.php'; $int=0;	?>
<section class="testimonial graybg tw" id="clients-slider">

<div class="container">

	<div class="starter-template" style="padding-bottom:0px;">
		<h1>Twitter <i class="fa fa-twitter"></i></h1>
		<div class="smallsep">
		</div>
		
	</div>




	<div class="row">
			<div class="c12">
				<ul class="slides">
					

					<?php foreach ($results as $status) {
						
						if($int < 4) { ?>


								<li>
									<div class="slide-text">
										
											<h3><span class="uppercase"><a href="http://twitter.com/"<?php echo $status->user->screen_name ?>"></span></h3>
											<!--<img src="<?php //echo htmlspecialchars($status->user->profile_image_url) ?>"> -->
											<p>
												 <?php echo htmlspecialchars($status->user->name) ?>:
												 <a href=" <?php echo $status->entities->urls[0]->url; ?>" target="_blank">
												 <?php echo $status->text ?></a>
												<?php //echo Twitter::clickable($status) ?>
											</p>
											<small>at <?php echo date("j.n.Y H:i", strtotime($status->created_at)) ?></small>					
										
									</div>
								</li>

						<?php $int++; 
						}

					 } ?>
				</ul>
			</div>
	 </div>
</div>
</section>