<section class="slider">
    <!-- <div class="containers"> -->
        <div class="content_slider">
            <div class="glide" id="Glide">
                <div class="glide__arrows">
                    <button class="glide__arrow prev" data-glide-dir="&lt;"><img src="<?php echo get_template_directory_uri() ?>/assets/img/return.svg" height="42" width="42"></i></button>
                    <button class="glide__arrow next" data-glide-dir="&gt;"><img src="<?php echo get_template_directory_uri() ?>/assets/img/next.svg" height="42" width="42"></i></button>
                </div>
                <div class="glide__wrapper">
                    <div class="glide__track">


                        <?php 
                        $args = array( 'posts_per_page' => 2 );
                        $lastposts = get_posts( $args );
                        foreach( $lastposts as $post ){
                            setup_postdata($post);
                            ?>
                            <div class="glide__slide">
                                <div class="contetn">
                                    <?php the_post_thumbnail('full'); ?>
                                    <div class="text">
                                        <h3><?php echo get_the_title($post) ?></h3>
                                        <p><?php the_excerpt() ?></p>
                                        
                                    </div>
                                </div>
                            </div>
                            <?php
                        }

                        wp_reset_postdata(); // сброс                        
                        ?>



                    </div>
                </div>
            </div>
        </div>
    <!-- </div> -->
</section>