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
                <p>God planted in the hearts of Pastors Juan & Stacey Harris to start a ministry in East Stroudsburg, PA. From this encounter with Him we were led to Romans 1:16 – 17 from which was given to us the name of the ministry: For I am not ashamed of the gospel of Christ, for it is the power of God to salvation for everyone who believes, for the Jew first and also for the Gentile. For in it the righteousness of God is revealed from faith to faith; as it is written, “The just shall live by faith.”</p>

                <a style="margin-left:.5rem" href="<?php echo home_url() . "/about-us/" ?>" class="faith-btn-dark btn"\>Read More</a>
            </div>

        </div>

    </div>
    <img  src="<?php echo get_template_directory_uri() ?>/images/faith_owner.jpg" alt="">
</section>


    <section class="d-flex section_cta  section_cta-even flex-row-reverse">
        <div class="container">
            <div class="row">
                <div class="text-box ">
                    <h2>About Ministry</h2>
                    <p>
        Faith To Faith Ministries held its first service at the Quality Inn, Stroudsburg, PA on April 22, 2012 and after 2 ½ years there we were able to move to our current location at 2035 Milford Road, East Stroudsburg, PA on October 25, 2014.  </p> 
                    <!-- <div class="faith-btn-dark">Read More</div> -->
                </div>
            </div>
        </div>

        <img  src="<?php echo get_template_directory_uri() ?>/images/faith-lineup.jpeg" alt="">
    </section>

    <section class="d-flex section_cta section_cta-odd">

    <div class="text-box ">
        <div class="container">
            <div class="row">
                <h2>Vision</h2>
                <p>Faith To Faith Ministries seeks to encourage everyone in our community to reach their potential in life through a committed relationship with Jesus the Christ. Teaching Holy Bible principles and the power of a devoted prayer life we will help to lead everyone to an abundantly fulfilled life in the promises of God. </p>

            </div>

        </div>

    </div>
    <img  src="<?php echo get_template_directory_uri() ?>/images/vision.webp" alt="">
</section>


<section class="section_cta-even" style="height:initial;min-height:initial;">
        <div class="container">
            <div class="row">
                <div class="col text-box text-center">
                <h2>Mission</h2>
                <p>We are committed to be a ministry that lives by faith, is known for love, and is a voice of hope for our community and the world.</p>
                </div>
                
            </div>
        </div>

    </section>


<section class="section_cta-normal" style="height:initial;">
    <div class="container-fluid xpress-home-row">
        <div class="row justify-content-center">
            <h2 class="text-center">Latest Word Xpress Videos</h2>

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
        <a href="<?php echo home_url() ?>/xpress_archive/" class="faith-btn-dark btn d-block m-auto">See More</a>
        </div>
        
    </div>

</section>



<section class="blog-section" style="min-height:35vh;background:linear-gradient(90deg, rgba(35,35,35,0.61) 0%, rgba(0,0,0,0.32) 47%, rgba(0,0,0,0.35) 73%),url('<?php echo get_template_directory_uri(); ?>/images/hero_background.png'); background-repeat:no-repeat; background-size:cover">
    <div class="container">
        <div class="row">
            <div class="col">
                <h2>Blog</h2>
                <h3>Check out our blog, and stay informed. We are constantly adding new articles. </h3>
                <p class="text-muted"><em>Click the button below</em></p>
                <a href="<?php echo home_url() ?>/blog/" class="faith-btn-dark">Read More</a>
            </div>
        </div>
    </div>
</section>


<?php get_template_part('includes/sections/section','form') ?>


<?php get_footer() ;?>
