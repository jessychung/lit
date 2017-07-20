<?php get_header(); ?>

<?php while ( have_posts() ) : the_post(); ?>

    <div class="interior-jumbotron">
        <div class="interior-pattern-bg">
            <div class="container">
                <h1><?php the_title(); ?></h1>
            </div>
        </div>
    </div>
    <div class="interior-content">
        <div class="container">

                <p><?php the_content(); ?></p>

        </div>
    </div>


<?php endwhile; ?>

<?php get_footer(); ?>