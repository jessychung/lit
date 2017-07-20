
<?php get_header(); ?>


<div id="blog-jumbotron">
    <div class="container">
        <div class="row">
            <div>

                <h1>Blog</h1>

            </div>
        </div>
    </div>
</div>

<div class="blog-content">
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-4" id="blog-side-bar">
                <h1><i class="fa fa-clock-o"></i>  Recent Posts</h1>
                <h2><ul>
                        <?php
                        $args = array( 'numberposts' => '5', 'category_name'  => 'homepage-item' );
                        $recent_posts = wp_get_recent_posts( $args );
                        foreach( $recent_posts as $recent ){
                            echo '<li><a href="' . get_permalink($recent["ID"]) . '">' .   $recent["post_title"].'</a> </li> ';
                        }
                        ?>
                    </ul></h2>
                <h1><i class="fa fa-tags"></i>  Tags</h1>
                <h2><?php wp_tag_cloud('format=list'); ?></h2>
            </div>
            <div class="col-md-9 col-sm-8" id="right-content">
                <div class="blog-posts">
                    <?php
                    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;


                    if ( have_posts() ) : ?>
                        <?php

                        while (have_posts()) : the_post(); ?>
                            <h1><?php the_title(); ?></h1>
                            <h2><i class="fa fa-clock-o"></i>  <?php the_date(); ?></h2>
                            <div class="image">
                                <?php the_post_thumbnail(); ?>
                            </div>
                            <p><?php the_content(); ?></p>
                            <h3><?php the_tags(); ?></h3>

                        <?php endwhile;
                        ?>
                        <h4><?php my_pagination(); ?></h4>

                    <?php else : ?>
                        <?php echo 'Sorry, no posts matched your criteria.' ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</div>



<?php get_footer(); ?>