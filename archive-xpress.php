<?php get_header('secondary'); ?>

<div class="container">

    <div class="row">
        <?php
$args = array('post_type' => 'xpress', 'post_status' => 'publish', 'post_per_page' => 1);
$the_query = new WP_Query($args);
if ($the_query->have_posts()): ?>



        <?php while ($the_query->have_posts()):
        $the_query->the_post();
        $video_url = explode('/', get_field('youtube_link'));
        // var_dump($video_url);
?>

        <div class="col-md-4 col-sm-6 mb-3">
            <a class="text-decoration-none" href="<?php echo get_permalink() ?>">
                <div class="card bg-dark text-white">
                    <img class="img-fluid" src=<?php echo "https://img.youtube.com/vi/{$video_url[3]}/0.jpg"?> alt="">

                    <div class="card-img-overlay">



                    </div>
                    <div class="card-footer">
                        <h4 class="card-title"><?php echo the_title() ?></h4>
                        <h6 class="card-title "><?php echo get_the_date() ?></h6>
                    </div>
                </div>


            </a>
        </div>



        <?php
    endwhile;
endif;
wp_reset_query()
?>

    </div>
</div>



<?php get_footer(); ?>