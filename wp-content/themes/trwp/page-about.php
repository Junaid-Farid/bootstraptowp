<?php
/**
 * Template Name: About Us
 */

get_header(); ?>
        <!---About  container-->
        <section id="about">
            <div class="container">
                <div class="row">
                    <h2>About Us</h2> 
                    <img src="<?php echo esc_url(get_template_directory_uri())?>/images/styled-imaged.png" alt="divider" class="img-responsive center-block" />
                </div>

                <!--- Paragraphs--->
                <div class="row">
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                        Quisque tempor ipsum sit amet ante euismod lobortis.
                        Curabitur finibus efficitur maximus. 
                        Vivamus venenatis lacinia nisl et aliquet. 
                        Nam ultricies lectus non diam finibus pretium eu id tortor. 
                        Pellentesque quis nisl ut eros pretium imperdiet maximus bibendum mi. 
                        Sed purus lacus, mattis at metus consectetur, cursus finibus turpis. 
                        Curabitur condimentum, ante quis sollicitudin laoreet, nisi orci iaculis est, eu finibus felis dolor et ligula.
                        Morbi aliquam diam laoreet turpis ornare cursus.
                    </p>
                </div>
                <div class="row">
                    <p>
                        Phasellus tellus erat, tempus et ante eget, mattis hendrerit ante. 
                        Integer sodales sapien ut metus efficitur fringilla.
                        Aliquam nec pharetra turpis, ut vulputate augue. 
                        Aenean rhoncus condimentum ante, vel suscipit erat aliquam ultrices. 
                        Suspendisse vel aliquam urna. Suspendisse eu congue magna. 
                        Pellentesque imperdiet lobortis justo, ac efficitur ipsum blandit non. 
                        Sed sagittis purus eget sodales tincidunt. 
                    </p>
                </div>

                <!---end of Paragraphs--->
                <?php get_template_part('content-facilities'); ?>

            </div>

        </section>
        <!---End Welcome container--> 

        <!--Shop Section-->  

<?php get_footer(); ?>