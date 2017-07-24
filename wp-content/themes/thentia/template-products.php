<?php get_header();
/*
template name: Products
*/?>

<?php while ( have_posts() ) : the_post(); ?>

<div class="products-bg"></div>

<div class="products-title">
    <div class="container">
        <div style="padding: 50px"></div>
        <div class="row">
            <div class="col-md-9">
                <h1><?php the_title(); ?></h1>
            </div>
        </div>
    </div>
</div>

<div class="products-summary">
    <div class="container">
        <div class="vectorleap">
            <div class="row">
                <div class="col-md-6">
                    <div class="products-img">
                        <img src="<?php echo content_url (); ?>/uploads/2017/07/vl-mock.png">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="products-info">
                        <h1>Vectorleap</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris tincidunt diam ut sapien dapibus accumsan. Nunc risus nisl, imperdiet quis iaculis vitae, ultricies at mauris.</p>
                        <a href="#">Learn more</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php endwhile; // end of the loop. ?>


<?php get_footer(); ?>