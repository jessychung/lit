
<?php get_header();
/*
* template name: blog
*/?>


<div class="interior-jumbotron">
    <div class="interior-pattern-bg">
        <div class="container">
            <h1>Blog</h1>
        </div>
    </div>
</div>

<div class="interior-menu blog-tags">
    <div class="container">
        <ul>
            <li><a href="/our-blog/">View all</a></li>
            <li>
                <?php wp_tag_cloud('format=list'&'item_wrap=%3$s'); ?>
            </li>
        </ul>
    </div>
</div>

<?php while ( have_posts() ) : the_post(); ?>

<div class="single-blog-content">
    <div class="container">

                <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
                <div class="blog-posts">
                    <h2><?php the_date(); ?></h2>
                    <h1><?php the_title(); ?></h1>
                    <div class="blog-thumb" style="background-image: url('<?php echo $image[0]; ?>'); background-repeat: no-repeat; background-size: cover; background-position: center;"></div>
                    <p><?php the_content(); ?></p>
                </div>
    </div>
</div>

<?php endwhile; ?>


<?php get_footer(); ?>