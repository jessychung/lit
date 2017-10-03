<?php
function tzcustom_default($sldshowID,$template, $plist,$query,$query_arg,$slider,$container,$content,$navigation){
    ob_start(); ?>
    <div id="<?php echo "owl-slider" . $sldshowID; ?>" class="owl-carousel">
        <?php $count = 1;
        $the_query = new WP_Query($query_arg);
        while ($the_query->have_posts()) :
        $the_query->the_post();
        if ($template == 'owl'):
        ?>
        <div class="tzcustom_item cmtbc-homepage-post">
            <?php
            if ($content['tzcustom_image_display'] == 'yes') {
                if (has_post_thumbnail()) { ?>

                    <div class="cmtbc-homepage-post-img" style="background-image: url('<?php the_post_thumbnail_url(); ?>')"></div>

                    <?php

                } elseif (isset($container['tzcustom_default_image']) && $container['tzcustom_default_image'] != '') {
                    ?>
                    <div class="cmtbc-homepage-post-img" style="background-image: url('<?php echo $container['tzcustom_default_image']; ?>')"></div>

                    <?php
                }
            }
            ?>
            <?php if($content['tzcustom_title_display'] == 'yes' || $content['tzcustom_excerpt_display'] == 'yes' ){ ?>
            <div class="tzcustom-excerpt-<?php echo $template?>">
                <div class="cmtbc-post-left">
                    <?php
                    if ($content['tzcustom_title_display'] == 'yes') { ?>
                        <h4 class="tzcustom_title"><?php the_title(); ?></h4>
                    <?php }
                    ?>
                    <h5><?php the_date(); ?> | <?php the_category(', ')?></h5>
                </div>
                <div class="cmtbc-post-right">
                    <?php
                    if ($content['tzcustom_excerpt_display'] == 'yes') {
                        if ( ! has_excerpt() ) {
                            ?>
                            <p><?php the_excerpt()?></p>
                            <?php
                        } else {
                            ?>
                            <p><?php the_excerpt()?></p>
                            <?php
                        }
                    };
                    ?>
                </div>
            </div>
            <?php } ?>
        </div>
<?php endif;$count++;endwhile; wp_reset_query(); ?>
    </div>

    <script>
        jQuery(document).ready(function() {
            jQuery("#<?php echo "owl-slider".$sldshowID;?>").owlCarousel({
                items:<?php echo esc_attr($slider['tzcustom_items']); ?>,
                autoPlay : <?php echo esc_attr($slider['tzcustom_autoplay']); ?>,
                stopOnHover : <?php echo esc_attr($slider['tzcustom_ps_hover']); ?>,
                slideSpeed: <?php echo esc_attr($slider['tzcustom_slidespeed']); ?>,
                rewindSpeed: <?php echo esc_attr($slider['tzcustom_rewindspeed']); ?>,
                navigation: <?php echo esc_attr($navigation['tzcustom_show_nxtprev']); ?>,
                pagination:<?php echo esc_attr($navigation['tzcustom_show_pagination']); ?>,
                paginationSpeed : 1000,
                goToFirstSpeed : 2000,
                singleItem : false,
                autoHeight : true,
                transitionStyle:"fade"
            });
        });
    </script>


<?php
    return ob_get_clean();
}