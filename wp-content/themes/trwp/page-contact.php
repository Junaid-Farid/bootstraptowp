<?php
/**
 * Template Name: Contact Us
 */

get_header(); ?>  
        <!---contact us section  container-->
        <section id="contact">
            <div class="container">
                <div class="row">
                    <h2><?php the_title();?><!--this will print the title of page--></h2> 
                    <img src="<?php echo esc_url(get_template_directory_uri());?>/images/styled-imaged.png" alt="divider" class="img-responsive center-block" />
                </div>

                <!--- Paragraphs--->
                <div class="row">
                    <div class="col-sm-6 address well">
                        <address><i class="fa fa-map-marker"></i>
                            Channi Goth <br />
                            Ahmedpur East <br />
                            Bahawalpur<br />
                            Pakistan<br />
                        </address>
                        <i class="fa fa-envelope-o"></i>Email: mail@mail.com<br/>
                        <i class="fa fa-phone"></i>Telephone: 123 456 789
                    </div>
                    
                    <div class="col-sm-6">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3402.7690540475!2d74.33998671467296!3d31.475538556504716!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x391904273c25c31d%3A0xb731313a15a5c7dd!2sArfa+Software+Technology+Park%2CGE!5e0!3m2!1sen!2s!4v1466682158542" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                    </div>
                </div> 

                <!---end of Paragraphs--->

                <div class="row message-area">
                    <div class="col-sm-12">
                        <!--here contact form goes--->
                        <?php echo do_shortcode('[contact-form-7 id="50" title="Contact form 1"]'); ?>
                    </div>
                </div>

            </div>

        </section>
        <!---End Welcome container-->  
    </body>
</html>
<?php get_footer(); ?>