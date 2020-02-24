<section class="slider">
    <!-- <div class="containers"> -->
        <div class="content_slider">
            <div class="glide" id="Glide">
                <div class="glide__arrows">
                    <button class="glide__arrow prev" data-glide-dir="&lt;"><i class="fas fa-angle-left"></i></button>
                    <button class="glide__arrow next" data-glide-dir="&gt;"><i class="fas fa-angle-right"></i></button>
                </div>
                <div class="glide__wrapper">
                    <div class="glide__track">


                        <?php 
                        $posts = get_posts( array(
                            'numberposts' => -1,
                            'category_name'    => 'slider',
                            'orderby'     => 'date',
                            'order'       => 'DESC',
                            'post_type'   => 'post',
                            'suppress_filters' => true, 
                        ) );

                        foreach( $posts as $post ){
                            setup_postdata($post);
                            ?>
                            <div class="glide__slide">
                                <div class="contetn">
                                    <?php the_post_thumbnail('full'); ?>
                                    <div class="text">
                                        <h3><?php the_title() ?></h3>
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