<?php
// TODO: update body class in CSS to use page-template-contact or so
get_header();
?>
		
		<!-- Main -->
			<article id="main">

				<header class="special container">
					<span class="icon fa-envelope"></span>
					<h2>Get In Touch</h2>
					<p>Use the form below to give /dev/null a piece of your mind.</p>
				</header>
					
				<!-- One -->
					<section class="wrapper style4 special container small">
					
						<!-- Content -->
							<div class="content">
								<form>
									<div class="row half no-collapse-1">
										<div class="6u">
											<input type="text" name="name" placeholder="Name" />
										</div>
										<div class="6u">
											<input type="text" name="email" placeholder="Email" />
										</div>
									</div>
									<div class="row half">
										<div class="12u">
											<input type="text" name="subject" placeholder="Subject" />
										</div>
									</div>
									<div class="row half">
										<div class="12u">
											<textarea name="message" placeholder="Message" rows="7"></textarea>
										</div>
									</div>
									<div class="row">
										<div class="12u">
											<ul class="buttons">
												<li><a href="#" class="button special">Send Message</a></li>
											</ul>
										</div>
									</div>
								</form>
							</div>
							
					</section>
				
			</article>

<?php get_footer() ?>