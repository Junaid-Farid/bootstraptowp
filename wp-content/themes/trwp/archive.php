<?php

/**
 *  The template for displaying archive pages 
 */

?>
<?php get_header(); ?>

        <!---======== BLOG SECTION ========--->    
        <div class="container">  
            <div class="row">

                <div class="col-sm-12 col-md-8 blog-main"> 
                    
                    
                    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                        <div class="blog-post">
                            <h2 class="blog-post-title"> 
                                    <?php the_title();?> 
                            </h2>
                            <p class="blog-post-meta">
                                <?php echo get_the_date('F, j, Y');?>
                                by <a href="#"><?php the_author();?></a> 
                                <br/>
                                <!--category and tags--->
                                <i class="fa fa-tags"></i>
                                    <?php the_tags();?>
                                <br/>
                                <i class="fa fa-folder-open"></i>
                                    <?php _e('Category: ')?><?php the_category(', ');?>
                            </p>
                            
                                <!---the description of blog post--->
                                <?php the_content(); ?><!--this will print the short description of each blog post for full text we need to use the the_content() method which we are using in full blog post tempalt--->
                                <?php wp_link_pages();?>
                                
                        </div><!-- /.blog-post --> 
                        
                    <?php endwhile; else : ?>
                        <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
                    <?php endif; ?>
                        
                        
                    <nav>
                        <ul class="pager">
                            <li><?php next_post_link();?></li>
                            <li><?php previous_post_link();?></li>
                        </ul>
                    </nav>
                        
                    <!--Load up comments template -->
                    <?php comments_template();?>
                    
                </div><!-- /.blog-main -->
                <!---======== SIDE BAR SECTION ========--->    
                <div class="col-sm-12 col-md-3 col-md-offset-1 blog-sidebar">
                 <?php get_sidebar();?>
                </div><!-- /.blog-sidebar -->

            </div><!-- /.row -->

        </div><!-- /.container -->
        <!---======== End of Blog Section ======== --->
<?php get_footer(); ?>