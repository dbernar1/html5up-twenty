<?php
define( 'HTML5UP_USE_ALT_HEADER', true );
// TODO: update body class in CSS to use index/front-page or so, if needed
get_header();
?>

		<!-- Banner -->		
			<section id="banner">
				
				<!--
					".inner" is set up as an inline-block so it automatically expands
					in both directions to fit whatever's inside it. This means it won't
					automatically wrap lines, so be sure to use line breaks where
					appropriate (<br />).
				-->
				<div class="inner">
					
					<header>
						<h2>TWENTY</h2>
					</header>
					<p>This is <strong>Twenty</strong>, a free<br />
					responsive template<br />
					by <a href="http://html5up.net">HTML5 UP</a>.</p>
					<footer>
						<ul class="buttons vertical">
							<li><a href="#main" class="button fit scrolly">Tell Me More</a></li>
						</ul>
					</footer>
				
				</div>
				
			</section>
		
		<!-- Main -->
			<article id="main">

				<header class="special container">
					<span class="icon fa-bar-chart-o"></span>
					<h2>As this is my <strong>twentieth</strong> freebie for HTML5 UP<br />
					I decided to give it a really creative name.</h2>
					<p>Turns out <strong>Twenty</strong> was the best I could come up with. Anyway, lame name aside,<br />
					it's minimally designed, fully responsive, built on HTML5/CSS3/<strong>skel</strong>, 
					and, like all my stuff,<br />
					released for free under the <a href="http://html5up.net/license">Creative Commons Attribution 3.0</a> license. Have fun!</p>
				</header>
					
				<!-- One -->
					<section class="wrapper style2 container special-alt">
						<div class="row half">
							<div class="8u">
							
								<header>
									<h2>Behold the <strong>icons</strong> that visualize what you’re all about. or just take up space. your call bro.</h2>
								</header>
								<p>Sed tristique purus vitae volutpat ultrices. Aliquam eu elit eget arcu comteger ut fermentum lorem. Lorem ipsum dolor sit amet. Sed tristique purus vitae volutpat ultrices. eu elit eget commodo. Sed tristique purus vitae volutpat ultrices. Aliquam eu elit eget arcu commodo.</p>
								<footer>
									<ul class="buttons">
										<li><a href="#" class="button">Find Out More</a></li>
									</ul>
								</footer>
							
							</div>
							<div class="4u skel-cell-important">
							
								<ul class="feature-icons">
									<li><span class="icon fa-clock-o"><span class="label">Feature 1</span></span></li>
									<li><span class="icon fa-volume-up"><span class="label">Feature 2</span></span></li>
									<li><span class="icon fa-laptop"><span class="label">Feature 3</span></span></li>
									<li><span class="icon fa-inbox"><span class="label">Feature 4</span></span></li>
									<li><span class="icon fa-lock"><span class="label">Feature 5</span></span></li>
									<li><span class="icon fa-cog"><span class="label">Feature 6</span></span></li>
								</ul>
							
							</div>				
						</div>
					</section>
					
				<!-- Two -->
					<section class="wrapper style1 container special">
						<div class="row">
							<div class="4u">
							
								<section>
									<span class="icon feature fa-check"></span>
									<header>
										<h3>This is Something</h3>
									</header>
									<p>Sed tristique purus vitae volutpat ultrices. Aliquam eu elit eget arcu commodo suscipit dolor nec nibh. Proin a ullamcorper elit, et sagittis turpis. Integer ut fermentum.</p>
								</section>
							
							</div>
							<div class="4u">
							
								<section>
									<span class="icon feature fa-check"></span>
									<header>
										<h3>Also Something</h3>
									</header>
									<p>Sed tristique purus vitae volutpat ultrices. Aliquam eu elit eget arcu commodo suscipit dolor nec nibh. Proin a ullamcorper elit, et sagittis turpis. Integer ut fermentum.</p>
								</section>
							
							</div>
							<div class="4u">
							
								<section>
									<span class="icon feature fa-check"></span>
									<header>
										<h3>Probably Something</h3>
									</header>
									<p>Sed tristique purus vitae volutpat ultrices. Aliquam eu elit eget arcu commodo suscipit dolor nec nibh. Proin a ullamcorper elit, et sagittis turpis. Integer ut fermentum.</p>
								</section>
							
							</div>
						</div>
					</section>
					
				<?php // TODO: Maybe we could do a settings page selection of "zoninator zone", how many?, wp category, for sources of this content. ?>
				<?php // TODO: create an image size for the featured images in this section ?>
				<!-- Three -->
					<section class="wrapper style3 container special">
					
						<header class="major">
							<h2>Next look at this <strong>cool stuff</strong></h2>
						</header>
						
						<div class="row">
							<div class="6u">
							
								<section>
								<a href="#" class="image feature"><img src="<?php echo get_stylesheet_directory_uri() ?>/images/pic01.jpg" alt="" /></a>
									<header>
										<h3>A Really Fast Train</h3>
									</header>
									<p>Sed tristique purus vitae volutpat commodo suscipit amet sed nibh. Proin a ullamcorper sed blandit. Sed tristique purus vitae volutpat commodo suscipit ullamcorper sed blandit lorem ipsum dolore.</p>
								</section>

							</div>
							<div class="6u">
							
								<section>
								<a href="#" class="image feature"><img src="<?php echo get_stylesheet_directory_uri() ?>/images/pic02.jpg" alt="" /></a>
									<header>
										<h3>An Airport Terminal</h3>
									</header>
									<p>Sed tristique purus vitae volutpat commodo suscipit amet sed nibh. Proin a ullamcorper sed blandit. Sed tristique purus vitae volutpat commodo suscipit ullamcorper sed blandit lorem ipsum dolore.</p>
								</section>

							</div>
						</div>
						<div class="row">
							<div class="6u">
							
								<section>
								<a href="#" class="image feature"><img src="<?php echo get_stylesheet_directory_uri() ?>/images/pic03.jpg" alt="" /></a>
									<header>
										<h3>Hyperspace Travel</h3>
									</header>
									<p>Sed tristique purus vitae volutpat commodo suscipit amet sed nibh. Proin a ullamcorper sed blandit. Sed tristique purus vitae volutpat commodo suscipit ullamcorper sed blandit lorem ipsum dolore.</p>
								</section>

							</div>
							<div class="6u">
							
								<section>
								<a href="#" class="image feature"><img src="<?php echo get_stylesheet_directory_uri() ?>/images/pic04.jpg" alt="" /></a>
									<header>
										<h3>And Another Train</h3>
									</header>
									<p>Sed tristique purus vitae volutpat commodo suscipit amet sed nibh. Proin a ullamcorper sed blandit. Sed tristique purus vitae volutpat commodo suscipit ullamcorper sed blandit lorem ipsum dolore.</p>
								</section>

							</div>
						</div>

						<footer class="major">
							<ul class="buttons">
								<li><a href="#" class="button">See More</a></li>
							</ul>
						</footer>
					
					</section>
					
			</article>

		<!-- CTA -->
			<section id="cta">
			
				<header>
					<h2>Ready to do <strong>something</strong>?</h2>
					<p>Proin a ullamcorper elit, et sagittis turpis integer ut fermentum.</p>
				</header>
				<footer>
					<ul class="buttons">
						<li><a href="#" class="button special">Take My Money</a></li>
						<li><a href="#" class="button">LOL Wut</a></li>
					</ul>
				</footer>
			
			</section>
<?php get_footer() ?>
