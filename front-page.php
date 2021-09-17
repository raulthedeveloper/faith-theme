<?php get_header(); ?>

<section class="text-box">
    <div class="container-fluid">
        <div class="row text-center">
            <p>16 For I am not ashamed of the gospel of Christ: for it is the power of God unto salvation to every one that believeth; to the Jew first, and also to the Greek.
</p>
<p>17 For therein is the righteousness of God revealed from faith to faith: as it is written, The just shall live by faith.</p>
           

        </div>
    </div>
</section>


<section class="d-flex section_cta section_cta-odd">

    <div class="text-box ">
        <div class="container">
            <div class="row">
                <h2>About Us</h2>
                <p>Pastors Juan & Stacey Harris began their matrimonial journey together after a 2 ½ year courtship on May 26, 2001. After returning from the south to settle in East Stroudsburg, PA in 2011, they reconnected with Pastor Michael D McDuffie, founder of Mighty Sons of God Fellowship Church and began intensive ministry training under his leadership. After completing training they were licensed as Ministers on January 22, 2012. </p>
                <a href="<?php echo home_url() . "/about-us/" ?>" class="faith-btn btn"\>Read More</a>
            </div>

        </div>

    </div>
    <img  src="<?php echo get_template_directory_uri() ?>/images/faith_owner.jpg" alt="">
</section>


    <section class="d-flex section_cta  section_cta-even flex-row-reverse">
        <div class="container">
            <div class="row">
                <div class="text-box  ">
                    <h2>About Ministry</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci amet at dolores, laboriosam, laborum maiores maxime molestias mollitia necessitatibus nesciunt nihil nulla numquam omnis optio, provident quas quia quisquam veritatis!</p>
                    <div class="faith-btn">Read More</div>
                </div>
            </div>
        </div>

        <img  src="<?php echo get_template_directory_uri() ?>/images/faith-lineup.jpeg" alt="">
    </section>


<section class="section_cta-normal" style="height:initial;">
    <div class="container-fluid p-5">
        <div class="row">
            <h2 class="text-center">Latest Xpress Videos</h2>

            <?php  
                            $args = array(  
                                'post_type' => 'xpress',
                                'post_status' => 'publish',
                                'post_per_page' => 1
                            );
                            $the_query = new WP_Query( $args );

                            if ( $the_query->have_posts() ):

                            $loop_count = 0
                            ?>



            <?php  while ( $loop_count < 3): 
                            $the_query->the_post(); 
                          
                            $loop_count += 1;

                            $video_url = explode('/',get_field('youtube_link'));


                            ?>

            <div class="col-md-4 mb-3">

                <a class="text-decoration-none" href="<?php echo get_permalink() ?>">
                    <div class="card bg-dark text-white">
                        <img class="img-fluid" src=<?php echo "https://img.youtube.com/vi/{$video_url[3]}/0.jpg"?>
                            alt="">

                        <div class="card-img-overlay">

                        </div>
                        <div class="card-footer" data-toggle="tooltip" data-placement="right" title="<?php echo the_title() ?>">
                        <h4 class="card-title ellipsis"><?php echo the_title() ?></h4>
                        <h6 class="card-title "><?php echo get_the_date() ?></h6>
                    </div>
                    </div>

                </a>
            </div>


            <?php  endwhile; endif;
                                wp_reset_query()
                                ?>


        <div class="row pt-3">
        <a href="<?php echo home_url() ?>/xpress_archive/" class="faith-btn btn d-block m-auto">See More</a>
        </div>
        
    </div>

</section>

<section class="blog-section">
    <div class="container">
        <div class="row">
            <div class="col">
                <h2>Blog</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A ab asperiores eligendi eos est et eum facilis hic illum iste iusto molestiae mollitia necessitatibus nemo quia sapiente, soluta sunt ullam?</p>
                <a href="#" class="faith-btn">Read More</a>
            </div>
        </div>
    </div>
</section>


<?php get_template_part('includes/sections/section','form') ?>


<?php get_footer() ;?>
