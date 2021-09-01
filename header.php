

<?php
get_template_part('includes/sections/section','head');
?>







<div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
    <div class="card-img-overlay">
        <div class="container">
            <div class="row">
                <div class="hero-btn-box ">
                    <button class="btn">Watch Live Steams</button>
                    <button class="btn">Get Directions</button>
                </div>


            </div>
            <div class="row">

                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>


    </div>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="<?php echo get_template_directory_uri(); ?>/images/hero_secondary.jpg')" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
            <img src="https://images.pexels.com/photos/2774551/pexels-photo-2774551.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
            <img src="https://images.pexels.com/photos/3511104/pexels-photo-3511104.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260" class="d-block w-100" alt="...">
        </div>
    </div>

</div>
