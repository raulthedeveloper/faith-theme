<?php
/*
 * Template Name: Xpress Video
 * Template Post Type: post, page, product, xpress
 */
  
 get_header('secondary');  ?>




<div class="container mb-3">
    <div class="row mb-3 video_container">
        <?php echo get_field('video_link') ?>

    </div>
</div>

</div>




<section class="bg-light pt-5">
    <div class="container">
    <h2 class="text-center">Recent Xpress Videos</h2>
        <div class="owl-carousel">

            <?php  
                            $args = array(  
                                'post_type' => 'xpress',
                                'post_status' => 'publish',
                                'post_per_page' => 1
                            );
                            $the_query = new WP_Query( $args );

                            if ( $the_query->have_posts() ): ?>



            <?php  while ( $the_query->have_posts()): 
                            $the_query->the_post(); 
                          

                            $video_url = explode('/',get_field('youtube_link'));
                            // var_dump($video_url);


                            ?>

            <div>

                <a class="text-decoration-none" href="<?php echo get_permalink() ?>" >
                    <div class="card bg-dark text-white">
                        <img class="img-fluid" src=<?php echo "https://img.youtube.com/vi/{$video_url[3]}/0.jpg"?>
                            alt="">

                        <div class="card-img-overlay">

                        </div>
                        <div style="z-index:30" class="card-footer " data-toggle="tooltip" data-placement="right" title="<?php echo the_title() ?>">
                        <h4 class="card-title ellipsis"><?php echo the_title() ?></h4>
                        <h6 class="card-title "><?php echo get_the_date() ?></h6>
                        
                
                    </div>
                    </div>

                </a>

            </div>


            <?php  endwhile; endif;
                                wp_reset_query()
                                ?>
        </div>

     <div class="mb-3" >
     <a href="<?php echo home_url() ?>/xpress_archive/" class="faith-btn btn d-block m-auto">See More</a>
     </div>   
   
    </div>
</section>


<script>


    jQuery(document).ready(function ($) {
        $('.owl-carousel').owlCarousel({
            loop: false,
            margin: 10,
            nav: true,
            touchDrag:true,
            dots:true,
            responsive:{
        0:{
            items:2
        },
        600:{
            items:3
        },
        1000:{
            items:4
        }
    }
        })



    });
</script>

<?php get_footer();



?>

