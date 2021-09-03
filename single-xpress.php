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



<section class="bg-light p-5">
    <div class="container">

        <div class="row mt-5">



            <h2 class="text-center">Recent Xpress Videos</h2>


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
                            
                            // var_dump(count($the_query) );
                            // echo get_field('youtube_link') . "<br>";

                            $video_url = explode('/',get_field('youtube_link'));
                            // var_dump($video_url);


                            ?>

        <?php if(get_field('youtube_link') < 2): ?>
            <div class="col-md-6 col-6-sm">

        <?php endif; ?>

        <?php if(get_field('youtube_link') > 2): ?>
            <div class="col-md-4 col-6-sm">

        <?php endif; ?>
                <a href="<?php echo get_permalink() ?>">
                <div class="card bg-dark text-white">
                    <img class="img-fluid" src=<?php echo "https://img.youtube.com/vi/{$video_url[3]}/0.jpg"?> alt="">
                   
                    <div class="card-img-overlay">
                        <h5 class="card-title">Card title</h5>
                     
                    </div>
                </div>

                </a>
                
            </div>
            <?php  endwhile; endif;
                                wp_reset_query()
                                ?>



           
        </div>
        <a href="#" class="btn btn-success">See More</a>
    </div>
</section>



<?php get_footer(); ?>