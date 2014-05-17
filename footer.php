		<!-- Footer -->
		<footer id="footer">

			<?php // TODO: Create wp settings for these ?>
			<ul class="icons">
				<?php foreach ( array(
					'Twitter' => 'twitter',
					'Facebook' => 'facebook',
					'Google+' => 'google-plus',
					'GitHub' => 'github',
					'Dribbble' => 'dribbble',
				) as $service_name => $service_slug ): ?>
				<li><a href="#" class="icon circle fa-<?php echo $service_slug ?>"><span class="label"><?php echo $service_name ?></span></a></li>
				<?php endforeach ?>
			</ul>
			
			<?php // TODO: Pull this into a wp setting ?>
			<span class="copyright">&copy; Untitled. All rights reserved. Design: <a href="http://html5up.net">HTML5 UP</a>.</span>
		
		</footer>
		<?php wp_footer() ?>
	</body>
</html>
