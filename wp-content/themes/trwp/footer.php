        <!--footer Section-->
        <section id="footer">
            <div class="container">
                <div class="row">
                    <h2>Keep in touch</h2> 
                    <img src="<?php echo esc_url(get_template_directory_uri());?>/images/styled-imaged-white.png" alt="divider" class="img-responsive center-block" />

                </div>
                <div class="row">
                    <div class="col-md-4">
                        <address>
                            Channi Goth <br />
                            Ahmedpur East <br />
                            Bahawalpur<br />
                            Pakistan<br />
                        </address>
                    </div>
                    <div class="col-md-4">
                        <?php
                            wp_nav_menu( array(
                                'menu'              => 'footer', 
                                'container'         => 'ul',
                                'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                                'walker'            => new wp_bootstrap_navwalker())
                            );
                        ?>
                    </div>
                    <div class="col-md-4">
                        <p>Follow Us:</p>
                        <i class="fa fa-facebook fa-lg"></i>
                        <i class="fa fa-twiter fa-lg" ></i>
                        <i class="fa fa-google-plus fa-lg"></i>

                        <i class="fa fa-pinterest fa-lg"></i>
                        <i class="fa fa-youtube fa-lg"></i>

                    </div>
                </div>
            </div>
            <div class="container-fluid" id="copy"> 
                    <div class="col-md-12">
                        <p>&copy; <?php echo date('Y');?></p>
                    </div>
            </div>

        </section>
        <!--footer Section-->
        <?php wp_footer(); ?>
    </body>
</html> 