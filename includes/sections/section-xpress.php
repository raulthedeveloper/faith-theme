
<?php if( have_posts() ): while( have_posts() ): the_post();?>

<?php         
$video_url = explode('/', get_field('youtube_link'));
?>

<div class="col-md-4 col-sm-6 mb-3">
            <a class="text-decoration-none" href="<?php the_permalink(); ?>">
                <div class="card bg-dark text-white">
                    <img class="img-fluid" src=<?php echo "https://img.youtube.com/vi/{$video_url[3]}/0.jpg"?> alt="">

                    <div class="card-img-overlay">



                    </div>
                    <div class="card-footer" data-toggle="tooltip" data-placement="right" title="<?php echo the_title()?>">
                        <h4 class="card-title ellipsis"><?php the_title() ?></h4>
                        <h6 class="card-title "><?php echo get_the_date() ?></h6>
                    </div>
                </div>

                </a>
        </div>






<?php endwhile; else: endif; ?>