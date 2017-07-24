<?php get_header();
/*
template name: vectorleap
*/?>

<?php while ( have_posts() ) : the_post(); ?>

<div class="products-single vectorleap">
    <div class="container">
        <div style="padding: 100px"></div>
        <div class="row">
            <div class="col-md-12">
                <h1><?php the_title(); ?></h1>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8">
                <p><?php the_content() ?></p>
            </div>
        </div>
    </div>
</div>


<?php endwhile; // end of the loop. ?>


<?php get_footer(); ?>