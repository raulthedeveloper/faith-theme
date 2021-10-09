

<div class="bg-light">
    <footer>
        <ul class="nav justify-content-center border-bottom">
        <li class="nav-item">
                        <a class="nav-link active text-light" aria-current="page" href="<?php echo home_url() ?>">Home</a>
                    </li>
                    <li class="nav-item">
                    

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

                          <a class="nav-link text-light" href="<?php echo get_permalink($myposts[0]->ID); ?>">The Word Xpress</a>

                                
                        
                                <?php endif;
                                wp_reset_query()
                                ?>
                        
                            
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="<?php echo home_url() ?>/events/" >Events</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link text-light" href="<?php echo home_url() ?>/gallery/" >Gallery</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="<?php echo home_url() ?>/blog/" >Blog</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="<?php echo home_url() ?>/store/" >Store</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="<?php echo home_url() ?>/about/" >About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="<?php echo home_url() ?>/contact/" >Contact</a>
                    </li>
        </ul>
        <p class="text-center text-light">&copy; <?php echo "20" . date("y"); ?> Faith To Faith Ministries</p>
    </footer>
</div>

<!-- <script src="jquery.min.js"></script> -->


<?php wp_footer(  )?>

<script>


    


</script>

<script>
  AOS.init({
      once:true
  });
</script>

</body>

</html>
