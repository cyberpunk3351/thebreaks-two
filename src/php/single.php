<?php
get_header();?>
<section class="content">
	<div class="mainContent">
		<div class="containers">            
			<?php get_template_part( 'template-parts/shortcontent/shortcontent', 'slider'); ?>
			<div class="contentAll">
				<div class="contentAll__left">
					<?php get_template_part( 'template-parts/shortcontent/shortcontent'); ?>
				</div>
				<div class="contentAll__right">
					<?php get_sidebar(); ?>
				</div>
			</div>
		</div> <!-- END: mainContent -->
	</div> <!--END: containers -->

	<?php the_posts_navigation(); ?>

</section>

<?php
get_footer();