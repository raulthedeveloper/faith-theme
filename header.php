

<?php
get_template_part('includes/sections/section','head');
?>







<div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
    <div class="card-img-overlay" style="background:#2f0d35e6;">
        <div class="container">
            <div class="row">

            <div class="col-md-6">
                <img class="img-fluid" src="<?php echo get_template_directory_uri() . "/images/faith_logo_nobackground.png" ?>" alt="">
            </div>

            <div class="col-md-6 justify-content-center d-flex m-auto flex-column">
                <h1 class="text-light">The Just Shall Live By Faith Romams 1:17</h1>
                <div>
                <a class="btn faith-btn" target="_blank" href="https://www.google.com/maps/place/Faith+to+Faith+Ministries,+2035+Milford+Rd,+East+Stroudsburg,+PA+18301/@41.0269371,-75.1679489,17z/data=!4m2!3m1!1s0x89c4891f2307f839:0x8181925c53de052a">Get Directions</a>
                <a class="btn faith-btn" href="<?php echo get_permalink($myposts[0]->ID); ?>">Watch Word Xpress</a>


                </div>
            </div>
            <div>
            </div>


                <!-- <div class="hero-btn-box "> -->

                <?php 
                            $args = array(  
                                'post_type' => 'xpress',
                                'post_status' => 'publish',
                                'post_per_page' => 1
                            );
                            $the_query = new WP_Query( $args );

                            if ( $the_query->have_posts() ): 
                                $myposts = get_posts( $args );
                            ?>


                                
                        
                                <?php endif;
                                wp_reset_query()
                                ?>
                        

              
                <!-- </div> -->


            </div>


            <!-- <div class="row">

                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div> -->
        </div>


    </div>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="<?php echo get_template_directory_uri(); ?>/images/hero_background.png')" class="d-block w-100" alt="...">
        </div>
        <!-- <div class="carousel-item">
        <img src="<?php echo get_template_directory_uri(); ?>/images/hero_secondary.jpg')" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
        <img src="<?php echo get_template_directory_uri(); ?>/images/hero_secondary.jpg')" class="d-block w-100" alt="...">
        </div> -->
    </div>

</div>
