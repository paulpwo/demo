
<!-- CONTACT
================================================== -->
<section id="contact-page" class="maincolorbg">
<div class="container">
	<div class="starter-template">
		<h1>Contacto</h1>
		<div class="smallsep">
		</div>
		<p class="lead">
			 Nuestros equipos de soporte están listos para ayudarle<br/>
			 con todas sus preguntas técnicas relacionadas con el producto.
		</p>
	</div>
	<form id="contact" name="contact" method="post" action="email.php">
		<fieldset>
			<div class="row">
				<div class="col-md-4 wow fadeIn animated animated" data-wow-delay="0.1s" data-wow-duration="2s">
					<label for="name" id="name">Nombre<span class="required">*</span></label>
					<input type="text" name="name" id="name" size="30" value="" required/>
				</div>
				<div class="col-md-4 wow fadeIn animated" data-wow-delay="0.3s" data-wow-duration="2s">
					<label for="email" id="email">Email<span class="required">*</span></label>
					<input type="text" name="email" id="email" size="30" value="" required/>
				</div>
				<div class="col-md-4 wow fadeIn animated" data-wow-delay="0.5s" data-wow-duration="2s">
					<label for="phone" id="phone">Teléfono</label>
					<input type="text" name="phone" id="phone" size="30" value=""/>
				</div>
			</div>
			<div class="wow fadeIn animated" data-wow-delay="0.8s" data-wow-duration="1.5" style="margin-top:15px;">
				<label for="Message" id="message">Mensaje<span class="required">*</span></label>
				<textarea name="message" id="message" required></textarea>
			</div>
			<div class="wow fadeIn animated" data-wow-delay="1s" data-wow-duration="2s">
				<input id="submit" type="submit" name="submit" value="Send"/>
			</div>
		</fieldset>
	</form>
	<div id="result"></div>
	
	
	<div id="success" class="alert alert-success alert-dismissible" role="alert" >
				
		<p style="margin-top:20px;">
			
			 Tu mensaje fue enviado!
		</p>
		
	</div>
	<div id="error" class="alert alert-danger alert-dismissible" role="alert" >
		<span>
		<p>
			 Error!.
		</p>
		</span>
	</div>
</div>
</section>
