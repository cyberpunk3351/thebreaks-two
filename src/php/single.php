<?php
get_header();?>
<section class="content">
	<div class="mainContent">
		<div class="containers">
			<div class="contentAll">
				<div class="contentAll__left">
					<header class="entry-header">
						<?php
						if ( is_singular() ) :
							the_title( '<h1 class="entry-title">', '</h1>' );
						else :
							the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
						endif;

						if ( 'post' === get_post_type() ) :
							?>
							<div class="entry-meta">

							<?php
							while ( have_posts() ) :
								the_post();

								get_template_part( 'template-parts/content/content', get_post_type() );

							endwhile; // End of the loop.
							?>
							</div><!-- .entry-meta -->
						<?php endif; ?>
					</header>					
				</div>
				<div class="contentAll__right">
					<?php get_sidebar(); ?>
				</div>
			</div>
		</div> <!-- END: mainContent -->
	</div> <!--END: containers -->

	<?php the_posts_navigation(); ?>
	<?php
	get_footer();

