<?php
get_template_part('includes/sections/section','head');
$contact_page = explode("-",get_page_template_slug())[1];


global $wp;
$currentUrl = explode("/",home_url( $wp->request ));


function headerTitle($args,$currentUrl){
    if(!empty($args))
    {
        return $args['header_var'];
    }
    else if($currentUrl[3] == 'events')
    {
        return "Events";
    }
    else if($currentUrl[3] == 'event')
    {
        // Takes slug and formats it into a title for the header
        $formated = explode('-',$currentUrl[4]);
        $newTitle = [];

        $index = 0;
        foreach ($formated as $word) {
            array_push($newTitle,ucfirst(strtolower($word)));
          }

        return implode(' ',$newTitle);
    }
    else
    {
        return the_title();
    }
}

?>



<div class="p-5  d-flex justify-content-center secondary-header <?php echo $contact_page == 'contact.php' ? 'mb-0' : null ?>" style="<?php echo $currentUrl[3] !== 'blog' ? 'margin-bottom: 5rem;' : null?>
height:35vh;background:linear-gradient(90deg, rgba(35,35,35,0.61) 0%, rgba(0,0,0,0.32) 47%, rgba(0,0,0,0.35) 73%),url('<?php echo get_template_directory_uri(); ?>/images/hero_background.png'); background-repeat:no-repeat; background-size:cover">
        <h1 class="display-1 m-auto text-light text-center font-weight-bold"><?php echo  headerTitle($args,$currentUrl);?></h1>
    </div>
</div>

