<?php
/* Origami theme
 */
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="viewport" content="width=device-width, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0">
    <title>Thentia</title>
    <link rel="profile" href="http://gmpg.org/xfn/11" />
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
    <link rel='shortcut icon' href='<?php echo content_url (); ?>/uploads/2017/08/thentia_fav.ico'>

    <!--Scripts-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <script src="https://use.fontawesome.com/ca8e0550f7.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/r83/three.js"></script>
    <script src="<?php echo content_url (); ?>/themes/thentia/js/Projector.js"></script>
    <script src="<?php echo content_url (); ?>/themes/thentia/js/CanvasRenderer.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">

    <script type="text/javascript" src="<?php echo content_url (); ?>/themes/thentia/js/thentia.js"></script>

    <link href="<?php bloginfo('stylesheet_url');?>" rel="stylesheet">

    <?php if ( is_singular() && get_option( 'thread_comments' ) ) wp_enqueue_script( 'comment-reply' ); ?>
    <?php wp_head(); ?>
</head>

<body>

<?php wl_gear(); ?>

<div class="side-menu visible-xs">

    <div class="full-screen-hide">
        <div class="bars desk-bars animated-bars pointer-events">
            <div></div>
            <div></div>
            <div></div>
        </div>

        <div class="thentia-menu">
            <?php
            $defaults = array(
                'menu'            => 'side-menu',
                'container'       => '',
                'menu_class'      => 'menu',
                'echo'            => true,
                'fallback_cb'     => 'wp_page_menu',
                'depth'           => 0
            );

            wp_nav_menu( $defaults );

            ?>
        </div>
    </div>
</div>

<div class="sticky-menu main-menu">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3 col-sm-4 col-xs-8">
                <a href="<?php echo home_url()?>">
                    <img src="<?php echo content_url (); ?>/uploads/2017/08/thentia_logo_colour.svg" class="thentia-logo-w" width="150px">
                </a>
            </div>
            <div class="col-md-9 col-sm-8 hidden-xs" style="text-align: right">
                <?php
                $defaults = array(
                    'menu'            => 'top-menu',
                    'container'       => '',
                    'menu_class'      => 'menu',
                    'echo'            => true,
                    'fallback_cb'     => 'wp_page_menu',
                    'depth'           => 0
                );

                wp_nav_menu( $defaults );

                ?>
            </div>
            <div class="col-xs-4 visible-xs" style="text-align: right">
                <div class="bars animated-bars mobile-bars">
                    <div></div>
                    <div></div>
                    <div></div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="main-menu">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3 col-sm-4 col-xs-8">
                <a href="<?php echo home_url()?>">
                    <img src="<?php echo content_url (); ?>/uploads/2017/08/thentia_logo_c.svg" class="thentia-logo-w" width="150px">
                </a>
            </div>
            <div class="col-md-9 col-sm-8 hidden-xs" style="text-align: right">
                <?php
                $defaults = array(
                    'menu'            => 'top-menu',
                    'container'       => '',
                    'menu_class'      => 'menu',
                    'echo'            => true,
                    'fallback_cb'     => 'wp_page_menu',
                    'depth'           => 0
                );

                wp_nav_menu( $defaults );

                ?>
            </div>
            <div class="col-xs-4 visible-xs" style="text-align: right">
                <div class="bars animated-bars mobile-bars">
                    <div></div>
                    <div></div>
                    <div></div>
                </div>
            </div>
        </div>
    </div>
</div>
