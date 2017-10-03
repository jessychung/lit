<?php get_header(); ?>

<div class="search-content">
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <div class="container" id="search-yes-result">
        <div class="row">
            <div class="col-md-7">
                <h2 class="post-title" rel="bookmark"><a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a></h2>
                <h3><?php the_permalink(); ?></h3>
                <p><?php echo substr(strip_tags($post->post_content), 0, 200);?>...</p>
            </div>
        </div>
    </div>
<?php endwhile; else: ?>
    <div class="container" id="search-no-result">
        <div class="row">
            <div class="entry col-md-12 col-sm-12">
                <h2><?php echo ('Sorry! No results matched your search.'); ?></br>
                <?php echo('Please modify your search request and try again.'); ?>
                </h2>
            </div>
        </div>
    </div>
<?php endif; ?>
</div>

<?php get_footer(); ?>