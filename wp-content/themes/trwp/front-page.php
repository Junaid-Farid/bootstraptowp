<?php get_header(); ?>
<!---Welcome container-->
        <section id="welcome">
            <div class="container">
                <div class="row">
                    <h2>Welcome to my Site</h2> 
                    <img src="<?php echo esc_url(get_template_directory_uri());?>/images/styled-imaged.png" alt="divider" class="img-responsive center-block" />

                </div>
                
                <!--here we are using the tempalte part; content-facilities.php template--->
                <?php get_template_part('content-facilities');?>

            </div>

        </section>
        <!---End Welcome container-->
        <!---Offer Section-->
        <section id="latest-offer">
            <div class="container">
                <div class="row">
                    <h2>Our latest offers</h2>
                </div>

                <div class="row">
                    <div class="col-md-4">
                        <div class="offer">
                            <span>$<?php the_field('offer_price');?></span>
                            <h3><?php the_field('offer_name');?></h3>
                            <p><?php the_field('offer_line_1');?></p><hr>
                            <p><?php the_field('offer_line_2');?></p><hr>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="offer">
                            <span>$<?php the_field('offer_price_2');?></span>
                            <h3><?php the_field('offer_name_2');?></h3>
                            <p><?php the_field('offer_2_line_1');?></p><hr>
                            <p><?php the_field('offer_2_line_2');?></p><hr>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="offer">
                            <span>$<?php the_field('offer_price_3');?></span>
                            <h3><?php the_field('offer_name_3');?></h3>
                            <p><?php the_field('offer_3_line_1');?></p><hr>
                            <p><?php the_field('offer_3_line_2');?></p><hr>
                        </div>
                    </div>
                </div>
            </div>

        </section>

        <!--- end Offer Section-->
        <!--Shop Section-->
        <section id="shop-online">
            <div class="container">
                <div class="row">
                    <h2>Our latest offers</h2>
                    <hr />
                    <a href="#" class="btn btn-default">Shop Here</a>
                </div>
            </div>

        </section>
        <!--Shop Section--> 
        <?php get_footer(); ?>