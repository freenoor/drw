
	<footer id="colophon" class="site-footer">
		<div class="container">
			<div class="row-custom">
				<div class="logo-footer add-open">
				<a class="logo_footer" style="list-style: none;" href="<?php echo esc_url(home_url('/')); ?>">
					<?php dynamic_sidebar('logo');?>
				</a> 
				</div>
				<div class="menu-footer add-open">
					<?php dynamic_sidebar('menus');?>
				</div>
				<div class="services-footer add-open">
					<?php dynamic_sidebar('services');?>
				</div>
				<div class="technologies-footer add-open">
				<?php dynamic_sidebar('technologies');?>
				</div>
			</div>
		</div>
		<div class="copyr">
			<p>&copy;<?php echo date(' Y  ') ;?>All right Reserved.<?php the_field('all_rechte'); ?></p>
		</div>
	</footer>

	
</body>
<?php wp_footer(); ?>

</html>