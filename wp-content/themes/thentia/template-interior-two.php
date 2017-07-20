<?php get_header();
/*
template name: Interior
*/?>

<div style="padding: 60px;" class="visible-xs"></div>

<?php while ( have_posts() ) : the_post(); ?>

<div class="vl-interior-jumbotron-two">
    <div class="container">
        <div class="row" style="background: linear-gradient(0deg,rgba(224,58,44,0.8),rgba(224,58,44,0.8)), url('<?php echo content_url (); ?>/uploads/2017/07/tirza-van-dijk-58298.jpg')">
            <div class="col-md-6 col-sm-6">
                <h1>Your Project. Accelerated.</h1>
                <p>Vectorleap is a comprehensive homeostatic business execution platform that gives you and your developers all the tools needed to create modular applications.</p>
            </div>
        </div>
    </div>
</div>

<div class="vl-interior-otherlinks">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="vl-interior-two-links">
                    <?php
                    global $post;
                    $parent = $post->post_parent;
                    if( $parent ) :
                        $siblings = get_pages( 'child_of=' . $parent . '&parent=' . $parent );
                        if( $siblings ) foreach( $siblings as $sibling ) : ?>
                            <a href="<?php echo get_page_link($sibling->ID) ?>" id="<?php echo $sibling->ID?>">
                            <div class="vl-other-children">
                                <?php echo get_the_post_thumbnail($sibling->ID,'thumbnail'); ?>
                                <h1><?php echo $sibling->post_title ?></h1>
                            </div>
                            </a>
                        <?php endforeach; endif; ?>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="vl-interior">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <?php
                $query = new WP_Query(array(
                    'post_type' => 'Data-modelling'
                ));
                $count = 0;
                $posts = $query->posts;
                if ($query->have_posts()) {
                    while ( $query->have_posts() ) : $query->the_post(); ?>
                        <?php if(has_tag('title')) { ?>
                            <div class="vl-interior-feature-title">
                                <?php the_excerpt() ?>
                                <h1><?php the_title(); ?></h1>
                            </div>
                        <?php } ?>
                    <?php endwhile; }?>
            </div>
        </div>
    </div>
</div>

<div class="vl-interior">
    <div class="container">
        <?php
        $query = new WP_Query(array(
            'post_type' => 'Data-modelling'
        ));
        $count = 0;
        $posts = $query->posts;
        if ($query->have_posts()) {
            while ( $query->have_posts() ) : $query->the_post(); ?>
                <div class="row vl-feature-list">
                    <div class="col-md-6">
                        <?php if(has_tag('list')) { ?>
                            <h1><span><?php echo $count = $count + 1 ; ?></span> <?php the_title(); ?></h1>
                            <?php the_content(); ?>
                        <?php } ?>
                    </div>
                    <div class="col-md-6">
                        <?php if(has_tag('list')) { ?>
                          <div class="vl-code">
                              <?php the_excerpt()?>
                          </div>
                        <?php } ?>
                    </div>
                </div>
            <?php endwhile; }?>
    </div>
</div>



<?php endwhile; // end of the loop. ?>

<div style="padding: 60px"></div>

<?php get_footer(); ?>