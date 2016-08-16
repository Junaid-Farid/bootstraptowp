<?php
/**
 * Template Name: 404 Page
 */

get_header(); ?>
        <!---About  container-->
        <section id="about">
            <div class="container">
                <div class="row">
                    <h2><?php _e("Let's get get back on track:"); ?></h2> 
                    <img src="<?php echo esc_url(get_template_directory_uri())?>/images/styled-imaged.png" alt="divider" class="img-responsive center-block" />
                </div>

                <!--- Paragraphs--->
                <div class="row">   
                    <div class="col-sm-6">
                        <?php the_widget('WP_Widget_Archives');?>
                    </div>
                    <div class="col-sm-6">
                        <?php the_widget('WP_Widget_Categories')?>
                    </div>
                    <div class="col-sm-6">
                        <?php the_widget('WP_Widget_Recent_Posts');?>
                    </div>
                    <div class="col-sm-6">
                        <?php the_widget('WP_Widget_Tag_Cloud');?>
                    </div>
                </div> 
                <!---end of Paragraphs--->

                <?php get_template_part('content-facilities'); ?>

            </div>

        </section>
        <!---End Welcome container--> 

        <!--Shop Section-->  

<?php get_footer(); ?>